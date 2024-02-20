<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbDpdBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_dpd_blocks = array(
            array(
                "block_code" => "2870",
                "ref_code" => "050101",
                "block_name" => "BALURGHAT",
            ),
            array(
                "block_code" => "2871",
                "ref_code" => "050201",
                "block_name" => "BANSIHARI",
            ),
            array(
                "block_code" => "2872",
                "ref_code" => "050202",
                "block_name" => "GANGARAMPUR",
            ),
            array(
                "block_code" => "2873",
                "ref_code" => "050203",
                "block_name" => "HARIRAMPUR",
            ),
            array(
                "block_code" => "2874",
                "ref_code" => "050102",
                "block_name" => "HILI",
            ),
            array(
                "block_code" => "2875",
                "ref_code" => "050103",
                "block_name" => "KUMARGANJ",
            ),
            array(
                "block_code" => "2876",
                "ref_code" => "050204",
                "block_name" => "KUSHMANDI",
            ),
            array(
                "block_code" => "2877",
                "ref_code" => "050104",
                "block_name" => "TAPAN",
            ),
        );

        foreach ($wb_dpd_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '310')->firstOrFail()->id,
            ]);
        }
    }
}
