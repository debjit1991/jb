<?php
//PURBA BARDHAMAN
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbBRDMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_BRD_municipalities = array(
            array(
                "municipality_code" => "250038",
                "ref_code" => "180113",
                "municipality_name" => "Burdwan",
            ),
            array(
                "municipality_code" => "250037",
                "ref_code" => "180114",
                "municipality_name" => "Guskara",
            ),
            array(
                "municipality_code" => "250039",
                "ref_code" => "180115",
                "municipality_name" => "Memari",
            ),
			array(
                "municipality_code" => "250036",
                "ref_code" => "180206",
                "municipality_name" => "Daihat",
            ),
			array(
                "municipality_code" => "250035",
                "ref_code" => "180207",
                "municipality_name" => "Katwa",
            ),
			array(
                "municipality_code" => "250040",
                "ref_code" => "180306",
                "municipality_name" => "Kalna",
            ),
			
        );

        foreach ($wb_BRD_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '306')->firstOrFail()->id,
            ]);
        }
    }
}
