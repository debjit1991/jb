<?php
// BIRBHUM MUNICIPALITY
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbBIRMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_BIR_municipalities = array(
            array(
                "municipality_code" => "250026",
                "ref_code" => "190108",
                "municipality_name" => "Suri",
            ),
            array(
                "municipality_code" => "250025",
                "ref_code" => "190109",
                "municipality_name" => "Sainthia",
            ),
            array(
                "municipality_code" => "250027",
                "ref_code" => "190110",
                "municipality_name" => "Dubrajpur",
            ),
			array(
                "municipality_code" => "250028",
                "ref_code" => "190205",
                "municipality_name" => "Bolpur",
            ),
			array(
                "municipality_code" => "250024",
                "ref_code" => "190309",
                "municipality_name" => "Rampurhat",
            ),
			array(
                "municipality_code" => "253250",
                "ref_code" => "190310",
                "municipality_name" => "Nalhati",
            ),
			
        );

        foreach ($wb_BIR_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '307')->firstOrFail()->id,
            ]);
        }
    }
}
