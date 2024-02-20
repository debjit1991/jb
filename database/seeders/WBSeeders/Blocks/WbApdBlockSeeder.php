<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbApdBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_apd_blocks = array(
            array(
                "block_code" => "2919",
                "ref_code" => "210101",
                "block_name" => "ALIPURDUAR-I",
            ),
            array(
                "block_code" => "2920",
                "ref_code" => "210102",
                "block_name" => "ALIPURDUAR-II",
            ),
            array(
                "block_code" => "2922",
                "ref_code" => "210103",
                "block_name" => "FALAKATA",
            ),
            array(
                "block_code" => "2924",
                "ref_code" => "210105",
                "block_name" => "KALCHINI",
            ),
            array(
                "block_code" => "2925",
                "ref_code" => "210104",
                "block_name" => "KUMARGRAM",
            ),
            array(
                "block_code" => "2926",
                "ref_code" => "210106",
                "block_name" => "MADARIHAT",    //madarihat-birpara?
            ),
        );

        foreach ($wb_apd_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '664')->firstOrFail()->id,
            ]);
        }
    }
}
