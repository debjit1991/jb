<?php
//HOOGHLY
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbHOOMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_HOO_municipalities = array(
            array(
                "municipality_code" => "250171",
                "ref_code" => "130106",
                "municipality_name" => "Hooghly-Chinsurah",
            ),
            array(
                "municipality_code" => "250170",
                "ref_code" => "130107",
                "municipality_name" => "Bansberia",
            ),
            array(
                "municipality_code" => "250172",
                "ref_code" => "130204",
                "municipality_name" => "Chandannagore",
            ),
			array(
                "municipality_code" => "250173",
                "ref_code" => "130205",
                "municipality_name" => "Bhadreswar",
            ),
			array(
                "municipality_code" => "250174",
                "ref_code" => "130206",
                "municipality_name" => "Champdani",
            ),
			array(
                "municipality_code" => "250169",
                "ref_code" => "130207",
                "municipality_name" => "Tarakeswar",
            ),
			array(
                "municipality_code" => "250176",
                "ref_code" => "130305",
                "municipality_name" => "Serampore",
            ),
			array(
                "municipality_code" => "250177",
                "ref_code" => "130306",
                "municipality_name" => "Rishra",
            ),
			array(
                "municipality_code" => "250179",
                "ref_code" => "130307",
                "municipality_name" => "Uttarpara-Kotrung",
            ),
			array(
                "municipality_code" => "250175",
                "ref_code" => "130308",
                "municipality_name" => "Baidyabati",
            ),
			array(
                "municipality_code" => "250178",
                "ref_code" => "130309",
                "municipality_name" => "Konnagar",
            ),
			array(
                "municipality_code" => "298972",
                "ref_code" => "130310",
                "municipality_name" => "Dankuni",
            ),
			array(
                "municipality_code" => "250168",
                "ref_code" => "130407",
                "municipality_name" => "Arambagh",
            ),

        );

        foreach ($wb_HOO_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '312')->firstOrFail()->id,
            ]);
        }
    }
}
