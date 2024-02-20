<?php
// ALIPURDUAR MUNICIPALITY
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbAPDMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_APD_municipalities = array(
            array(
                "municipality_code" => "249958",
                "ref_code" => "210107",
                "municipality_name" => "ALIPURDUAR",
            ),
            array(
                "municipality_code" => "253252",
                "ref_code" => "",
                "municipality_name" => "FALAKATA",
            ),
        );

        foreach ($wb_APD_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '664')->firstOrFail()->id,
            ]);
        }
    }
}
