<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbBnrBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_bnr_blocks = array(
            array(
                "block_code" => "2774",
                "ref_code" => "170106",
                "block_name" => "BANKURA-I",
            ),
            array(
                "block_code" => "2775",
                "ref_code" => "170107",
                "block_name" => "BANKURA-II",
            ),
            array(
                "block_code" => "2776",
                "ref_code" => "170108",
                "block_name" => "BARJORA",
            ),
            array(
                "block_code" => "2777",
                "ref_code" => "170105",
                "block_name" => "CHHATNA",
            ),
            array(
                "block_code" => "2778",
                "ref_code" => "170104",
                "block_name" => "GANGAJAL GHATI",
            ),
            array(
                "block_code" => "2779",
                "ref_code" => "170306",
                "block_name" => "HIRBANDH",
            ),
            array(
                "block_code" => "2780",
                "ref_code" => "170302",
                "block_name" => "INDPUR",
            ),
            array(
                "block_code" => "2781",
                "ref_code" => "170204",
                "block_name" => "INDUS",
            ),
            array(
                "block_code" => "2782",
                "ref_code" => "170206",
                "block_name" => "JAYPUR",   //Joypur?
            ),
            array(
                "block_code" => "2783",
                "ref_code" => "170305",
                "block_name" => "KHATRA-I",     //khatra
            ),
            array(
                "block_code" => "2784",
                "ref_code" => "170205",
                "block_name" => "KOTULPUR",
            ),
            array(
                "block_code" => "2785",
                "ref_code" => "170103",
                "block_name" => "MEJHIA",
            ),
            array(
                "block_code" => "2786",
                "ref_code" => "170109",
                "block_name" => "ONDA",
            ),
            array(
                "block_code" => "2787",
                "ref_code" => "170203",
                "block_name" => "PATRASAYER",
            ),
            array(
                "block_code" => "2788",
                "ref_code" => "170308",
                "block_name" => "RAIPUR-I", //Raipur
            ),
            array(
                "block_code" => "2789",
                "ref_code" => "170307",
                "block_name" => "RANIBUNDH",    //Ranibandh
            ),
            array(
                "block_code" => "2790",
                "ref_code" => "170102",
                "block_name" => "SALTORA",
            ),
            array(
                "block_code" => "2791",
                "ref_code" => "170309",
                "block_name" => "SARENGA",
            ),
            array(
                "block_code" => "2792",
                "ref_code" => "170304",
                "block_name" => "SIMLAPAL",
            ),
            array(
                "block_code" => "2793",
                "ref_code" => "170202",
                "block_name" => "SONAMUKHI",
            ),
            array(
                "block_code" => "2794",
                "ref_code" => "170303",
                "block_name" => "TALDANGRA",
            ),
            array(
                "block_code" => "2795",
                "ref_code" => "170207",
                "block_name" => "VISHNUPUR",    //Bishnupur
            ),
        );

        foreach ($wb_bnr_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '305')->firstOrFail()->id,
            ]);
        }
    }
}
