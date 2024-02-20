<?php

namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbDarjMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_darj_municipalities = array(
            array(
                "municipality_code" => "249946",
                "ref_code" => "030204",
                "municipality_name" => "DARJEELING",
            ),
            array(
                "municipality_code" => "249949",
                "ref_code" => "030303",
                "municipality_name" => "KURSEONG",
            ),
            array(
                "municipality_code" => "249957",
                "ref_code" => "030405",
                "municipality_name" => "SILIGURI",
            ),
            array(
                "municipality_code" => "249948",
                "ref_code" => "030102",
                "municipality_name" => "MIRIK",
            ),
            array(
                "municipality_code" => "277280",
                "ref_code" => "",
                "municipality_name" => "JALAPAHAR",
            ),
            array(
                "municipality_code" => "277281",
                "ref_code" => "",
                "municipality_name" => "LABONG",
            ),
        );

        foreach ($wb_darj_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '309')->firstOrFail()->id,
            ]);
        }
    }
}
