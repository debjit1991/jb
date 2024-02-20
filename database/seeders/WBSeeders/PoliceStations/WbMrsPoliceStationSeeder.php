<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbMrsPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array("policestationcd" => "070108","policestation" => "FARAKKA","subdivisioncd" => "0701","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070119","policestation" => "RAGHUNATHGANJ","subdivisioncd" => "0701","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070123","policestation" => "SUTI","subdivisioncd" => "0701","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070125","policestation" => "SAGARDIGHI","subdivisioncd" => "0701","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070126","policestation" => "SAMSERGANJ","subdivisioncd" => "0701","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070201","policestation" => "BAHARAMPUR","subdivisioncd" => "0702","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070202","policestation" => "BELDANGA","subdivisioncd" => "0702","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070207","policestation" => "DAULATABAD","subdivisioncd" => "0702","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070209","policestation" => "HARIHARPARA","subdivisioncd" => "0702","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070218","policestation" => "NOWDA","subdivisioncd" => "0702","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070222","policestation" => "REJINAGAR","subdivisioncd" => "0702","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070227","policestation" => "SHAKTIPUR","subdivisioncd" => "0702","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070228","policestation" => "NOT MENTIONED","subdivisioncd" => "0702","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070304","policestation" => "BHARATPUR","subdivisioncd" => "0703","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070305","policestation" => "BURWAN","subdivisioncd" => "0703","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070313","policestation" => "KHARGRAM","subdivisioncd" => "0703","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070314","policestation" => "KANDI","subdivisioncd" => "0703","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070324","policestation" => "SALAR","subdivisioncd" => "0703","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070403","policestation" => "BHAGABANGOLA","subdivisioncd" => "0704","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070411","policestation" => "JIAGANJ","subdivisioncd" => "0704","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070415","policestation" => "LALGOLA","subdivisioncd" => "0704","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070416","policestation" => "MURSHIDABAD","subdivisioncd" => "0704","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070417","policestation" => "NABAGRAM","subdivisioncd" => "0704","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070421","policestation" => "RANITALA","subdivisioncd" => "0704","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070506","policestation" => "DOMKAL","subdivisioncd" => "0705","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070510","policestation" => "ISLAMPUR","subdivisioncd" => "0705","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070512","policestation" => "JALANGI","subdivisioncd" => "0705","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
        array("policestationcd" => "070520","policestation" => "RANINAGAR","subdivisioncd" => "0705","usercode" => "1","posted_date" => "2018-11-15 17:24:03"),
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
                'district_id' => District::where('lg_code', '319')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
