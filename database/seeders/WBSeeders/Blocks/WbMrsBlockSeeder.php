<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbMrsBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            $wb_mrs_blocks = array(
                array(
                    "block_code" => "3001",
                    "ref_code" => "070201",
                    "block_name" => "BELDANGA-I",
                ),
                array(
                    "block_code" => "3002",
                    "ref_code" => "070202",
                    "block_name" => "BELDANGA-II",
                ),
                array(
                    "block_code" => "3003",
                    "ref_code" => "070203",
                    "block_name" => "BERHAMPORE",
                ),
                array(
                    "block_code" => "3004",
                    "ref_code" => "070402",
                    "block_name" => "BHAGABANGOLA-II",
                ),
                array(
                    "block_code" => "3005",
                    "ref_code" => "070401",
                    "block_name" => "BHAGAWANGOLA-I",
                ),
                array(
                    "block_code" => "3006",
                    "ref_code" => "070301",
                    "block_name" => "BHARATPUR-I",
                ),
                array(
                    "block_code" => "3007",
                    "ref_code" => "070302",
                    "block_name" => "BHARATPUR-II",
                ),
                array(
                    "block_code" => "3008",
                    "ref_code" => "070303",
                    "block_name" => "BURWAN",
                ),
                array(
                    "block_code" => "3009",
                    "ref_code" => "070501",
                    "block_name" => "DOMKAL",
                ),
                array(
                    "block_code" => "3010",
                    "ref_code" => "070101",
                    "block_name" => "FARAKKA",
                ),
                array(
                    "block_code" => "3011",
                    "ref_code" => "070204",
                    "block_name" => "HARIHARPARA",
                ),
                array(
                    "block_code" => "3012",
                    "ref_code" => "070502",
                    "block_name" => "JALANGI",
                ),
                array(
                    "block_code" => "3013",
                    "ref_code" => "070304",
                    "block_name" => "KANDI",
                ),
                array(
                    "block_code" => "3014",
                    "ref_code" => "070305",
                    "block_name" => "KHARGRAM",
                ),
                array(
                    "block_code" => "3015",
                    "ref_code" => "070403",
                    "block_name" => "LALGOLA",
                ),
                array(
                    "block_code" => "3016",
                    "ref_code" => "070404",
                    "block_name" => "MURSHIDABAD-JIAGUNJ",
                ),
                array(
                    "block_code" => "3017",
                    "ref_code" => "070405",
                    "block_name" => "NABAGRAM",
                ),
                array(
                    "block_code" => "3018",
                    "ref_code" => "070205",
                    "block_name" => "NAWDA",    //Naoda
                ),
                array(
                    "block_code" => "3019",
                    "ref_code" => "070102",
                    "block_name" => "RAGHUNATHGANJ-I",
                ),
                array(
                    "block_code" => "3020",
                    "ref_code" => "070103",
                    "block_name" => "RAGHUNATHGANJ-II",
                ),
                array(
                    "block_code" => "3021",
                    "ref_code" => "070503",
                    "block_name" => "RANINAGAR-I",
                ),
                array(
                    "block_code" => "3022",
                    "ref_code" => "070504",
                    "block_name" => "RANINAGAR-II",
                ),
                array(
                    "block_code" => "3023",
                    "ref_code" => "070104",
                    "block_name" => "SAGARDIGHI",
                ),
                array(
                    "block_code" => "3024",
                    "ref_code" => "070105",
                    "block_name" => "SHAMSHERGANJ",
                ),
                array(
                    "block_code" => "3025",
                    "ref_code" => "070106",
                    "block_name" => "SUTI-I",
                ),
                array(
                    "block_code" => "3026",
                    "ref_code" => "070107",
                    "block_name" => "SUTI-II",
                ),
            );
    
            foreach ($wb_mrs_blocks as $block) {
                Block::create([
                    'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                    'district_id'   => District::where('lg_code', '319')->firstOrFail()->id,
                ]);
            }
        }
    }
