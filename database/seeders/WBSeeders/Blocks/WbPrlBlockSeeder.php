<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbPrlBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_prl_blocks = array(
            array(
                "block_code" => "3044",
                "ref_code" => "160101",
                "block_name" => "ARSHA",
            ),
            array(
                "block_code" => "3045",
                "ref_code" => "160201",
                "block_name" => "BAGMUNDI",
            ),
            array(
                "block_code" => "3046",
                "ref_code" => "160102",
                "block_name" => "BALARAMPUR",
            ),
            array(
                "block_code" => "3047",
                "ref_code" => "160402",
                "block_name" => "BARABAZAR",
            ),
            array(
                "block_code" => "3048",
                "ref_code" => "",
                "block_name" => "BUNDWAN",
            ),
            array(
                "block_code" => "3049",
                "ref_code" => "160103",
                "block_name" => "HURA",
            ),
            array(
                "block_code" => "3050",
                "ref_code" => "160205",
                "block_name" => "JAIPUR",   //Joypur
            ),
            array(
                "block_code" => "3051",
                "ref_code" => "160202",
                "block_name" => "JHALDA-I",
            ),
            array(
                "block_code" => "3052",
                "ref_code" => "160203",
                "block_name" => "JHALDA-II",
            ),
            array(
                "block_code" => "3053",
                "ref_code" => "160301",
                "block_name" => "KASHIPUR",
            ),
            array(
                "block_code" => "3054",
                "ref_code" => "160403",
                "block_name" => "MANBAZAR-I",
            ),
            array(
                "block_code" => "3055",
                "ref_code" => "160404",
                "block_name" => "MANBAZAR-II",
            ),
            array(
                "block_code" => "3056",
                "ref_code" => "160302",
                "block_name" => "NETURIA",
            ),
            array(
                "block_code" => "3057",
                "ref_code" => "160303",
                "block_name" => "PARA",
            ),
            array(
                "block_code" => "3058",
                "ref_code" => "160405",
                "block_name" => "PUNCHA",
            ),
            array(
                "block_code" => "3059",
                "ref_code" => "160104",
                "block_name" => "PURULIA-I",
            ),
            array(
                "block_code" => "3060",
                "ref_code" => "160105",
                "block_name" => "PURULIA-II",
            ),
            array(
                "block_code" => "3061",
                "ref_code" => "160304",
                "block_name" => "RAGHUNATH PUR-I",
            ),
            array(
                "block_code" => "3062",
                "ref_code" => "160305",
                "block_name" => "RAGHUNATHPUR-II",
            ),
            array(
                "block_code" => "3063",
                "ref_code" => "160306",
                "block_name" => "SANTURI",
            ),
        );

        foreach ($wb_prl_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '321')->firstOrFail()->id,
            ]);
        }
    }
}


