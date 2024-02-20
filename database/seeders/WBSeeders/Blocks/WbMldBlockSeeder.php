<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbMldBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_mld_blocks = array(
            array(
                "block_code" => "2932",
                "ref_code" => "060102",
                "block_name" => "BAMONGOLA",
            ),
            array(
                "block_code" => "2933",
                "ref_code" => "060212",
                "block_name" => "CHANCHAL-I",
            ),
            array(
                "block_code" => "2934",
                "ref_code" => "060213",
                "block_name" => "CHANCHAL-II",
            ),
            array(
                "block_code" => "2935",
                "ref_code" => "060105",
                "block_name" => "ENGLISH BAZAR",
            ),
            array(
                "block_code" => "2936",
                "ref_code" => "060101",
                "block_name" => "GAZOLE",
            ),
            array(
                "block_code" => "2937",
                "ref_code" => "060103",
                "block_name" => "HABIBPUR",
            ),
            array(
                "block_code" => "2938",
                "ref_code" => "060210",
                "block_name" => "HARISHCHANDRAPUR-I",
            ),
            array(
                "block_code" => "2939",
                "ref_code" => "060211",
                "block_name" => "HARISHCHANDRAPUR-II",
            ),
            array(
                "block_code" => "2940",
                "ref_code" => "060107",
                "block_name" => "KALIACHAK-I",
            ),
            array(
                "block_code" => "2941",
                "ref_code" => "060108",
                "block_name" => "KALIACHAK-II",
            ),
            array(
                "block_code" => "2942",
                "ref_code" => "060109",
                "block_name" => "KALIACHAK-III",
            ),
            array(
                "block_code" => "2943",
                "ref_code" => "060106",
                "block_name" => "MANIKCHAK",
            ),
            array(
                "block_code" => "2944",
                "ref_code" => "060104",
                "block_name" => "OLD MALDA",
            ),
            array(
                "block_code" => "2945",
                "ref_code" => "060214",
                "block_name" => "RATUA-I",
            ),
            array(
                "block_code" => "2946",
                "ref_code" => "060215",
                "block_name" => "RATUA-II",
            ),
        );

        foreach ($wb_mld_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '316')->firstOrFail()->id,
            ]);
        }
    }
}

