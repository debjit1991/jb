<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbDarjBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_darj_blocks = array(
            array(
                "block_code" => "2858",
                "ref_code" => "030201",
                "block_name" => "DARJEELING-PULBAZAR",
            ),
            array(
                "block_code" => "2860",
                "ref_code" => "030203",
                "block_name" => "JORE BUNGLOW-SUKIAPOKHRI",
            ),
            array(
                "block_code" => "2863",
                "ref_code" => "030403",
                "block_name" => "KHARIBARI",
            ),
            array(
                "block_code" => "2864",
                "ref_code" => "030301",
                "block_name" => "KURSEONG",
            ),
            array(
                "block_code" => "2865",
                "ref_code" => "030401",
                "block_name" => "MATIGARA",
            ),
            array(
                "block_code" => "2866",
                "ref_code" => "030101",
                "block_name" => "MIRIK",
            ),
            array(
                "block_code" => "2867",
                "ref_code" => "030402",
                "block_name" => "NAXAL BARI",
            ),
            array(
                "block_code" => "2868",
                "ref_code" => "030404",
                "block_name" => "PHANSIDEWA",
            ),
            array(
                "block_code" => "2869",
                "ref_code" => "030202",
                "block_name" => "RANGLI RANGLIOT",
            ),
        );

        foreach ($wb_darj_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '309')->firstOrFail()->id,
            ]);
        }
    }
}
