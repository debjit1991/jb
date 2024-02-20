<?php
//NADIA
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbNADMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_NAD_municipalities = array(
            array(
                "municipality_code" => "250097",
                "ref_code" => "080107",
                "municipality_name" => "NABADWIP",
            ),
            array(
                "municipality_code" => "250096",
                "ref_code" => "080108",
                "municipality_name" => "KRISHNAGAR",
            ),
            array(
                "municipality_code" => "250098",
                "ref_code" => "080205",
                "municipality_name" => "TAHERPUR",
            ),
			array(
                "municipality_code" => "250100",
                "ref_code" => "080208",
                "municipality_name" => "BIRNAGAR",
            ),
			array(
                "municipality_code" => "250099",
                "ref_code" => "080209",
                "municipality_name" => "SANTIPUR",
            ),
			array(
                "municipality_code" => "250101",
                "ref_code" => "080210",
                "municipality_name" => "RANAGHAT",
            ),
			array(
                "municipality_code" => "250105",
                "ref_code" => "080303",
                "municipality_name" => "GAYESHPUR",
            ),
			array(
                "municipality_code" => "250104",
                "ref_code" => "080304",
                "municipality_name" => "KALYANI",
            ),
			array(
                "municipality_code" => "250103",
                "ref_code" => "080305",
                "municipality_name" => "CHAKDAHA",
            ),
			array(
                "municipality_code" => "273006",
                "ref_code" => "080307",
                "municipality_name" => "HARINGHATA",
            ),
            array(
                "municipality_code" => "250102",
                "ref_code" => "",
                "municipality_name" => "COOPER S CAMP",
            ),
        );

        foreach ($wb_NAD_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '320')->firstOrFail()->id,
            ]);
        }
    }
}
