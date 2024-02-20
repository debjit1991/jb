<?php
// SOUTH 24 PARGANAS
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbS24MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_S24_municipalities = array(
            array(
                "municipality_code" => "250303",
                "ref_code" => "100224",
                "municipality_name" => "Rajpur Sonarpur",
            ),
            array(
                "municipality_code" => "250304",
                "ref_code" => "100225",
                "municipality_name" => "Baruipur",
            ),
            array(
                "municipality_code" => "250306",
                "ref_code" => "100226",
                "municipality_name" => "Joynagar Majilpur",
            ),
			array(
                "municipality_code" => "250305",
                "ref_code" => "100436",
                "municipality_name" => "D/Harbour",
            ),
			array(
                "municipality_code" => "250300",
                "ref_code" => "100506",
                "municipality_name" => "Maheshtala",
            ),
			array(
                "municipality_code" => "250301",
                "ref_code" => "100507",
                "municipality_name" => "Budge Budge",
            ),
			array(
                "municipality_code" => "250302",
                "ref_code" => "100508",
                "municipality_name" => "Pujali",
            ),
            array(
                "municipality_code" => "999993",
                "ref_code" => "100637",
                "municipality_name" => "KMC-S24P",
            ),
        );

        foreach ($wb_S24_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '304')->firstOrFail()->id,
            ]);
        }
    }
}
