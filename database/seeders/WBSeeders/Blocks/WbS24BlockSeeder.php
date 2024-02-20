<?php

namespace Database\Seeders\WBSeeders\Blocks;;

use App\Models\Block;
use App\Models\District;
use Illuminate\Database\Seeder;

class WbS24BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $wb_S24_blocks = array(
            array(
                "block_code" => "2745",
                "ref_code" => "100219",
                "block_name" => "BARUIPUR",
            ),
            array(
                "block_code" => "2746",
                "ref_code" => "100115",
                "block_name" => "BASANTI",
            ),
            array(
                "block_code" => "2747",
                "ref_code" => "100220",
                "block_name" => "BHANGAR-I",    //bhangore
            ),
            array(
                "block_code" => "2748",
                "ref_code" => "100221",
                "block_name" => "BHANGAR-II",
            ),
            array(
                "block_code" => "2749",
                "ref_code" => "100501",
                "block_name" => "BISHNUPUR-I",
            ),
            array(
                "block_code" => "2750",
                "ref_code" => "100502",
                "block_name" => "BISHNUPUR-II",
            ),
            array(
                "block_code" => "2751",
                "ref_code" => "100503",
                "block_name" => "BUDGE BUDGE-I",
            ),
            array(
                "block_code" => "2752",
                "ref_code" => "100504",
                "block_name" => "BUDGE BUDGE-II",
            ),
            array(
                "block_code" => "2753",
                "ref_code" => "100113",
                "block_name" => "CANNING-I",
            ),
            array(
                "block_code" => "2754",
                "ref_code" => "100114",
                "block_name" => "CANNING-II",
            ),
            array(
                "block_code" => "2755",
                "ref_code" => "100427",
                "block_name" => "DIAMOND HARBOUR-I",
            ),
            array(
                "block_code" => "2756",
                "ref_code" => "100428",
                "block_name" => "DIAMOND HARBOUR-II",
            ),
            array(
                "block_code" => "2757",
                "ref_code" => "100435",
                "block_name" => "FALTA",
            ),
            array(
                "block_code" => "2758",
                "ref_code" => "100116",
                "block_name" => "GOSABA",
            ),
            array(
                "block_code" => "2759",
                "ref_code" => "100217",
                "block_name" => "JAYNAGAR-I",
            ),
            array(
                "block_code" => "2760",
                "ref_code" => "100218",
                "block_name" => "JAYNAGAR-II",
            ),
            array(
                "block_code" => "2761",
                "ref_code" => "100309",
                "block_name" => "KAK DWIP",
            ),
            array(
                "block_code" => "2762",
                "ref_code" => "100434",
                "block_name" => "KULPI",
            ),
            array(
                "block_code" => "2763",
                "ref_code" => "100222",
                "block_name" => "KULTALI",
            ),
            array(
                "block_code" => "2764",
                "ref_code" => "100429",
                "block_name" => "MAGRA HAT-I",
            ),
            array(
                "block_code" => "2765",
                "ref_code" => "100430",
                "block_name" => "MAGRA HAT-II",
            ),
            array(
                "block_code" => "2766",
                "ref_code" => "100433",
                "block_name" => "MANDIRBAZAR",
            ),
            array(
                "block_code" => "2767",
                "ref_code" => "100431",
                "block_name" => "MATHURAPUR I",
            ),
            array(
                "block_code" => "2768",
                "ref_code" => "100432",
                "block_name" => "MATHURAPUR-II",
            ),
            array(
                "block_code" => "2769",
                "ref_code" => "100310",
                "block_name" => "NAMKHANA",
            ),
            array(
                "block_code" => "2770",
                "ref_code" => "100312",
                "block_name" => "PATHAR PRATIMA",
            ),
            array(
                "block_code" => "2771",
                "ref_code" => "100311",
                "block_name" => "SAGAR",
            ),
            array(
                "block_code" => "2772",
                "ref_code" => "100223",
                "block_name" => "SONARPUR",
            ),
            array(
                "block_code" => "2773",
                "ref_code" => "100505",
                "block_name" => "THAKURPUKUR MAHESTOLA",
            ),
        );

        foreach ($wb_S24_blocks as $block) {
            Block::create([
                'ref_code'      => $block['ref_code'],
                'lg_code'       => $block['block_code'],
                'name'          => $block['block_name'],
                'district_id'   => District::where('lg_code', '304')->firstOrFail()->id,
            ]);
        }
    }
}


