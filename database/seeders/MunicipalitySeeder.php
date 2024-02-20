<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            WBSeeders\Municipalities\WbDarjMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbPrmedMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbS24MunicipalitySeeder::class,
            WBSeeders\Municipalities\WbPRLMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbNADMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbN24MunicipalitySeeder::class,
            WBSeeders\Municipalities\WbMRSMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbMPWMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbMPNMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbMLDMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbMBRMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbKLKMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbJLPMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbHWRMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbHOOMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbGRMMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbDPUMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbDPDMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbCBHMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbBRDMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbBIRMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbAPDMunicipalitySeeder::class,
            WBSeeders\Municipalities\WbBNRMunicipalitySeeder::class,
        ]);
    }
}
