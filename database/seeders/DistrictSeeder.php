<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            WBSeeders\WbDistrictSeeder::class, // Seeds the database with all the districts of state West Bengal from lgdirectory.gov.in
        ]);
    }
}
