<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbGrmBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_grm_blocks = array(
            array(
                "block_code" => "2972",
                "ref_code" => "220123",
                "block_name" => "BINPUR-I",
            ),
            array(
                "block_code" => "2973",
                "ref_code" => "220124",
                "block_name" => "BINPUR-II",
            ),
            array(
                "block_code" => "2986",
                "ref_code" => "220125",
                "block_name" => "GOPIBALLAVPUR-I",
            ),
            array(
                "block_code" => "2985",
                "ref_code" => "220126",
                "block_name" => "GOPIBALLAV PUR -II",
            ),
            array(
                "block_code" => "2987",
                "ref_code" => "220129",
                "block_name" => "JAMBANI",  //jamboni
            ),
            array(
                "block_code" => "2988",
                "ref_code" => "220122",
                "block_name" => "JHARGRAM",
            ),
            array(
                "block_code" => "2996",
                "ref_code" => "220127",
                "block_name" => "NAYAGRAM",
            ),
            array(
                "block_code" => "3000",
                "ref_code" => "220128",
                "block_name" => "SANKRAIL",
            ),
        );

        foreach ($wb_grm_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '703')->firstOrFail()->id,
            ]);
        }
    }
}
