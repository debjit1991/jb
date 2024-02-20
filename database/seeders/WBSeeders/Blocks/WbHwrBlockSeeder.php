<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbHwrBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_hwr_blocks = array(
            array(
                "block_code" => "2905",
                "ref_code" => "120201",
                "block_name" => "AMTA-I",
            ),
            array(
                "block_code" => "2906",
                "ref_code" => "120202",
                "block_name" => "AMTA-II",
            ),
            array(
                "block_code" => "2907",
                "ref_code" => "120203",
                "block_name" => "BAGNAN-I",
            ),
            array(
                "block_code" => "2908",
                "ref_code" => "120204",
                "block_name" => "BAGNAN-II",
            ),
            array(
                "block_code" => "2909",
                "ref_code" => "120101",
                "block_name" => "BALLY-JAGACHA",
            ),
            array(
                "block_code" => "2910",
                "ref_code" => "120102",
                "block_name" => "DOMJUR",
            ),
            array(
                "block_code" => "2911",
                "ref_code" => "120103",
                "block_name" => "JAGATBALLAVPUR",
            ),
            array(
                "block_code" => "2912",
                "ref_code" => "120104",
                "block_name" => "PANCHLA",
            ),
            array(
                "block_code" => "2913",
                "ref_code" => "120105",
                "block_name" => "SANKRAIL",
            ),
            array(
                "block_code" => "2914",
                "ref_code" => "120205",
                "block_name" => "SHYAMPUR-I",
            ),
            array(
                "block_code" => "2915",
                "ref_code" => "120206",
                "block_name" => "SHYAMPUR-II",
            ),
            array(
                "block_code" => "2916",
                "ref_code" => "120207",
                "block_name" => "UDAYNARAYANPUR",
            ),
            array(
                "block_code" => "2917",
                "ref_code" => "120208",
                "block_name" => "ULUBERIA-I",
            ),
            array(
                "block_code" => "2918",
                "ref_code" => "120209",
                "block_name" => "ULUBERIA-II",
            ),
        );

        foreach ($wb_hwr_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '313')->firstOrFail()->id,
            ]);
        }
    }
}
