<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbN24BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_n24_blocks = array(
            array(
                "block_code" => "2723",
                "ref_code" => "090101",
                "block_name" => "AMDANGA",
            ),
            array(
                "block_code" => "2724",
                "ref_code" => "090401",
                "block_name" => "BADURIA",
            ),
            array(
                "block_code" => "2725",
                "ref_code" => "090201",
                "block_name" => "BAGDA",
            ),
            array(
                "block_code" => "2726",
                "ref_code" => "090102",
                "block_name" => "BARASAT-I",
            ),
            array(
                "block_code" => "2727",
                "ref_code" => "090103",
                "block_name" => "BARASAT-II",
            ),
            array(
                "block_code" => "2728",
                "ref_code" => "090301",
                "block_name" => "BARRACKPUR-I",
            ),
            array(
                "block_code" => "2729",
                "ref_code" => "090302",
                "block_name" => "BARRACKPUR-II",
            ),
            array(
                "block_code" => "2730",
                "ref_code" => "090402",
                "block_name" => "BASIRHAT-I",
            ),
            array(
                "block_code" => "2731",
                "ref_code" => "090403",
                "block_name" => "BASIRHAT-II",
            ),
            array(
                "block_code" => "2732",
                "ref_code" => "090202",
                "block_name" => "BONGAON",
            ),
            array(
                "block_code" => "2733",
                "ref_code" => "090104",
                "block_name" => "DEGANGA",
            ),
            array(
                "block_code" => "2734",
                "ref_code" => "090203",
                "block_name" => "GAIGHATA",
            ),
            array(
                "block_code" => "2735",
                "ref_code" => "090105",
                "block_name" => "HABRA-I",
            ),
            array(
                "block_code" => "2736",
                "ref_code" => "090106",
                "block_name" => "HABRA-II",
            ),
            array(
                "block_code" => "2737",
                "ref_code" => "090404",
                "block_name" => "HAROA",
            ),
            array(
                "block_code" => "2738",
                "ref_code" => "090405",
                "block_name" => "HASNABAD",
            ),
            array(
                "block_code" => "2739",
                "ref_code" => "090406",
                "block_name" => "HINGALGANJ",
            ),
            array(
                "block_code" => "2740",
                "ref_code" => "090407",
                "block_name" => "MINAKHAN",
            ),
            array(
                "block_code" => "2741",
                "ref_code" => "090107",
                "block_name" => "RAJARHAT",
            ),
            array(
                "block_code" => "2742",
                "ref_code" => "090408",
                "block_name" => "SANDESHKHALI-I",
            ),
            array(
                "block_code" => "2743",
                "ref_code" => "090409",
                "block_name" => "SANDESHKHALI-II",
            ),
            array(
                "block_code" => "2744",
                "ref_code" => "090410",
                "block_name" => "SWARUPNAGAR",
            ),
        );

        foreach ($wb_n24_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '303')->firstOrFail()->id,
            ]);
        }
    }
}

