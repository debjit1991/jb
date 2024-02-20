<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbMpwBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_mpw_blocks = array(
            array(
                "block_code" => "2974",
                "ref_code" => "150318",
                "block_name" => "CHANDRAKONA-I",
            ),
            array(
                "block_code" => "2975",
                "ref_code" => "150319",
                "block_name" => "CHANDRAKONA-II",
            ),
            array(
                "block_code" => "2976",
                "ref_code" => "150213",
                "block_name" => "DANTAN-I",
            ),
            array(
                "block_code" => "2977",
                "ref_code" => "150214",
                "block_name" => "DANTAN-II",
            ),
            array(
                "block_code" => "2978",
                "ref_code" => "150320",
                "block_name" => "DASPUR-I",
            ),
            array(
                "block_code" => "2979",
                "ref_code" => "150321",
                "block_name" => "DASPUR-II",
            ),
            array(
                "block_code" => "2980",
                "ref_code" => "150209",
                "block_name" => "DEBRA",
            ),
            array(
                "block_code" => "2981",
                "ref_code" => "150104",
                "block_name" => "GARBETA-I",    //GARHBETA-I?
            ),
			 array(
                "block_code" => "2982",
                "ref_code" => "150105",
                "block_name" => "GARBETA-II",
            ),
			 array(
                "block_code" => "2983",
                "ref_code" => "150106",
                "block_name" => "GARBETA-III",
            ),
			 array(
                "block_code" => "2984",
                "ref_code" => "150317",
                "block_name" => "GHATAL",
            ),
			 array(
                "block_code" => "2989",
                "ref_code" => "150212",
                "block_name" => "KESHIARY",
            ),
			 array(
                "block_code" => "2990",
                "ref_code" => "150102",
                "block_name" => "KESHPUR",
            ),
			array(
                "block_code" => "2991",
                "ref_code" => "150207",
                "block_name" => "KHARAGPUR-I",
            ),
			 array(
                "block_code" => "2992",
                "ref_code" => "150208",
                "block_name" => "KHARAGPUR-II",
            ),
			 array(
                "block_code" => "2993",
                "ref_code" => "150101",
                "block_name" => "MIDNAPORE",    //midnapore sadar
            ),
			 array(
                "block_code" => "2994",
                "ref_code" => "150216",
                "block_name" => "MOHANPUR",
            ),
            array(
                "block_code" => "2995",
                "ref_code" => "150215",
                "block_name" => "NARAYANGARH",
            ),
			 array(
                "block_code" => "2997",
                "ref_code" => "150211",
                "block_name" => "PINGLA",
            ),
			 array(
                "block_code" => "2998",
                "ref_code" => "150210",
                "block_name" => "SABANG",   //sabong
            ),
			 array(
                "block_code" => "2999",
                "ref_code" => "150103",
                "block_name" => "SALBANI",  //salboni
            ),
        );

        foreach ($wb_mpw_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '318')->firstOrFail()->id,
            ]);
        }
    }
}
