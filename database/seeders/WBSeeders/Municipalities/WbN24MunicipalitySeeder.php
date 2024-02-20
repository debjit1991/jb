<?php
//24 PARAGANAS NORTH
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbN24MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_N24_municipalities = array(
            array(
                "municipality_code" => "250135",
                "ref_code" => "090109",
                "municipality_name" => "BARASAT",
            ),
            array(
                "municipality_code" => "250126",
                "ref_code" => "090110",
                "municipality_name" => "GOBARDANGA",
            ),
            array(
                "municipality_code" => "250127",
                "ref_code" => "090111",
                "municipality_name" => "HABRA",
            ),
			array(
                "municipality_code" => "250136",
                "ref_code" => "090112",
                "municipality_name" => "MADHYAMGRAM",
            ),
			array(
                "municipality_code" => "250146",
                "ref_code" => "090113",
                "municipality_name" => "RAJARHAT GOPALPUR",
            ),
			array(
                "municipality_code" => "250145",
                "ref_code" => "090114",
                "municipality_name" => "BIDHANNAGAR",
            ),
			array(
                "municipality_code" => "250121",
                "ref_code" => "090204",
                "municipality_name" => "BONGAON",
            ),
			array(
                "municipality_code" => "250141",
                "ref_code" => "090303",
                "municipality_name" => "BARANAGAR",
            ),
			array(
                "municipality_code" => "250132",
                "ref_code" => "090304",
                "municipality_name" => "BARRACKPUR",
            ),
			array(
                "municipality_code" => "250125",
                "ref_code" => "090305",
                "municipality_name" => "BHATPARA",
            ),
			array(
                "municipality_code" => "250143",
                "ref_code" => "090306",
                "municipality_name" => "DUMDUM",
            ),
			array(
                "municipality_code" => "250129",
                "ref_code" => "090307",
                "municipality_name" => "GARULIA",
            ),
			array(
                "municipality_code" => "250123",
                "ref_code" => "090308",
                "municipality_name" => "HALISAHAR",
            ),
			array(
                "municipality_code" => "250140",
                "ref_code" => "090309",
                "municipality_name" => "KAMARHATI",
            ),
			array(
                "municipality_code" => "250122",
                "ref_code" => "090310",
                "municipality_name" => "KANCHRAPARA",
            ),
			array(
                "municipality_code" => "250137",
                "ref_code" => "090311",
                "municipality_name" => "KHARDAHA",
            ),
			array(
                "municipality_code" => "250124",
                "ref_code" => "090312",
                "municipality_name" => "NAIHATI",
            ),
			array(
                "municipality_code" => "250139",
                "ref_code" => "090313",
                "municipality_name" => "NEW BARRACKPORE",
            ),
			array(
                "municipality_code" => "250131",
                "ref_code" => "090314",
                "municipality_name" => "NORTH BARRACKPUR",
            ),
			array(
                "municipality_code" => "250142",
                "ref_code" => "090315",
                "municipality_name" => "NORTH DUMDUM",
            ),
			array(
                "municipality_code" => "250138",
                "ref_code" => "090316",
                "municipality_name" => "PANIHATI",
            ),
			array(
                "municipality_code" => "250144",
                "ref_code" => "090317",
                "municipality_name" => "SOUTH DUMDUM",
            ),
			array(
                "municipality_code" => "250133",
                "ref_code" => "090318",
                "municipality_name" => "TITAGARH",
            ),
			array(
                "municipality_code" => "250134",
                "ref_code" => "090411",
                "municipality_name" => "BADURIA",
            ),
			array(
                "municipality_code" => "250147",
                "ref_code" => "090412",
                "municipality_name" => "BASIRHAT",
            ),
			array(
                "municipality_code" => "250148",
                "ref_code" => "090413",
                "municipality_name" => "TAKI",
            ),
            array(
                "municipality_code" => "250128",
                "ref_code" => "",
                "municipality_name" => "ASHOKNAGAR KALYANGARH",
            ),
            array(
                "municipality_code" => "253251",
                "ref_code" => "",
                "municipality_name" => "NKDA",
            ),
            array(
                "municipality_code" => "277279",
                "ref_code" => "",
                "municipality_name" => "BARRACKPORE CANTONMENT BOARD",
            ),
        );

        foreach ($wb_N24_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '303')->firstOrFail()->id,
            ]);
        }
    }
}
