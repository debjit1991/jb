<?php

namespace Database\Seeders;
use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            WBSeeders\Blocks\WbDarjBlockSeeder::class,
            WBSeeders\Blocks\WbPrmedBlockSeeder::class,
            WBSeeders\Blocks\WbApdBlockSeeder::class,
            WBSeeders\Blocks\WbBirBlockSeeder::class,
            WBSeeders\Blocks\WbBnrBlockSeeder::class,
            WBSeeders\Blocks\WbBrdBlockSeeder::class,
            WBSeeders\Blocks\WbCbhBlockSeeder::class,
            WBSeeders\Blocks\WbDpdBlockSeeder::class,
            WBSeeders\Blocks\WbDpuBlockSeeder::class,
            WBSeeders\Blocks\WbGrmBlockSeeder::class,
            WBSeeders\Blocks\WbHooBlockSeeder::class,
            WBSeeders\Blocks\WbHwrBlockSeeder::class,
            WBSeeders\Blocks\WbJlpBlockSeeder::class,
            WBSeeders\Blocks\WbMbrBlockSeeder::class,
            WBSeeders\Blocks\WbMldBlockSeeder::class,
            WBSeeders\Blocks\WbMpnBlockSeeder::class,
            WBSeeders\Blocks\WbMpwBlockSeeder::class,
            WBSeeders\Blocks\WbMrsBlockSeeder::class,
            WBSeeders\Blocks\WbN24BlockSeeder::class,
            WBSeeders\Blocks\WbNadBlockSeeder::class,
            WBSeeders\Blocks\WbPrlBlockSeeder::class,
            WBSeeders\Blocks\WbS24BlockSeeder::class,
        ]);
    }
}
