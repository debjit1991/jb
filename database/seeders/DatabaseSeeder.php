<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            /**
             * Master Area Seeders
             */
            StateSeeder::class, // Seeds the database with all the states of India from lgdirectory.gov.in
            DistrictSeeder::class, // Seeds the database with the Districts
            BlockSeeder::class, // Seeds the database with the Blocks
            MunicipalitySeeder::class, // Seeds the database with the Municipalities
            PoliceStationSeeder::class, // Seeds the database with Police Stations
            /**
             * Role and Permission Seeder
             */
            RolePermissionSeeder::class,

            /**
             * User Seeder
             */
            UserSeeder::class,
        ]);
    }
}
