<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbBrdPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array(
            "policestationcd" => "180101",
            "policestation" => "AUSHGRAM",
            "subdivisioncd" => "1801",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180102",
            "policestation" => "BHATAR",
            "subdivisioncd" => "1801",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180103",
            "policestation" => "BURDWAN",
            "subdivisioncd" => "1801",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180104",
            "policestation" => "GALSI",
            "subdivisioncd" => "1801",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180105",
            "policestation" => "JAMALPUR",
            "subdivisioncd" => "1801",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180106",
            "policestation" => "KHANDOGHOSH",
            "subdivisioncd" => "1801",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180107",
            "policestation" => "MADHABDIHI",
            "subdivisioncd" => "1801",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180108",
            "policestation" => "MEMARI",
            "subdivisioncd" => "1801",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180109",
            "policestation" => "RAINA",
            "subdivisioncd" => "1801",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180110",
            "policestation" => "BUDBUD",
            "subdivisioncd" => "1801",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180111",
            "policestation" => "SAKTIGARH",
            "subdivisioncd" => "1801",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180201",
            "policestation" => "KATWA",
            "subdivisioncd" => "1802",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180202",
            "policestation" => "KETUGRAM",
            "subdivisioncd" => "1802",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180203",
            "policestation" => "MONGALKOTE",
            "subdivisioncd" => "1802",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180301",
            "policestation" => "KALNA",
            "subdivisioncd" => "1803",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180302",
            "policestation" => "MONTESWAR",
            "subdivisioncd" => "1803",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180303",
            "policestation" => "PURBASTHALI",
            "subdivisioncd" => "1803",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
        ),
        array(
            "policestationcd" => "180304",
            "policestation" => "NADANGHAT",
            "subdivisioncd" => "1803",
            "usercode" => "1",
            "posted_date" => "2018-11-19 16:06:42"
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
                'district_id' => District::where('lg_code', '306')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
