<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbDpuBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_dpu_blocks = array(
            array(
                "block_code" => "2878",
                "ref_code" => "040201",
                "block_name" => "CHOPRA",
            ),
            array(
                "block_code" => "2880",
                "ref_code" => "040203",
                "block_name" => "GOALPOKHAR-I",
            ),
            array(
                "block_code" => "2879",
                "ref_code" => "040204",
                "block_name" => "GOALPOKHAR II",
            ),
            array(
                "block_code" => "2881",
                "ref_code" => "040103",
                "block_name" => "HEMTABAD",
            ),
            array(
                "block_code" => "2882",
                "ref_code" => "040202",
                "block_name" => "ISLAMPUR",
            ),
            array(
                "block_code" => "2883",
                "ref_code" => "040105",
                "block_name" => "ITAHAR",
            ),
            array(
                "block_code" => "2884",
                "ref_code" => "040104",
                "block_name" => "KALIAGANJ",
            ),
            array(
                "block_code" => "2885",
                "ref_code" => "040205",
                "block_name" => "KARANDIGHI",
            ),
            array(
                "block_code" => "2886",
                "ref_code" => "040102",
                "block_name" => "RAIGANJ",
            ),
        );

        foreach ($wb_dpu_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '311')->firstOrFail()->id,
            ]);
        }
    }
}

