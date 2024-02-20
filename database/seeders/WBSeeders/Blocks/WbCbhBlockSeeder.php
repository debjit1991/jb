<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbCbhBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_cbh_blocks = array(
            array(
                "block_code" => "2847",
                "ref_code" => "010101",
                "block_name" => "COOCHBEHAR I",
            ),
            array(
                "block_code" => "2846",
                "ref_code" => "010102",
                "block_name" => "COOCH BEHAR II",
            ),
            array(
                "block_code" => "2848",
                "ref_code" => "010201",
                "block_name" => "DINHATA-I",
            ),
            array(
                "block_code" => "2849",
                "ref_code" => "010202",
                "block_name" => "DINHATA-II",
            ),
            array(
                "block_code" => "2850",
                "ref_code" => "010402",
                "block_name" => "HALDIBARI",
            ),
            array(
                "block_code" => "2852",
                "ref_code" => "010301",
                "block_name" => "MATHABHANGA-I",
            ),
            array(
                "block_code" => "2851",
                "ref_code" => "010302",
                "block_name" => "MATHABHANGA II",
            ),
            array(
                "block_code" => "2853",
                "ref_code" => "010401",
                "block_name" => "MEKLIGANJ",
            ),
            array(
                "block_code" => "2854",
                "ref_code" => "010203",
                "block_name" => "SITAI",
            ),
            array(
                "block_code" => "2855",
                "ref_code" => "010303",
                "block_name" => "SITALKUCHI",
            ),
            array(
                "block_code" => "2856",
                "ref_code" => "010501",
                "block_name" => "TUFANGANJ-I",
            ),
            array(
                "block_code" => "2857",
                "ref_code" => "010502",
                "block_name" => "TUFANGANJ-II",
            ),
        );

        foreach ($wb_cbh_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '308')->firstOrFail()->id,
            ]);
        }
    }
}
