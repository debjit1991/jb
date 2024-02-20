<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbGrmPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array(
            "policestationcd" => "220119",
            "policestation" => "JHARGRAM",
            "subdivisioncd" => "2201",
            "usercode" => "1",
            "posted_date" => "2018-11-26 19:11:12"
        ),
        array(
            "policestationcd" => "220120",
            "policestation" => "BELPAHARI",
            "subdivisioncd" => "2201",
            "usercode" => "1",
            "posted_date" => "2018-11-26 19:11:12"
        ),
        array(
            "policestationcd" => "220121",
            "policestation" => "BINPUR",
            "subdivisioncd" => "2201",
            "usercode" => "1",
            "posted_date" => "2018-11-26 19:11:12"
        ),
        array(
            "policestationcd" => "220122",
            "policestation" => "LALGARH",
            "subdivisioncd" => "2201",
            "usercode" => "1",
            "posted_date" => "2018-11-26 19:11:12"
        ),
        array(
            "policestationcd" => "220123",
            "policestation" => "JAMBONI",
            "subdivisioncd" => "2201",
            "usercode" => "1",
            "posted_date" => "2018-11-26 19:11:12"
        ),
        array(
            "policestationcd" => "220124",
            "policestation" => "NAYAGRAM",
            "subdivisioncd" => "2201",
            "usercode" => "1",
            "posted_date" => "2018-11-26 19:11:12"
        ),
        array(
            "policestationcd" => "220125",
            "policestation" => "SANKRAIL",
            "subdivisioncd" => "2201",
            "usercode" => "1",
            "posted_date" => "2018-11-26 19:11:12"
        ),
        array(
            "policestationcd" => "220126",
            "policestation" => "GOPIBALLAVPUR",
            "subdivisioncd" => "2201",
            "usercode" => "1",
            "posted_date" => "2018-11-26 19:11:12"
        ),
        array(
            "policestationcd" => "220127",
            "policestation" => "BELIABERAH",
            "subdivisioncd" => "2201",
            "usercode" => "1",
            "posted_date" => "2018-11-26 19:11:12"
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
                'district_id' => District::where('lg_code', '703')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}

