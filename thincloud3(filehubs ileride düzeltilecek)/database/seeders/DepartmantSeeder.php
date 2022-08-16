<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("departmant")->insert([
            "name" => "departmant 1",
            "write_permission" => false,
        ]);
        DB::table("departmant")->insert([
            "name" => "departmant 2",
            "write_permission" => false,
        ]);
        DB::table("departmant")->insert([
            "name" => "departmant 3",
            "write_permission" => false,
        ]);
    }
}
