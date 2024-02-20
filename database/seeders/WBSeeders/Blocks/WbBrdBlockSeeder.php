<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbBrdBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_brd_blocks = array(
            array(
                "block_code" => "2796",
                "ref_code" => "180101",
                "block_name" => "AUSGRAM-I",
            ),
            array(
                "block_code" => "2797",
                "ref_code" => "180102",
                "block_name" => "AUSGRAM-II",
            ),
            array(
                "block_code" => "2799",
                "ref_code" => "180103",
                "block_name" => "BHATAR",
            ),
            array(
                "block_code" => "2800",
                "ref_code" => "180104",
                "block_name" => "BURDWAN-I",
            ),
            array(
                "block_code" => "2801",
                "ref_code" => "180105",
                "block_name" => "BURDWAN-II",
            ),
            array(
                "block_code" => "2803",
                "ref_code" => "180116",
                "block_name" => "GALSI -I",
            ),
            array(
                "block_code" => "2804",
                "ref_code" => "180106",
                "block_name" => "GALSI-II",
            ),
            array(
                "block_code" => "2805",
                "ref_code" => "180107",
                "block_name" => "JAMAL PUR",
            ),
            array(
                "block_code" => "2808",
                "ref_code" => "180301",
                "block_name" => "KALNA-I",
            ),
            array(
                "block_code" => "2807",
                "ref_code" => "180302",
                "block_name" => "KALNA II",
            ),
            array(
                "block_code" => "2810",
                "ref_code" => "180201",
                "block_name" => "KATWA-I",
            ),
            array(
                "block_code" => "2811",
                "ref_code" => "180202",
                "block_name" => "KATWA-II",
            ),
            array(
                "block_code" => "2813",
                "ref_code" => "180203",
                "block_name" => "KETUGRAM_I",
            ),
            array(
                "block_code" => "2812",
                "ref_code" => "180204",
                "block_name" => "KETUGRAM-II",
            ),
            array(
                "block_code" => "2814",
                "ref_code" => "180108",
                "block_name" => "KHANDAGHOSH",
            ),
            array(
                "block_code" => "2815",
                "ref_code" => "180205",
                "block_name" => "MANGOLKOTE",
            ),
            array(
                "block_code" => "2816",
                "ref_code" => "180303",
                "block_name" => "MANTESWAR",
            ),
            array(
                "block_code" => "2817",
                "ref_code" => "180109",
                "block_name" => "MEMARI-1",
            ),
            array(
                "block_code" => "2818",
                "ref_code" => "180110",
                "block_name" => "MEMARI-II",
            ),
            array(
                "block_code" => "2821",
                "ref_code" => "180304",
                "block_name" => "PURBASTHALI-I",
            ),
            array(
                "block_code" => "2822",
                "ref_code" => "180305",
                "block_name" => "PURBASTHALI-II",
            ),
            array(
                "block_code" => "2823",
                "ref_code" => "180111",
                "block_name" => "RAINA-I",
            ),
            array(
                "block_code" => "2824",
                "ref_code" => "180112",
                "block_name" => "RAINA-II",
            ),
        );

        foreach ($wb_brd_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '306')->firstOrFail()->id,
            ]);
        }
    }
}

