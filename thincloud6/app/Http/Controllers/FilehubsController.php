<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\FileHub;
use App\Models\FilehubsDepartment;
use App\Models\FilehubsVm;
use App\Models\Role;
use App\Models\VirtualMachines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilehubsController extends Controller
{
    public function showpage()
    {
        $filehub = FileHub::where('user_id', auth()->user()->id)->get();
        $filehubcheck = Filehub::where('user_id', auth()->user()->id)->first();
        $virtual = VirtualMachines::where('user_id', auth()->user()->id)->get();
        $departman = Department::where('user_id', auth()->user()->id)->get();
        $fileDepart = FilehubsDepartment::get();
        $fileVm = FilehubsVm::get();
        $roles = Role::get();

        return view('pages.filehubs', compact('virtual', 'departman', 'filehub', 'fileDepart', 'fileVm', 'roles', 'filehubcheck'));
    }

    public function create_filehub(Request $request)
    {
        $formFields = $request->validateWithBag("createfilehub",
            [
                'name' => ['required'],
                'storage_size' => ['required'],
                'backup_time' => ['required'],
                'select_departmans' => ['required'],
                'select_vms' => ['required']
            ],
            [
                'name.required' => "Filehub'ınıza isim vermelisiniz!",
                'storage_size.required' => "FileHub'ınızın boyutunu seçmelisiniz!",
                'backup_time.required' => 'Yedekleme aralığı seçmelisiniz!',
                'select_departmans.required' => "En az bir departman seçmelisiniz",
                'select_vms.required' => "En az bir thincloud seçmelisiniz"
            ]
        );

        $filehub = new Filehub;
        $filehub->user_id = auth()->user()->id;
        $filehub->name = $request->name;
        $filehub->storage_size = $request->storage_size;
        $filehub->backup_time = $request->backup_time;

        $filehub->save();

        foreach ($request->select_departmans as $dep) {
            DB::table('filehubs_department')->insert([
                'department_id' => $dep,
                'filehubs_id' => $filehub->id,
            ]);
        }

        foreach ($request->select_vms as $vm) {
            DB::table('filehubs_vm')->insert([
                'thincloud_id' => $vm,
                'filehubs_id' => $filehub->id,
            ]);
        }

        return redirect('/mynetwork/filehubs')->with('success', 'Başarıyla Filehub oluşturuldu.');
    }

    public function add_filehub_user(Request $request)
    {
            $formFields = $request->validateWithBag("adduser",
                [
                    'add_filehub' => ['required'],
                    'add_vm' => ['required'],
                    'add_departman' => ['required'],

                ],
                [
                    'add_filehub.required' => 'Ekleme yapmak için en az bir filehub seçmelisiniz!',
                    'add_vm.required' => 'Ekleme yapmak için en az bir thincloud seçmelisiniz!',
                    'add_departman.required' => 'Ekleme yapmak için en az bir departman seçmelisiniz!',
                ]
            );


        foreach ($request->add_filehub as $file) {
            $filehub = $file;

            foreach ($request->add_departman as $dep) {
                DB::table('filehubs_department')->insert([
                    'department_id' => $dep,
                    'filehubs_id' => $filehub,
                ]);
            }

            foreach ($request->add_vm as $vm) {
                DB::table('filehubs_vm')->insert([
                    'thincloud_id' => $vm,
                    'filehubs_id' => $filehub,
                ]);
            }
        }

        return redirect('/mynetwork/filehubs')->with('success','Başarıyla kullanıcı eklendi');
    }

    public function download_filehub(Request $request){

            $formfields = $request->validateWithBag("downloadfilehub",[
                'download_filehub' => ['required'],
                'location' => ['required'],
            ],
                [
                    'download_filehub.required' => "İndireceğiniz Filehub'ı seçmelisiniz!",
                    'location.required' => 'Lokasyonunuzu seçmelisiniz!',
                ]
            );

            foreach ($request->download_filehub as $file) {
                $filehub = Filehub::find($file);

                $filehub->location = $request->location;

                $filehub->save();
            }

            //İndirme işlemi başlayacak!!!
            return redirect('/mynetwork/filehubs');
    }


    public function update(Request $request)
    {
        $input = array_filter(request()->except(['_token']));

        VirtualMachines::find($request->id)->update($input);

        return redirect('/mynetwork/filehubs');
    }

    public function Notification(Request $request)
    {
        Filehub::where('user_id', '=', auth()->user()->id)->update([
            'auto_backup' => $request->auto_backup,
            'auto_scan' => $request->auto_scan,
            'critical_notification' => $request->critical_notification,
        ]);
    }
}
