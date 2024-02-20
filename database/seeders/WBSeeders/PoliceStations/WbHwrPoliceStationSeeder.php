<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbHwrPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array("policestationcd" => "120101","policestation" => "BALLY","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120102","policestation" => "BANTRA","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120103","policestation" => "BAURIA","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120104","policestation" => "CHATTERJEE HAT","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120105","policestation" => "DAS NAGAR","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120106","policestation" => "DOMJUR","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120107","policestation" => "GOLABARI","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120108","policestation" => "HOWRAH","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120109","policestation" => "JAGACHA","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120110","policestation" => "JAGATBALLAVPUR","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120111","policestation" => "LILUAH","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120112","policestation" => "MALIPANCHGHARA","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120113","policestation" => "MANIKPUR","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120114","policestation" => "NAZIRGANJ","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120115","policestation" => "PANCHLA","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120116","policestation" => "SANKRAIL","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120117","policestation" => "SHIBPUR","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120118","policestation" => "Nischinda","subdivisioncd" => "1201","usercode" => "1","posted_date" => "2019-01-02 16:14:01"),
        array("policestationcd" => "120201","policestation" => "AMTA","subdivisioncd" => "1202","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120202","policestation" => "BAGNAN","subdivisioncd" => "1202","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120203","policestation" => "JAIPUR","subdivisioncd" => "1202","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120204","policestation" => "SHYAMPUR","subdivisioncd" => "1202","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120205","policestation" => "UDAYNARAYANPUR","subdivisioncd" => "1202","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120206","policestation" => "ULUBERIA","subdivisioncd" => "1202","usercode" => "1","posted_date" => "2018-09-26 13:14:26"),
        array("policestationcd" => "120207","policestation" => "Rajapur","subdivisioncd" => "1202","usercode" => "1","posted_date" => "2018-11-29 13:00:00"),
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
                'district_id' => District::where('lg_code', '313')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}

