<?php
//MEDINIPUR WEST

namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbMPWMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_MPW_municipalities = array(
            array(
                "municipality_code" => "250230",
                "ref_code" => "150130",
                "municipality_name" => "MIDNAPORE",
            ),
            array(
                "municipality_code" => "250232",
                "ref_code" => "150231",
                "municipality_name" => "KHARAGPUR",
            ),
            array(
                "municipality_code" => "250226",
                "ref_code" => "150333",
                "municipality_name" => "CHANDRAKONA",
            ),
			array(
                "municipality_code" => "250227",
                "ref_code" => "150334",
                "municipality_name" => "KHIRPAI",
            ),
			array(
                "municipality_code" => "250225",
                "ref_code" => "150335",
                "municipality_name" => "RAMJIBANPUR",
            ),
			array(
                "municipality_code" => "250228",
                "ref_code" => "150336",
                "municipality_name" => "KHARAR",
            ),
			array(
                "municipality_code" => "250229",
                "ref_code" => "150337",
                "municipality_name" => "GHATAL",
            ),
        );

        foreach ($wb_MPW_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '318')->firstOrFail()->id,
            ]);
        }
    }
}
