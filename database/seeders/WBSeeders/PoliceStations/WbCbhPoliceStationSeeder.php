<?php

namespace Database\Seeders\WBSeeders\PoliceStations;;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbCbhPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array(
            "policestationcd" => "010101",
            "policestation" => "KOTWALI",
            "subdivisioncd" => "0101",
            "usercode" => 1,
            "posted_date" => "2018-11-19 14:32:06",
        ),
        array(
            "policestationcd" => "010102",
            "policestation" => "PUNDIBARI",
            "subdivisioncd" => "0101",
            "usercode" => 1,
            "posted_date" => "2018-11-19 14:32:06",
        ),
        array(
            "policestationcd" => "010201",
            "policestation" => "DINHATA",
            "subdivisioncd" => "0102",
            "usercode" => 1,
            "posted_date" => "2018-11-19 14:32:06",
        ),
        array(
            "policestationcd" => "010202",
            "policestation" => "SITAI",
            "subdivisioncd" => "0102",
            "usercode" => 1,
            "posted_date" => "2018-11-19 14:32:06",
        ),
        array(
            "policestationcd" => "010203",
            "policestation" => "SAHEBGANJ",
            "subdivisioncd" => "0102",
            "usercode" => 1,
            "posted_date" => "2018-11-19 14:32:06",
        ),
        array(
            "policestationcd" => "010301",
            "policestation" => "GHOKSADANGA",
            "subdivisioncd" => "0103",
            "usercode" => 1,
            "posted_date" => "2018-11-19 14:32:06",
        ),
        array(
            "policestationcd" => "010302",
            "policestation" => "MATHABHANGA",
            "subdivisioncd" => "0103",
            "usercode" => 1,
            "posted_date" => "2018-11-19 14:32:06",
        ),
        array(
            "policestationcd" => "010303",
            "policestation" => "SITALKUCHI",
            "subdivisioncd" => "0103",
            "usercode" => 1,
            "posted_date" => "2018-11-19 14:32:06",
        ),
        array(
            "policestationcd" => "010401",
            "policestation" => "HALDIBARI",
            "subdivisioncd" => "0104",
            "usercode" => 1,
            "posted_date" => "2018-11-19 14:32:06",
        ),
        array(
            "policestationcd" => "010402",
            "policestation" => "KUCHLIBARI",
            "subdivisioncd" => "0104",
            "usercode" => 1,
            "posted_date" => "2018-11-19 14:32:06",
        ),
        array(
            "policestationcd" => "010403",
            "policestation" => "MEKHLIGANJ",
            "subdivisioncd" => "0104",
            "usercode" => 1,
            "posted_date" => "2018-11-19 14:32:06",
        ),
        array(
            "policestationcd" => "010501",
            "policestation" => "BOXIRHAT",
            "subdivisioncd" => "0105",
            "usercode" => 1,
            "posted_date" => "2018-11-19 14:32:06",
        ),
        array(
            "policestationcd" => "010502",
            "policestation" => "TUFANGANJ",
            "subdivisioncd" => "0105",
            "usercode" => 1,
            "posted_date" => "2018-11-19 14:32:06",
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
                'district_id' => District::where('lg_code', '308')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
