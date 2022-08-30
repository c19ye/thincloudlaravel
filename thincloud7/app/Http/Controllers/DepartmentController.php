<?php

namespace App\Http\Controllers;

use App\Http\Resources\VirtualmachineResource;
use App\Models\Department;
use App\Models\Domain;
use App\Models\FileHub;
use App\Models\VirtualMachines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class DepartmentController extends Controller
{
    public function show()
    {
        $thinclouds = VirtualMachines::where("user_id",auth()->user()->id)->get();
        $domains = Domain::get();
        $filehubs = FileHub::get();
        $departments = Department::where('user_id', auth()->user()->id)->get();
        $number = 1;

        //$fileName = 'user-list.json';
        //File::put(public_path('/app-assets/data/'.$fileName),$data);
        return view('pages.department', compact('thinclouds', 'number', 'domains', 'filehubs', 'departments'));
    }

    public function datatableJson($department_id)
    {
        return VirtualmachineResource::collection(VirtualMachines::where('department_id', $department_id)->get());
    }

    public function create(Request $request)
    {
        $request->validateWithBag("createdepartment",[
            'name' => ['required', 'min:3', Rule::unique('departments', 'name')->where("user_id",auth()->user()->id)],
            'superior_name' => 'min:3',

        ],
            [
                'name.required' => 'Departman İsmini Girin',
                'name.min' => 'Departman İsmi Minimum 3 Karakterden Oluşmalıdır',
                'name.unique' => 'Departman İsmi Mevcut',

                "superior_name.min" => "Kullanıcı İsmi Minimum 3 Karakterden Oluşmalıdır",
            ]
        );

        // //Create
        $request['user_id'] = auth()->user()->id;
        Department::create($request->except("thincloud_id"));

        $department_id = Department::where('name', $request->name)->first();

        FileHub::where('id', $request->filehub_id)->update([
            'department_id' => $department_id->id,
        ]);

        foreach ($request->thincloud_id as $key) {
            VirtualMachines::where('id', $key)->update([
                'department_id' => $department_id->id,
            ]);
        }

        return redirect('/mynetwork/department')->withSuccess("Departman Başarıyla Oluşturuldu.");
    }

    public function delete(Request $request)
    {
        Department::where('id', $request->data)->update([
            'user_id' => 99999,
        ]);
    }
    public function deleteUser($user_id){
        VirtualMachines::where("id",$user_id)->update([
            "department_id" => -1,
        ]);

        return redirect("/mynetwork/department");
    }
    public function adduser(Request $request){
        $request->validateWithBag("useradd",[
            "thincloud_id" => "required_without_all",
        ],
        [
            'thincloud_id.required_without_all' => 'Lütfen Kullanıcı Seçin',

        ]
    );



        foreach ($request->thincloud_id as $key) {
            VirtualMachines::where('id', $key)->update([
                'department_id' => $request->department_id,
            ]);
        }

        return redirect("/mynetwork/department")->withSuccess("Kullanıcı Başarıyla Eklendi.");
    }
}
