<?php
//MALDAH

namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbMLDMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_MLD_municipalities = array(
            array(
                "municipality_code" => "249991",
                "ref_code" => "060116",
                "municipality_name" => "Englishbazar",
            ),
            array(
                "municipality_code" => "249990",
                "ref_code" => "",
                "municipality_name" => "OLD MALDAH",
            ),

        );

        foreach ($wb_MLD_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '316')->firstOrFail()->id,
            ]);
        }
    }
}
