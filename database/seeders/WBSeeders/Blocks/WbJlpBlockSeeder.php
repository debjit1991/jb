<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbJlpBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_jlp_blocks = array(
            array(
                "block_code" => "7483",
                "ref_code" => "",
                "block_name" => "BANARHAT",
            ),
            array(
                "block_code" => "2921",
                "ref_code" => "020104",
                "block_name" => "DHUPGURI",
            ),
            array(
                "block_code" => "2923",
                "ref_code" => "",
                "block_name" => "JALPAIGURI",
            ),
            array(
                "block_code" => "7484",
                "ref_code" => "",
                "block_name" => "KRANTI",
            ),
            array(
                "block_code" => "2927",
                "ref_code" => "020305",
                "block_name" => "MAL",
            ),
            array(
                "block_code" => "2928",
                "ref_code" => "020306",
                "block_name" => "MATIALI",
            ),
            array(
                "block_code" => "2929",
                "ref_code" => "020103",
                "block_name" => "MAYNAGURI",
            ),
            array(
                "block_code" => "2930",
                "ref_code" => "020307",
                "block_name" => "NAGRAKATA",
            ),
            array(
                "block_code" => "2931",
                "ref_code" => "020102",
                "block_name" => "RAJGANJ",
            ),
        );

        foreach ($wb_jlp_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '314')->firstOrFail()->id,
            ]);
        }
    }
}
