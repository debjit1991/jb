<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbS24PoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array("policestationcd" => "100101","policestation" => "GOSABA","subdivisioncd" => "1001","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100108","policestation" => "BASANTI","subdivisioncd" => "1001","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100109","policestation" => "CANNING","subdivisioncd" => "1001","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100203","policestation" => "BARUIPUR","subdivisioncd" => "1002","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100204","policestation" => "BHANGORE","subdivisioncd" => "1002","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100205","policestation" => "JOYNAGAR","subdivisioncd" => "1002","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100206","policestation" => "KULTALI","subdivisioncd" => "1002","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100207","policestation" => "SONARPUR","subdivisioncd" => "1002","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100318","policestation" => "KAKDWIP","subdivisioncd" => "1003","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100319","policestation" => "NAMKHANA","subdivisioncd" => "1003","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100320","policestation" => "PATHARPRATIMA","subdivisioncd" => "1003","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100321","policestation" => "SAGAR","subdivisioncd" => "1003","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100339","policestation" => "Dholahat","subdivisioncd" => "1003","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100340","policestation" => "FRAZERGUNJ COASTAL","subdivisioncd" => "1003","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100341","policestation" => "SUNDARBAN COASTAL","subdivisioncd" => "1003","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100402","policestation" => "MATHURAPUR","subdivisioncd" => "1004","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100410","policestation" => "DIAMOND HARBOUR","subdivisioncd" => "1004","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100411","policestation" => "RAIDIGHI","subdivisioncd" => "1004","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100412","policestation" => "FALTA","subdivisioncd" => "1004","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100413","policestation" => "KULPI","subdivisioncd" => "1004","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100414","policestation" => "MAGRAHAT","subdivisioncd" => "1004","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100415","policestation" => "MANDIR BAZAR","subdivisioncd" => "1004","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100417","policestation" => "USTHI","subdivisioncd" => "1004","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100523","policestation" => "BISHNUPUR","subdivisioncd" => "1005","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100524","policestation" => "BUDGE BUDGE","subdivisioncd" => "1005","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100529","policestation" => "MAHESHTALA","subdivisioncd" => "1005","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100530","policestation" => "METIABRUZ","subdivisioncd" => "1005","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100531","policestation" => "NADIAL","subdivisioncd" => "1005","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100532","policestation" => "NODAKHALI","subdivisioncd" => "1005","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100534","policestation" => "RABINDRANAGAR","subdivisioncd" => "1005","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100641","policestation" => "BEHALA","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100642","policestation" => "BANSDRONI","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100643","policestation" => "JADAVPUR","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100644","policestation" => "PURBA JADAVPUR","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100645","policestation" => "REGENT PARK","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100646","policestation" => "THAKURPUKUR","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100647","policestation" => "WESTPORT","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100648","policestation" => "TILJALA","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100649","policestation" => "HARIDEVPUR","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100650","policestation" => "GARDEN REACH","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100651","policestation" => " NETAJINAGAR","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100652","policestation" => "KASBA","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100653","policestation" => "KOLKATA LEATHER COMP","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100654","policestation" => "PATULI","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100655","policestation" => "PARNASHREE","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100656","policestation" => "SARSUNA","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100657","policestation" => "TARATALA","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100658","policestation" => "PANCHASAYAR","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100659","policestation" => "GARFA","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100660","policestation" => "SURVEY PARK","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100661","policestation" => "ANANDAPUR","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100662","policestation" => "NEW ALIPUR","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100663","policestation" => "TOPSIA","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100664","policestation" => "TOLLYGUNJ","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100665","policestation" => "TANGRA","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100666","policestation" => "PRAGATI MAIDAN","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
        array("policestationcd" => "100699","policestation" => "NA ( KMC)","subdivisioncd" => "1006","usercode" => "1","posted_date" => "2018-12-03 14:54:57"),
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
                'district_id' => District::where('lg_code', '304')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
