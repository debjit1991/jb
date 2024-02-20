<?php
//JHARGRAM
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbGRMMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_GRM_municipalities = array(
            array(
                "municipality_code" => "250231",
                "ref_code" => "220132",
                "municipality_name" => "JHARGRAM",
            ),
           
        );

        foreach ($wb_GRM_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '703')->firstOrFail()->id,
            ]);
        }
    }
}
