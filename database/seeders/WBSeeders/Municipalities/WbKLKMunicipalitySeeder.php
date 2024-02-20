<?php
//KOLKATA

namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbKLKMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_KLK_municipalities = array(
            array(
                "municipality_code" => "250299",
                "ref_code" => "119901",
                "municipality_name" => "Kolkata Municipal Corporation",
            ),
           
        );

        foreach ($wb_KLK_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '315')->firstOrFail()->id,
            ]);
        }
    }
}
