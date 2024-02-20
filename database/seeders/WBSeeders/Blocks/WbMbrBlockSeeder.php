<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbMbrBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_mbr_blocks = array(
            array(
                "block_code" => "2798",
                "ref_code" => "200101",
                "block_name" => "BARABANI",
            ),
            array(
                "block_code" => "2802",
                "ref_code" => "200202",
                "block_name" => "FARIDPUR - DURGAPUR",      //Durgapur- faridpur
            ),
            array(
                "block_code" => "2806",
                "ref_code" => "200102",
                "block_name" => "JAMURIA",
            ),
            array(
                "block_code" => "2809",
                "ref_code" => "200204",
                "block_name" => "KANKSA",
            ),
            array(
                "block_code" => "2819",
                "ref_code" => "200201",
                "block_name" => "ONDAL",    //Andal
            ),
            array(
                "block_code" => "2820",
                "ref_code" => "200205",
                "block_name" => "PANDABESWAR",
            ),
            array(
                "block_code" => "2825",
                "ref_code" => "200103",
                "block_name" => "RANIGANJ",
            ),
            array(
                "block_code" => "2826",
                "ref_code" => "200104",
                "block_name" => "SALANPUR",
            ),
        );

        foreach ($wb_mbr_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '704')->firstOrFail()->id,
            ]);
        }
    }
}
