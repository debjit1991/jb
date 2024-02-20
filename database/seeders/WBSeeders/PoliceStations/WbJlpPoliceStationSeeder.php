<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbJlpPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array(
            "policestationcd" => "020101",
            "policestation" => "KOTWALI",
            "subdivisioncd" => "0201",
            "usercode" => 1,
            "posted_date" => "",
        ),
        array(
            "policestationcd" => "020102",
            "policestation" => "RAJGANJ",
            "subdivisioncd" => "0201",
            "usercode" => 1,
            "posted_date" => "",
        ),
        array(
            "policestationcd" => "020103",
            "policestation" => "BHAKTINAGAR",
            "subdivisioncd" => "0201",
            "usercode" => 1,
            "posted_date" => "",
        ),
        array(
            "policestationcd" => "020104",
            "policestation" => "MAYNAGURI",
            "subdivisioncd" => "0201",
            "usercode" => 1,
            "posted_date" => "",
        ),
        array(
            "policestationcd" => "020105",
            "policestation" => "DHUPGURI",
            "subdivisioncd" => "0201",
            "usercode" => 1,
            "posted_date" => "",
        ),
        array(
            "policestationcd" => "020109",
            "policestation" => "BANARHAT",
            "subdivisioncd" => "0201",
            "usercode" => 1,
            "posted_date" => "2018-11-13 15:52:36",
        ),
        array(
            "policestationcd" => "020306",
            "policestation" => "MAL",
            "subdivisioncd" => "0203",
            "usercode" => 1,
            "posted_date" => "2018-11-13 15:52:36",
        ),
        array(
            "policestationcd" => "020307",
            "policestation" => "METELI",
            "subdivisioncd" => "0203",
            "usercode" => 1,
            "posted_date" => "2018-11-13 15:52:36",
        ),
        array(
            "policestationcd" => "020308",
            "policestation" => "NAGRAKATA",
            "subdivisioncd" => "0203",
            "usercode" => 1,
            "posted_date" => "2018-11-13 15:52:36",
        ),
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->policestations as $policestation){
            $police_station = new PoliceStation ([
                'name' => $policestation['policestation'],
                'code' => $policestation['policestationcd'],
                'district_id' => District::where('lg_code', '314')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
