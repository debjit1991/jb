<?php

namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbPrmedMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_prmed_municipalities = array(
            array(
                "municipality_code" => "250236",
                "ref_code" => "140309",
                "municipality_name" => "Contai",
            ),
            array(
                "municipality_code" => "250235",
                "ref_code" => "140406",
                "municipality_name" => "Egra",
            ),
            array(
                "municipality_code" => "250234",
                "ref_code" => "140206",
                "municipality_name" => "Haldia",
            ),
            array(
                "municipality_code" => "253229",
                "ref_code" => "140109",
                "municipality_name" => "Panskura",
            ),
			array(
                "municipality_code" => "250233",
                "ref_code" => "140108",
                "municipality_name" => "Tamluk",
            ),
        );

        foreach ($wb_prmed_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '317')->firstOrFail()->id,
            ]);
        }
    }
}
