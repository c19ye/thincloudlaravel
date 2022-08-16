<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VirtualmachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("virtualmachine")->insert([
            "name" => "thincloud 1",
            "write_permission" => false,
        ]);
        DB::table("virtualmachine")->insert([
            "name" => "thincloud 2",
            "write_permission" => false,
        ]);
        DB::table("virtualmachine")->insert([
            "name" => "thincloud 3",
            "write_permission" => false,
        ]);
        
    }
}