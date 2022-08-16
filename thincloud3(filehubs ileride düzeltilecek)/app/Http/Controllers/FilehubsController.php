<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departmant;
use App\Models\Virtualmachine;
use App\Models\Filehubs;

class FilehubsController extends Controller
{
    public function showpage(){

        $filehub = FileHubs::get();
        $virtual = Virtualmachine::select('name')->get();
        $departman = Departmant::select('name')->get();

        return view('pages.filehubs', compact('virtual','departman','filehub'));
    }

    public function create_filehub(Request $request){

        $formFields = $request->validate([
            "name" => ['required'],
            "storage_size" => ['required'],
            "backup_time" => ['required']
        ],
        [
            "name.required" => "Filehub'ınıza isim vermelisiniz!",
            "storage_size.required" => "FileHub'ınızın boyutunu seçmelisiniz!",
            "backup_time.required" => "Yedekleme aralığı seçmelisiniz!"
        ]
        );

        $filehub = new Filehubs;
        $filehub->user_id = auth()->user_id;
        $filehub->save();

    }

    public function add_filehub_user(Request $request){
        
        if(count($request->add_filehub_select) == 0 || count($request->add_filehub_vm) == 0 || count($request->add_filehub_departman) == 0){
            $formFields = $request->validate([
                "add_filehub_select" => ['required'],
                "add_filehub_vm" => ['required'],
                "add_filehub_departman" => ['required']
            ],
            [
                "add_filehub_select.required" => "Ekleme yapmak için en az bir filehub seçmelisiniz!",
                "add_filehub_vm.required" => "Ekleme yapmak için en az bir thincloud seçmelisiniz!",
                "add_filehub_departman.required" => "Ekleme yapmak için en az bir departman seçmelisiniz!",
            ]
        );
        }

        dd($request->add_filehub_select);
        dd($request);

        // foreach($request->add_filehub_select as $key){

        // }

    }
}
