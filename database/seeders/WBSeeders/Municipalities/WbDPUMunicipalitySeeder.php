<?php
//DINAJPUR UTTAR
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbDPUMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_DPU_municipalities = array(
            array(
                "municipality_code" => "249983",
                "ref_code" => "040106",
                "municipality_name" => "RAIGANJ",
            ),
            array(
                "municipality_code" => "249984",
                "ref_code" => "040107",
                "municipality_name" => "KALIAGANJ",
            ),
            array(
                "municipality_code" => "249982",
                "ref_code" => "040206",
                "municipality_name" => "ISLAMPUR",
            ),
			array(
                "municipality_code" => "249985",
                "ref_code" => "040207",
                "municipality_name" => "DALKHOLA",
            ),
			
        );

        foreach ($wb_DPU_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '311')->firstOrFail()->id,
            ]);
        }
    }
}
