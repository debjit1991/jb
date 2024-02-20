<?php
//KALIMPONG
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbMPNMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_MPN_municipalities = array(
            array(
                "municipality_code" => "249947",
                "ref_code" => "230104",
                "municipality_name" => "KALIMPONG",
            ),
           
        );

        foreach ($wb_MPN_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '702')->firstOrFail()->id,
            ]);
        }
    }
}
