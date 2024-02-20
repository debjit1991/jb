<?php

namespace Database\Seeders;

use Database\Seeders\UserSeeders\StateAdminSeeder;
use Database\Seeders\UserSeeders\SuperAdminSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            SuperAdminSeeder::class,
            StateAdminSeeder::class,
        ]);
    }
}
