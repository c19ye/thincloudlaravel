<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password_ = 'abkbbb';
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => bcrypt($password_),
            'email' => 'admin@admin.com',
            'name' => 'Erhan',
            'surname' => 'Özalp',
            'phone' => '01234567891',
            'organization_name' => 'Rakun',
            'address' => 'asdasd',
            'city' => 'Ankara',
            'zipcode' => '12345',
            'birthdate' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
