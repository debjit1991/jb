<?php
//JALPAIGURI
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbJLPMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_JLP_municipalities = array(
            array(
                "municipality_code" => "249956",
                "ref_code" => "020108",
                "municipality_name" => "JALPAIGURI",
            ),
            array(
                "municipality_code" => "249970",
                "ref_code" => "020109",
                "municipality_name" => "DHUPGURI",
            ),
            array(
                "municipality_code" => "249955",
                "ref_code" => "020310",
                "municipality_name" => "MAL",
            ),
            array(
                "municipality_code" => "999991",
                "ref_code" => "",
                "municipality_name" => "SILIGURI(PART)JPG",
            ),
            array(
                "municipality_code" => "999994",
                "ref_code" => "",
                "municipality_name" => "MAINAGURI",
            ),

        );

        foreach ($wb_JLP_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '314')->firstOrFail()->id,
            ]);
        }
    }
}
