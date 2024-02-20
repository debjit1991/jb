<?php
//PURULIA
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbPRLMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_PRL_municipalities = array(
            array(
                "municipality_code" => "250215",
                "ref_code" => "160106",
                "municipality_name" => "PURULIA",
            ),
            array(
                "municipality_code" => "250214",
                "ref_code" => "160204",
                "municipality_name" => "JHALDA",
            ),
            array(
                "municipality_code" => "250213",
                "ref_code" => "160307",
                "municipality_name" => "RAGHUNATHPUR",
            ),
			
        );

        foreach ($wb_PRL_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '321')->firstOrFail()->id,
            ]);
        }
    }
}
