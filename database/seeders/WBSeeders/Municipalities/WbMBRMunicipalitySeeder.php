<?php
//PASCHIM BARDHAMAN
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbMBRMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_MBR_municipalities = array(
            array(
                "municipality_code" => "250032",
                "ref_code" => "200105",
                "municipality_name" => "Asansol",
            ),

			array(
                "municipality_code" => "250034",
                "ref_code" => "200206",
                "municipality_name" => "Durgapur",
            ),
            array(
                "municipality_code" => "250030",
                "ref_code" => "",
                "municipality_name" => "Jamuria",
            ),
            array(
                "municipality_code" => "250031",
                "ref_code" => "",
                "municipality_name" => "Kulti",
            ),
            array(
                "municipality_code" => "250033",
                "ref_code" => "",
                "municipality_name" => "Raniganj",
            ),

        );

        foreach ($wb_MBR_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '704')->firstOrFail()->id,
            ]);
        }
    }
}
