<?php

namespace Database\Seeders\WBSeeders\Blocks;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbHooBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_hoo_blocks = array(
            array(
                "block_code" => "2887",
                "ref_code" => "130401",
                "block_name" => "ARAMBAGH",
            ),
            array(
                "block_code" => "2888",
                "ref_code" => "130103",
                "block_name" => "BALAGARH",
            ),
            array(
                "block_code" => "2889",
                "ref_code" => "130303",
                "block_name" => "CHANDITALA-I",
            ),
            array(
                "block_code" => "2890",
                "ref_code" => "130304",
                "block_name" => "CHANDITALA-II",
            ),
            array(
                "block_code" => "2891",
                "ref_code" => "130101",
                "block_name" => "CHINSURAH-MAGRAH", //Chinsurah-Mogra?
            ),
            array(
                "block_code" => "2892",
                "ref_code" => "130105",
                "block_name" => "DHANIAKHALI",
            ),
            array(
                "block_code" => "2893",
                "ref_code" => "130403",
                "block_name" => "GOGHAT-I",
            ),
            array(
                "block_code" => "2894",
                "ref_code" => "130404",
                "block_name" => "GOGHAT-II",
            ),
            array(
                "block_code" => "2895",
                "ref_code" => "130202",
                "block_name" => "HARIPAL",
            ),
            array(
                "block_code" => "2896",
                "ref_code" => "130302",
                "block_name" => "JANGIPARA",
            ),
            array(
                "block_code" => "2897",
                "ref_code" => "130405",
                "block_name" => "KHANAKUL-I",
            ),
            array(
                "block_code" => "2898",
                "ref_code" => "130406",
                "block_name" => "KHANAKUL-II",
            ),
            array(
                "block_code" => "2899",
                "ref_code" => "130104",
                "block_name" => "PANDUA",
            ),
            array(
                "block_code" => "2900",
                "ref_code" => "130102",
                "block_name" => "POLBA-DADPUR",
            ),
            array(
                "block_code" => "2901",
                "ref_code" => "130402",
                "block_name" => "PURSURAH",
            ),
            array(
                "block_code" => "2902",
                "ref_code" => "130201",
                "block_name" => "SINGUR",
            ),
            array(
                "block_code" => "2903",
                "ref_code" => "130301",
                "block_name" => "SIRAMPUR-UTTARPARA",   //serampore-uttarpra
            ),
            array(
                "block_code" => "2904",
                "ref_code" => "130203",
                "block_name" => "TARAKESWAR",
            ),
        );

        foreach ($wb_hoo_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '312')->firstOrFail()->id,
            ]);
        }
    }
}
