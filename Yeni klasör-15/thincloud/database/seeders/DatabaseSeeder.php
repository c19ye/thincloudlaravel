<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\VirtualMachines;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            MyplanSeeder::class,
            UserSeeder::class,
            OperatingSystem::class,
            DomainSeeder::class,
            FileHubSeeder::class,
            BackupFrequencySeeder::class,
            BackupLocationSeeder::class,
            BackupTechnologySeeder::class,
            CryptMethodSeeder::class,
            DeleteBackupSeeder::class,
            WhatBackupSeeder::class,
        ]);
        VirtualMachines::factory(3)->create();
    }
}
