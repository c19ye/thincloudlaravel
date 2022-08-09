<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MyplanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("my_plans")->insert([
            "name" => "Temel",
            "price" => "9.99",
            "features1" => "Kişisel Kullanım",
            "features2" => "Temel CPU/RAM",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table("my_plans")->insert([
            "name" => "Standart",
            "price" => "99.99",
            "features1" => "Kişisel Kullanım",
            "features2" => "Standart CPU/RAM",
            "features3" => "7/24 Destek",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table("my_plans")->insert([
            "name" => "İşletme",
            "price" => "999.99",
            "features1" => "Kişisel Kullanım",
            "features2" => "Güçlü CPU/RAM",
            "features3" => "Günlük Yedekleme",
            "features4" => "7/24 Destek",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table("my_plans")->insert([
            "name" => "Kurumsal",
            "price" => "9999.99",
            "features1" => "Şirket Kullanımı",
            "features2" => "Güncel CPU/RAM",
            "features3" => "Günlük Yedekleme",
            "features4" => "FileHubs",
            "features5" => "7/24 Destek",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
