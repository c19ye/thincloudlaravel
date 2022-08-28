<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'Mühendislik',
            'superior_name' => 'Erhan',
            'user_id' => 1
        ]);
        
        DB::table('departments')->insert([
            'name' => 'Muhasebe',
            'superior_name' => 'Erhan',
            'user_id' => 1
        ]);

        DB::table('departments')->insert([
            'name' => 'Mimarlık',
            'superior_name' => 'Erhan',
            'user_id' => 1
        ]);

        DB::table('departments')->insert([
            'name' => 'İnsan Kaynakları',
            'superior_name' => 'Erhan',
            'user_id' => 1
        ]);
    }
}
