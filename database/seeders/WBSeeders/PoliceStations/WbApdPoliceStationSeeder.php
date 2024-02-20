<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbApdPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array(
            "policestationcd" => "210101",
            "policestation" => "ALIPURDUAR",
            "subdivisioncd" => "2101",
            "usercode" => "1",
            "posted_date" => "2018-09-26 12:54:14"
        ),
        array(
            "policestationcd" => "210102",
            "policestation" => "JAIGAON",
            "subdivisioncd" => "2101",
            "usercode" => "1",
            "posted_date" => "2018-09-26 12:54:14"
        ),
        array(
            "policestationcd" => "210103",
            "policestation" => "SHAMUKTALA",
            "subdivisioncd" => "2101",
            "usercode" => "1",
            "posted_date" => "2018-09-26 12:54:14"
        ),
        array(
            "policestationcd" => "210104",
            "policestation" => "BIRPARA",
            "subdivisioncd" => "2101",
            "usercode" => "1",
            "posted_date" => "2018-09-26 12:54:14"
        ),
        array(
            "policestationcd" => "210105",
            "policestation" => "FALAKATA",
            "subdivisioncd" => "2101",
            "usercode" => "1",
            "posted_date" => "2018-09-26 12:54:14"
        ),
        array(
            "policestationcd" => "210106",
            "policestation" => "KALCHINI",
            "subdivisioncd" => "2101",
            "usercode" => "1",
            "posted_date" => "2018-09-26 12:54:14"
        ),
        array(
            "policestationcd" => "210107",
            "policestation" => "KUMARGRAM",
            "subdivisioncd" => "2101",
            "usercode" => "1",
            "posted_date" => "2018-09-26 12:54:14"
        ),
        array(
            "policestationcd" => "210108",
            "policestation" => "MADARIHAT",
            "subdivisioncd" => "2101",
            "usercode" => "1",
            "posted_date" => "2018-09-26 12:54:14"
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
                'district_id' => District::where('lg_code', '664')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
