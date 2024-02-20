<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbMpwPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array("policestationcd" => "150101","policestation" => "KOTWALI","subdivisioncd" => "1501","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150102","policestation" => "SALBONI","subdivisioncd" => "1501","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150103","policestation" => "KESHPUR","subdivisioncd" => "1501","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150104","policestation" => "GARBETA","subdivisioncd" => "1501","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150105","policestation" => "GOALTORE","subdivisioncd" => "1501","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150106","policestation" => "ANANDAPUR","subdivisioncd" => "1501","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150206","policestation" => "KHARAGPUR(L)","subdivisioncd" => "1502","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150207","policestation" => "KHARAGPUR(R )","subdivisioncd" => "1502","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150208","policestation" => "DEBRA","subdivisioncd" => "1502","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150209","policestation" => "PINGLA","subdivisioncd" => "1502","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150210","policestation" => "KESHIARY","subdivisioncd" => "1502","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150211","policestation" => "DANTAN","subdivisioncd" => "1502","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150212","policestation" => "BELDA","subdivisioncd" => "1502","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150213","policestation" => "NARAYANGARH","subdivisioncd" => "1502","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150214","policestation" => "MOHANPUR","subdivisioncd" => "1502","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150215","policestation" => "SABONG","subdivisioncd" => "1502","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150316","policestation" => "CHANDRAKONA","subdivisioncd" => "1503","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150317","policestation" => "GHATAL","subdivisioncd" => "1503","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
        array("policestationcd" => "150318","policestation" => "DASPUR","subdivisioncd" => "1503","usercode" => "1","posted_date" => "2018-11-26 17:57:04"),
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
                'district_id' => District::where('lg_code', '318')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
