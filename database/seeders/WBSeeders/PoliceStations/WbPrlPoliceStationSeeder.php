<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbPrlPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array("policestationcd" => "160101","policestation" => "ARSHA","subdivisioncd" => "1601","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160102","policestation" => "BALARAMPUR","subdivisioncd" => "1601","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160103","policestation" => "HURA","subdivisioncd" => "1601","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160104","policestation" => "PURULIA TOWN","subdivisioncd" => "1601","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160105","policestation" => "PURULIA MUFASSAL","subdivisioncd" => "1601","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160201","policestation" => "BAGHMUNDI","subdivisioncd" => "1602","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160202","policestation" => "JHALDA","subdivisioncd" => "1602","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160203","policestation" => "JOYPUR","subdivisioncd" => "1602","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160204","policestation" => "KOTSHILA","subdivisioncd" => "1602","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160301","policestation" => "KASHIPUR","subdivisioncd" => "1603","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160302","policestation" => "NETURIA","subdivisioncd" => "1603","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160303","policestation" => "PARA","subdivisioncd" => "1603","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160304","policestation" => "RAGHUNATHPUR","subdivisioncd" => "1603","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160305","policestation" => "SANTALDIH","subdivisioncd" => "1603","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160306","policestation" => "SANTURI","subdivisioncd" => "1603","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160401","policestation" => "BANDWAN","subdivisioncd" => "1604","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160402","policestation" => "BARABAZAR","subdivisioncd" => "1604","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160403","policestation" => "BORO","subdivisioncd" => "1604","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160404","policestation" => "KENDA","subdivisioncd" => "1604","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160405","policestation" => "MANBAZAR","subdivisioncd" => "1604","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
        array("policestationcd" => "160406","policestation" => "PUNCHA","subdivisioncd" => "1604","usercode" => "1","posted_date" => "2018-09-24 13:47:14"),
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
                'district_id' => District::where('lg_code', '321')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
