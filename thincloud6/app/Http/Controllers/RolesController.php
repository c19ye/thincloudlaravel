<?php

namespace App\Http\Controllers;

use App\Http\Resources\RolesResource;
use App\Models\Role;
use App\Models\VirtualMachines;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RolesController extends Controller
{
    public function showpage()
    {
        $roles = Role::where('user_id', auth()->user()->id)->get();
        $thinclouds = VirtualMachines::where("user_id", auth()->user()->id)->get();
        $rolecount = VirtualMachines::where("user_id", auth()->user()->id)->where("role_id","!=",null)->get();

        return view('pages.roles', compact('roles',"thinclouds","rolecount"));
    }

    public function datatableJson()
    {
        return RolesResource::collection(VirtualMachines::where('user_id', auth()->user()->id)->where('role_id', '!=', null)->get());
    }

    public function create(Request $request)
    {
        $request->validateWithBag('create', [
            'name' => ['required', 'min:3', Rule::unique('roles', 'name')->where("user_id",auth()->user()->id)],
        ],
            [
                'name.required' => 'Rol ismini girin',
                'name.min' => 'Minimum 3 karakter gir',
                'name.unique' => 'Bu isimde bir rol mevcut',
            ]
        );

        $request['user_id'] = auth()->user()->id;

        Role::create($request->all());

        return redirect('/roles')->withSuccess("Yeni Rol Başarıyla Oluşturuldu.");
    }

    public function update(Request $request)
    {
        $name = Role::where('id', $request->id)->first();

        if ($name->name != $request->name) {
            $request->validateWithBag('update', [
                'name' => ['required', 'min:3', Rule::unique('roles', 'name')->where("user_id",auth()->user()->id)],
            ],
                [
                    'name.required' => 'Rol ismini girin',
                    'name.min' => 'Minimum 3 karakter gir',
                    'name.unique' => 'Bu isimde bir rol mevcut',
                ]
            );
        }
        Role::find($request->id)->update($request->all());

        return redirect('/roles');
    }

    public function adduser(Request $request){
        $request->validateWithBag("useradd",[
            "thincloud_id" => "required_without_all",
        ],
        [
            'thincloud_id.required_without_all' => 'Lütfen Kullanıcı Seçin',

        ]
    );
        VirtualMachines::where("role_id",$request->role_id)->update([
            "role_id" => null,
        ]);

        foreach ($request->thincloud_id as $key) {
            VirtualMachines::where('id', $key)->update([
                    'role_id' => $request->role_id,
            ]);
        }

        return redirect("/roles")->withSuccess("Kullanıcı Başarıyla Eklendi.");
    }
    public function deleteuser($id){
        VirtualMachines::where("id",$id)->update([
            "role_id" => null,
        ]);

        return redirect("/roles");
    }
    public function delete($id){
        Role::where("id",$id)->delete();
        VirtualMachines::where("role_id",$id)->update([
            "role_id" => null,
        ]);

        return redirect("/roles");
    }
}
