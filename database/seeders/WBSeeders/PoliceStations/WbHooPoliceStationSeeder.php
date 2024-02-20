<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbHooPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array("policestationcd" => "130101","policestation" => "CHINSURAH","subdivisioncd" => "1301","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130102","policestation" => "POLBA","subdivisioncd" => "1301","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130103","policestation" => "GURAP","subdivisioncd" => "1301","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130104","policestation" => "DADPUR","subdivisioncd" => "1301","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130105","policestation" => "MOGRA","subdivisioncd" => "1301","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130106","policestation" => "DHANIAKHALI","subdivisioncd" => "1301","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130107","policestation" => "PANDUA","subdivisioncd" => "1301","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130108","policestation" => "BALAGARH","subdivisioncd" => "1301","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130201","policestation" => "CHANDANNAGAR","subdivisioncd" => "1302","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130202","policestation" => "BHADRESWAR","subdivisioncd" => "1302","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130203","policestation" => "TARAKESWAR","subdivisioncd" => "1302","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130204","policestation" => "HARIPAL","subdivisioncd" => "1302","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130205","policestation" => "SINGUR","subdivisioncd" => "1302","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130301","policestation" => "UTTARPARA","subdivisioncd" => "1303","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130302","policestation" => "SERAMPORE","subdivisioncd" => "1303","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130303","policestation" => "RISHRA","subdivisioncd" => "1303","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130304","policestation" => "DANKUNI","subdivisioncd" => "1303","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130305","policestation" => "CHANDITALA","subdivisioncd" => "1303","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130306","policestation" => "JANGIPARA","subdivisioncd" => "1303","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130401","policestation" => "ARAMBAGH","subdivisioncd" => "1304","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130402","policestation" => "PURSURAH","subdivisioncd" => "1304","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130403","policestation" => "KHANAKUL","subdivisioncd" => "1304","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
        array("policestationcd" => "130404","policestation" => "GOGHAT","subdivisioncd" => "1304","usercode" => "1","posted_date" => "2018-08-20 15:17:03"),
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
                'district_id' => District::where('lg_code', '312')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
