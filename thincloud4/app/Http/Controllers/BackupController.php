<?php

namespace App\Http\Controllers;

use App\Models\Backup;
use App\Models\BackupFrequency;
use App\Models\BackupLocation;
use App\Models\BackupTechnology;
use App\Models\CryptMethod;
use App\Models\DeleteBackup;
use App\Models\Department;
use App\Models\VirtualMachines;
use App\Models\WhatBackup;
use Illuminate\Http\Request;

class BackupController extends Controller
{
    public function show()
    {
        $virtual_machines = VirtualMachines::where('user_id', auth()->user()->id)->get();
        $departments = Department::where('user_id', auth()->user()->id)->get();

        $backups = Backup::where('user_id', auth()->user()->id)->get();

        $backup_frequencies = BackupFrequency::get();
        $backup_locations = BackupLocation::get();
        $backup_technologies = BackupTechnology::get();
        $crypt_methods = CryptMethod::get();
        $delete_backups = DeleteBackup::get();
        $what_backups = WhatBackup::get();

        return view('pages.backup', compact('virtual_machines', 'backups', 'departments', 'backup_frequencies', 'backup_locations', 'backup_technologies', 'crypt_methods', 'delete_backups', 'what_backups'));
    }

    public function create(Request $request)
    {
        $request->validate([
            "virtual_machine_id"  => ['required'],
            "backup_frequency"  => ['required'],
            "backup_technology"  => ['required'],
            "crypt_method"  => ['required'],
            "what_backup"  => ['required'],
            "backup_location"  => ['required'],
            "delete_backup"  => ['required'],
        ],[
            "virtual_machine_id.required" => "Lütfen Sanal Bilgisayar Seçin",
            "backup_frequency.required" => "Eksik Seçim Yapıldı!",
            "backup_technology.required" => "Eksik Seçim Yapıldı!",
            "crypt_method.required" => "Eksik Seçim Yapıldı!",
            "what_backup.required" => "Eksik Seçim Yapıldı!",
            "backup_location.required" => "Eksik Seçim Yapıldı!",
            "delete_backup.required" => "Eksik Seçim Yapıldı!"
        ]);
        $request['user_id'] = auth()->user()->id;
        $request['backup_number'] = 'TCB'.rand(1000, 9999);
        $request['size'] = 11;
        Backup::create($request->all());

        $backup_id = Backup::where('virtual_machine_id', $request->virtual_machine_id)->first();

        VirtualMachines::where('id', $request->virtual_machine_id)->update([
            'backup_id' => $backup_id->id,
        ]);

        return redirect('/mynetwork/backup')->withSuccess("Yedekleme Başarıyla Oluşturuldu.");
    }

    public function update(Request $request)
    {
        $backup = Backup::find($request->id);

        if ($backup->backup_frequency != $request->backup_frequency) {
            $backup->backup_frequency = $request->backup_frequency;
        }
        if ($backup->backup_technology != $request->backup_technology) {
            $backup->backup_technology = $request->backup_technology;
        }
        if ($backup->crypt_method != $request->crypt_method) {
            $backup->crypt_method = $request->crypt_method;
        }
        if ($backup->what_backup != $request->what_backup) {
            $backup->what_backup = $request->what_backup;
        }
        if ($backup->backup_location != $request->backup_location) {
            $backup->backup_location = $request->backup_location;
        }
        if ($backup->delete_backup != $request->delete_backup) {
            $backup->delete_backup = $request->delete_backup;
        }

        $backup->save();

        return redirect('/mynetwork/backup');
    }

    public function delete($backup_id){

        Backup::where("id",$backup_id)->where("user_id",auth()->user()->id)->delete();
        VirtualMachines::where("backup_id",$backup_id)->update([
            "backup_id" => null,
        ]);

        return redirect("/mynetwork/backup");
    }
}
