<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbN24PoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array("policestationcd" => "090101","policestation" => "AMDANGA","subdivisioncd" => "0901","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090102","policestation" => "ASHOKENAGAR","subdivisioncd" => "0901","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090103","policestation" => "BAGUIHATI","subdivisioncd" => "0901","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090104","policestation" => "BARASAT","subdivisioncd" => "0901","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090105","policestation" => "DEGANGA","subdivisioncd" => "0901","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090106","policestation" => "HABRA","subdivisioncd" => "0901","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090107","policestation" => "NEWTOWN","subdivisioncd" => "0901","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090108","policestation" => "RAJARHAT","subdivisioncd" => "0901","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090109","policestation" => "SASAN","subdivisioncd" => "0901","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090110","policestation" => "MADHYAMGRAM","subdivisioncd" => "0901","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090111","policestation" => "DUTTAPUKUR","subdivisioncd" => "0901","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090201","policestation" => "BAGDAH","subdivisioncd" => "0902","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090202","policestation" => "BONGAON","subdivisioncd" => "0902","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090203","policestation" => "GAIGHATA","subdivisioncd" => "0902","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090204","policestation" => "GOPALNAGAR","subdivisioncd" => "0902","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090205","policestation" => "PETRAPOLE","subdivisioncd" => "0902","usercode" => "1","posted_date" => "2018-12-05 12:10:35"),
        array("policestationcd" => "090301","policestation" => "AIRPORT","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090302","policestation" => "BARANAGAR","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090303","policestation" => "BARRACKPUR","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090304","policestation" => "BELGHARIA","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090305","policestation" => "BIZPUR","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090306","policestation" => "COSSIPORE","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090307","policestation" => "DUMDUM","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090308","policestation" => "GHOLA","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090309","policestation" => "JAGATDAL","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090310","policestation" => "KHARDAHA","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090311","policestation" => "LAKETOWN","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090312","policestation" => "NAIHATI","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090313","policestation" => "NIMTA","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090314","policestation" => "NOAPARA","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090315","policestation" => "TITAGARH","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090316","policestation" => "NEW BARRACKPORE","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090317","policestation" => "NS CBI","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090318","policestation" => "NARAYANPUR","subdivisioncd" => "0903","usercode" => "1","posted_date" => "2018-12-05 12:07:43"),
        array("policestationcd" => "090401","policestation" => "BADURIA","subdivisioncd" => "0904","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090403","policestation" => "BASIRHAT","subdivisioncd" => "0904","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090404","policestation" => "HAROA","subdivisioncd" => "0904","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090405","policestation" => "HASNABAD","subdivisioncd" => "0904","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090406","policestation" => "HINGALGANJ","subdivisioncd" => "0904","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090407","policestation" => "MINAKHAN","subdivisioncd" => "0904","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090408","policestation" => "SANDESHKHALI","subdivisioncd" => "0904","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090409","policestation" => "SWARUPNAGAR","subdivisioncd" => "0904","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090410","policestation" => "HEMNAGAR COASTAL PS","subdivisioncd" => "0904","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090411","policestation" => "MATIA","subdivisioncd" => "0904","usercode" => "1","posted_date" => "2018-12-05 12:11:22"),
        array("policestationcd" => "090412","policestation" => "NAZAT","subdivisioncd" => "0904","usercode" => "1","posted_date" => "2018-12-05 12:11:34"),
        array("policestationcd" => "090501","policestation" => "BIDHANNAGAR EAST","subdivisioncd" => "0905","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090502","policestation" => "BIDHANNAGAR NORTH","subdivisioncd" => "0905","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090503","policestation" => "BIDHANNAGAR SOUTH","subdivisioncd" => "0905","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),
        array("policestationcd" => "090504","policestation" => "ELECTRONICS COMPLEX ","subdivisioncd" => "0905","usercode" => "1","posted_date" => "2018-09-26 17:22:32"),    
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
                'district_id' => District::where('lg_code', '303')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
