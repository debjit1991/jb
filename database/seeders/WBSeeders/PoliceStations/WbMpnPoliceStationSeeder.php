<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbMpnPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array(
            "policestationcd" => "230101",
            "policestation" => "GORUBATHAN",
            "subdivisioncd" => "2301",
            "usercode" => "1",
            "posted_date" => "2018-09-26 15:14:28"
        ),
        array(
            "policestationcd" => "230102",
            "policestation" => "JALDHAKA",
            "subdivisioncd" => "2301",
            "usercode" => "1",
            "posted_date" => "2018-09-26 15:14:28"
        ),
        array(
            "policestationcd" => "230103",
            "policestation" => "KALIMPONG",
            "subdivisioncd" => "2301",
            "usercode" => "1",
            "posted_date" => "2018-09-26 15:14:28"
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
                'district_id' => District::where('lg_code', '702')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
