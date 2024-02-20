<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbMldPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array("policestationcd" => "060101","policestation" => "GAZOLE","subdivisioncd" => "0601","usercode" => "1","posted_date" => "2018-11-13 15:07:23"),
        array("policestationcd" => "060102","policestation" => "BAMONGOLA","subdivisioncd" => "0601","usercode" => "1","posted_date" => "2018-11-13 15:07:23"),
        array("policestationcd" => "060103","policestation" => "HABIBPUR","subdivisioncd" => "0601","usercode" => "1","posted_date" => "2018-11-13 15:07:23"),
        array("policestationcd" => "060104","policestation" => "MALDA","subdivisioncd" => "0601","usercode" => "1","posted_date" => "2018-11-13 15:07:23"),
        array("policestationcd" => "060105","policestation" => "ENGLISHBAZAR","subdivisioncd" => "0601","usercode" => "1","posted_date" => "2018-11-13 15:07:23"),
        array("policestationcd" => "060106","policestation" => "MANIKCHAK","subdivisioncd" => "0601","usercode" => "1","posted_date" => "2018-11-13 15:07:23"),
        array("policestationcd" => "060107","policestation" => "KALIACHAK","subdivisioncd" => "0601","usercode" => "1","posted_date" => "2018-11-13 15:07:23"),
        array("policestationcd" => "060108","policestation" => "MOTHABARI","subdivisioncd" => "0601","usercode" => "1","posted_date" => "2018-11-13 15:07:23"),
        array("policestationcd" => "060109","policestation" => "BAISHNABNAGAR","subdivisioncd" => "0601","usercode" => "1","posted_date" => "2018-11-13 15:07:23"),
        array("policestationcd" => "060209","policestation" => "OTHER","subdivisioncd" => "0602","usercode" => "1","posted_date" => "2018-11-13 15:07:23"),
        array("policestationcd" => "060210","policestation" => "HARISHCHANDRAPUR","subdivisioncd" => "0602","usercode" => "1","posted_date" => "2018-11-13 15:07:23"),
        array("policestationcd" => "060211","policestation" => "CHANCHAL","subdivisioncd" => "0602","usercode" => "1","posted_date" => "2018-11-13 15:07:23"),
        array("policestationcd" => "060212","policestation" => "MALATIPUR","subdivisioncd" => "0602","usercode" => "1","posted_date" => "2018-11-13 15:07:23"),
        array("policestationcd" => "060213","policestation" => "RATUA","subdivisioncd" => "0602","usercode" => "1","posted_date" => "2018-11-13 15:07:23"),
        array("policestationcd" => "060214","policestation" => "PUKURIA","subdivisioncd" => "0602","usercode" => "1","posted_date" => "2018-11-13 15:07:23"),
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
                'district_id' => District::where('lg_code', '316')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
