<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilehubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("filehubs")->insert([
            'user_id' => 1,
            'name' => "filehub1",
            'departman_id' => 2,
            'storage_size' => 100,
            'used_storage' => 80,
            'backup_time' => 'daily',
            'permission' => true,
            'virtualmachine_id' => 2,
            'location' => 'Europa',
        ]);
    }
}
