<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbMbrPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array("policestationcd" => "200101","policestation" => "ASANSOL (NORTH)","subdivisioncd" => "2001","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200102","policestation" => "ASANSOL (SOUTH)","subdivisioncd" => "2001","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200103","policestation" => "BARABANI","subdivisioncd" => "2001","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200104","policestation" => "CHITTARANJAN","subdivisioncd" => "2001","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200105","policestation" => "HIRAPUR","subdivisioncd" => "2001","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200106","policestation" => "JAMURIA","subdivisioncd" => "2001","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200107","policestation" => "KULTI","subdivisioncd" => "2001","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200108","policestation" => "RANIGANJ","subdivisioncd" => "2001","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200109","policestation" => "SALANPUR","subdivisioncd" => "2001","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200201","policestation" => "ANDAL","subdivisioncd" => "2002","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200202","policestation" => "AUROBINDA","subdivisioncd" => "2002","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200203","policestation" => "BUDBUD","subdivisioncd" => "2002","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200204","policestation" => "COKEOVEN","subdivisioncd" => "2002","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200205","policestation" => "DURGAPUR-FARIDPUR","subdivisioncd" => "2002","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200206","policestation" => "KANKSA","subdivisioncd" => "2002","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200207","policestation" => "PANDABESWAR","subdivisioncd" => "2002","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
        array("policestationcd" => "200208","policestation" => "N.T.S. DURGAPUR-10","subdivisioncd" => "2002","usercode" => "1","posted_date" => "2018-09-20 13:41:27"),
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
                'district_id' => District::where('lg_code', '704')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
