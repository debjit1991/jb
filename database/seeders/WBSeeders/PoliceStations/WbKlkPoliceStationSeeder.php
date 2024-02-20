<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbKlkPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array("policestationcd" => "119902","policestation" => "AMHERST STREET","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119905","policestation" => "BELEGHATA","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119906","policestation" => "BENIAPUKUR","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119908","policestation" => "BOWBAZAR","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119909","policestation" => "BURRABAZAR","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119910","policestation" => "BURTOLLA","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119913","policestation" => "CHITPUR","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119914","policestation" => "COSSIPORE","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119916","policestation" => "ENTALLY","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119919","policestation" => "GIRISH PARK","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119920","policestation" => "HARE STREET","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119922","policestation" => "JORABAGAN","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119923","policestation" => "JORASANKO","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119928","policestation" => "MANIKTALA","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119929","policestation" => "MUCHIPARA","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119930","policestation" => "NARKELDANGA","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119932","policestation" => "NEW MARKET","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119933","policestation" => "NORTH PORT","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119934","policestation" => "PARK STREET","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119935","policestation" => "PHOOLBAGAN","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119936","policestation" => "POSTA","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119938","policestation" => "SHYAMPUKUR","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119939","policestation" => "SINTHEE","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119941","policestation" => "TALLAH","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119942","policestation" => "TALTALA","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119943","policestation" => "TANGRA","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119946","policestation" => "TOPSIA","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119947","policestation" => "ULTADANGA","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
        array("policestationcd" => "119960","policestation" => "PRAGATI MAIDAN","subdivisioncd" => "1199","usercode" => "1","posted_date" => "2018-11-29 14:52:52"),
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
                'district_id' => District::where('lg_code', '315')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
