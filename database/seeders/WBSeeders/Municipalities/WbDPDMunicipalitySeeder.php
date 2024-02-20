<?php
//DINAJPUR DAKSHIN
namespace Database\Seeders\WBSeeders\Municipalities;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class WbDPDMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wb_DPD_municipalities = array(
            array(
                "municipality_code" => "249989",
                "ref_code" => "050105",
                "municipality_name" => "BALURGHAT",
            ),
            array(
                "municipality_code" => "249988",
                "ref_code" => "050205",
                "municipality_name" => "GANGARAMPUR",
            ),
			array(
                "municipality_code" => "289244",
                "ref_code" => "050206",
                "municipality_name" => "BUNIADPUR",
            ),

        );

        foreach ($wb_DPD_municipalities as $municipality) {
            Municipality::create([
                'ref_code'      => $municipality['ref_code'],
                'lg_code'       => $municipality['municipality_code'],
                'name'          => $municipality['municipality_name'],
                'district_id'   => District::where('lg_code', '310')->firstOrFail()->id,
            ]);
        }
    }
}
