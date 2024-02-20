<?php
//COOCHBEHAR
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbCBHMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_CBH_municipalities = array(
            array(
                "municipality_code" => "249975",
                "ref_code" => "010103",
                "municipality_name" => "COOCH BEHAR",
            ),
            array(
                "municipality_code" => "249977",
                "ref_code" => "010204",
                "municipality_name" => "DINHATA",
            ),
            array(
                "municipality_code" => "249974",
                "ref_code" => "010304",
                "municipality_name" => "MATHABHANGA",
            ),
			array(
                "municipality_code" => "249973",
                "ref_code" => "010403",
                "municipality_name" => "MEKHLIGANJ",
            ),
			array(
                "municipality_code" => "249972",
                "ref_code" => "010404",
                "municipality_name" => "HALDIBARI",
            ),
			array(
                "municipality_code" => "249976",
                "ref_code" => "010503",
                "municipality_name" => "TUFANGANJ",
            ),
			
        );

        foreach ($wb_CBH_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '308')->firstOrFail()->id,
            ]);
        }
    }
}
