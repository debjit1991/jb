<?php

namespace Database\Seeders\WBSeeders\Blocks;;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbBirBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_bir_blocks = array(
            array(
                "block_code" => "2827",
                "ref_code" => "190201",
                "block_name" => "BOLPUR-SRINIKETAN",
            ),
            array(
                "block_code" => "2828",
                "ref_code" => "190106",
                "block_name" => "DUBRAJPUR",
            ),
            array(
                "block_code" => "2829",
                "ref_code" => "190202",
                "block_name" => "ILLAMBAZAR",
            ),
            array(
                "block_code" => "2830",
                "ref_code" => "190105",
                "block_name" => "KHOYRASOL",
            ),
            array(
                "block_code" => "2831",
                "ref_code" => "190204",
                "block_name" => "LABPUR",
            ),
            array(
                "block_code" => "2832",
                "ref_code" => "190307",
                "block_name" => "MAYURESWAR-I",
            ),
            array(
                "block_code" => "2833",
                "ref_code" => "190308",
                "block_name" => "MAYURESWAR-II",
            ),
            array(
                "block_code" => "2834",
                "ref_code" => "190107",
                "block_name" => "MOHAMMAD BAZAR",   //Md. Bazar?
            ),
            array(
                "block_code" => "2835",
                "ref_code" => "190305",
                "block_name" => "MURARAI-I",
            ),
            array(
                "block_code" => "2836",
                "ref_code" => "190306",
                "block_name" => "MURARAI-II",
            ),
            array(
                "block_code" => "2837",
                "ref_code" => "190303",
                "block_name" => "NALHATI-I",
            ),
            array(
                "block_code" => "2838",
                "ref_code" => "190304",
                "block_name" => "NALHATI-II",
            ),
            array(
                "block_code" => "2839",
                "ref_code" => "190203",
                "block_name" => "NANOOR",
            ),
            array(
                "block_code" => "2840",
                "ref_code" => "190104",
                "block_name" => "RAJNAGAR",
            ),
            array(
                "block_code" => "2841",
                "ref_code" => "190301",
                "block_name" => "RAMPURHAT-I",
            ),
            array(
                "block_code" => "2842",
                "ref_code" => "190302",
                "block_name" => "RAMPURHAT-II",
            ),
            array(
                "block_code" => "2843",
                "ref_code" => "190103",
                "block_name" => "SAINTHIA",
            ),
            array(
                "block_code" => "2844",
                "ref_code" => "190101",
                "block_name" => "SURI-I",
            ),
            array(
                "block_code" => "2845",
                "ref_code" => "190102",
                "block_name" => "SURI-II",
            ),
        );

        foreach ($wb_bir_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '307')->firstOrFail()->id,
            ]);
        }
    }
}
