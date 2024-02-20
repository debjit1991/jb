<?php
// BANKURA MUNICIPALITY
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbBNRMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_BNR_municipalities = array(
            array(
                "municipality_code" => "250208",
                "ref_code" => "",
                "municipality_name" => "SONAMUKHI",
            ),
            array(
                "municipality_code" => "250209",
                "ref_code" => "",
                "municipality_name" => "BANKURA",
            ),
            array(
                "municipality_code" => "250210",
                "ref_code" => "",
                "municipality_name" => "BISHNUPUR",
            ),


        );

        foreach ($wb_BNR_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '305')->firstOrFail()->id,
            ]);
        }
    }
}

