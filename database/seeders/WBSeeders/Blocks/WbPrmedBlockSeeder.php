<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbPrmedBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_prmed_blocks = array(
            array(
                "block_code" => "2947",
                "ref_code" => "140405",
                "block_name" => "BHAGAWANPUR-I",
            ),
            array(
                "block_code" => "2948",
                "ref_code" => "140308",
                "block_name" => "BHAGAWANPUR-II",
            ),
            array(
                "block_code" => "2949",
                "ref_code" => "140107",
                "block_name" => "CHANDIPUR",
            ),
            array(
                "block_code" => "2950",
                "ref_code" => "140301",
                "block_name" => "CONTAI-I",
            ),
            array(
                "block_code" => "2951",
                "ref_code" => "140303",
                "block_name" => "CONTAI-III",
            ),
            array(
                "block_code" => "2952",
                "ref_code" => "140302",
                "block_name" => "DESHAPRAN",
            ),
            array(
                "block_code" => "2953",
                "ref_code" => "140401",
                "block_name" => "EGRA-I",
            ),
            array(
                "block_code" => "2954",
                "ref_code" => "140402",
                "block_name" => "EGRA-II",
            ),
			 array(
                "block_code" => "2955",
                "ref_code" => "140203",
                "block_name" => "HALDIA",
            ),
			 array(
                "block_code" => "2956",
                "ref_code" => "140306",
                "block_name" => "KHEJURI-I",
            ),
			 array(
                "block_code" => "2957",
                "ref_code" => "140307",
                "block_name" => "KHEJURI-II",
            ),
			 array(
                "block_code" => "2958",
                "ref_code" => "140102",
                "block_name" => "KOLAGHAT",
            ),
			 array(
                "block_code" => "2959",
                "ref_code" => "140201",
                "block_name" => "MAHISHADAL",
            ),
			 array(
                "block_code" => "2960",
                "ref_code" => "140106",
                "block_name" => "MOYNA",
            ),
			 array(
                "block_code" => "2961",
                "ref_code" => "140105",
                "block_name" => "NANDAKUMAR",
            ),
			 array(
                "block_code" => "2962",
                "ref_code" => "140205",
                "block_name" => "NANDIGRAM-I",
            ),
			 array(
                "block_code" => "2963",
                "ref_code" => "140204",
                "block_name" => "NANDIGRAM-II",
            ),
			 array(
                "block_code" => "2964",
                "ref_code" => "140101",
                "block_name" => "PANSKURA-I",
            ),
			 array(
                "block_code" => "2965",
                "ref_code" => "140403",
                "block_name" => "PATASHPUR-I",
            ),
			 array(
                "block_code" => "2966",
                "ref_code" => "140404",
                "block_name" => "PATASHPUR-II",
            ),
			 array(
                "block_code" => "2967",
                "ref_code" => "140304",
                "block_name" => "RAMNAGAR-I",
            ),
			 array(
                "block_code" => "2968",
                "ref_code" => "140305",
                "block_name" => "RAMNAGAR-II",
            ),
			 array(
                "block_code" => "2969",
                "ref_code" => "140104",
                "block_name" => "SHAHID MATANGINI",
            ),
			 array(
                "block_code" => "2970",
                "ref_code" => "140202",
                "block_name" => "SUTAHATA",
            ),
			 array(
                "block_code" => "2971",
                "ref_code" => "140103",
                "block_name" => "TAMLUK",
            ),
        );

        foreach ($wb_prmed_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '317')->firstOrFail()->id,
            ]);
        }
    }
}
