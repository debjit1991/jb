<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbNadBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_nad_blocks = array(
            array(
                "block_code" => "3027",
                "ref_code" => "080301",
                "block_name" => "CHAKDAH",
            ),
            array(
                "block_code" => "3028",
                "ref_code" => "080103",
                "block_name" => "CHAPRA",
            ),
            array(
                "block_code" => "3029",
                "ref_code" => "080204",
                "block_name" => "HANSKHALI",
            ),
            array(
                "block_code" => "3030",
                "ref_code" => "080302",
                "block_name" => "HARINGHATA",
            ),
            array(
                "block_code" => "3031",
                "ref_code" => "080102",
                "block_name" => "KALIGANJ",
            ),
            array(
                "block_code" => "7115",
                "ref_code" => "080306",
                "block_name" => "KALYANI",
            ),
            array(
                "block_code" => "3032",
                "ref_code" => "080409",
                "block_name" => "KARIMPUR-1",
            ),
            array(
                "block_code" => "3033",
                "ref_code" => "080408",
                "block_name" => "KARIMPUR-II",
            ),
            array(
                "block_code" => "3034",
                "ref_code" => "080202",
                "block_name" => "KRISHNAGANJ",
            ),
            array(
                "block_code" => "3035",
                "ref_code" => "080104",
                "block_name" => "KRISHNAGAR-I",
            ),
            array(
                "block_code" => "3036",
                "ref_code" => "080105",
                "block_name" => "KRISHNAGAR-II",
            ),
            array(
                "block_code" => "3037",
                "ref_code" => "080106",
                "block_name" => "NABADWIP",
            ),
            array(
                "block_code" => "3038",
                "ref_code" => "080101",
                "block_name" => "NAKASHIPARA",
            ),
            array(
                "block_code" => "3039",
                "ref_code" => "080203",
                "block_name" => "RANAGHAT-I",
            ),
            array(
                "block_code" => "3040",
                "ref_code" => "080201",
                "block_name" => "RANAGHAT-II",
            ),
            array(
                "block_code" => "3041",
                "ref_code" => "080206",
                "block_name" => "SANTIPUR",
            ),
            array(
                "block_code" => "3042",
                "ref_code" => "080407",
                "block_name" => "TEHATTA-I",
            ),
            array(
                "block_code" => "3043",
                "ref_code" => "080406",
                "block_name" => "TEHATTA-II",
            ),
        );

        foreach ($wb_nad_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '320')->firstOrFail()->id,
            ]);
        }
    }
}
