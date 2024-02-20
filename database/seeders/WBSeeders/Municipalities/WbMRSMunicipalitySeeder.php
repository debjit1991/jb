<?php
//MURSHIDABAD
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbMRSMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_MRS_municipalities = array(
            array(
                "municipality_code" => "249996",
                "ref_code" => "070108",
                "municipality_name" => "JANGIPUR",
            ),
            array(
                "municipality_code" => "249995",
                "ref_code" => "070109",
                "municipality_name" => "DHULIAN",
            ),
            array(
                "municipality_code" => "249999",
                "ref_code" => "070206",
                "municipality_name" => "BAHARAMPUR",
            ),
			array(
                "municipality_code" => "250001",
                "ref_code" => "070207",
                "municipality_name" => "BELDANGA",
            ),
			array(
                "municipality_code" => "250000",
                "ref_code" => "070306",
                "municipality_name" => "KANDI",
            ),
			array(
                "municipality_code" => "249998",
                "ref_code" => "070406",
                "municipality_name" => "MURSHIDABAD",
            ),
			array(
                "municipality_code" => "249997",
                "ref_code" => "070407",
                "municipality_name" => "JIAGANJ AZIMGANJ",
            ),
            array(
                "municipality_code" => "273007",
                "ref_code" => "",
                "municipality_name" => "DOMKAL",
            ),
        );

        foreach ($wb_MRS_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '319')->firstOrFail()->id,
            ]);
        }
    }
}
