<?php
//HOWRAH
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbHWRMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_HWR_municipalities = array(
            array(
                "municipality_code" => "250246",
                "ref_code" => "120106",
                "municipality_name" => "ERSTWHILE BALLY",
            ),
            array(
                "municipality_code" => "250248",
                "ref_code" => "120210",
                "municipality_name" => "ULUBERIA",
            ),
			array(
                "municipality_code" => "250247",
                "ref_code" => "120107",
                "municipality_name" => "HMC",
            ),
          
        );

        foreach ($wb_HWR_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '313')->firstOrFail()->id,
            ]);
        }
    }
}
