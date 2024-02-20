<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbMpnBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_mpn_blocks = array(
            array(
                "block_code" => "2859",
                "ref_code" => "230103",
                "block_name" => "GORUBATHAN",
            ),
            array(
                "block_code" => "2861",
                "ref_code" => "230101",
                "block_name" => "KALIMPONG-I",
            ),
            array(
                "block_code" => "2862",
                "ref_code" => "230102",
                "block_name" => "KALIMPONG-II",
            ),
            array(
                "block_code" => "7354",
                "ref_code" => "",
                "block_name" => "Lava",
            ),
            array(
                "block_code" => "7355",
                "ref_code" => "",
                "block_name" => "Pedong",
            ),
        );

        foreach ($wb_mpn_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '702')->firstOrFail()->id,
            ]);
        }
    }
}
