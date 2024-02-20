<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbDpdPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array(
            "policestationcd" => "050101",
            "policestation" => "BALURGHAT",
            "subdivisioncd" => "0501",
            "usercode" => "1",
            "posted_date" => "2018-11-15 15:28:54"
        ),
        array(
            "policestationcd" => "050102",
            "policestation" => "HILI",
            "subdivisioncd" => "0501",
            "usercode" => "1",
            "posted_date" => "2018-11-15 15:28:54"
        ),
        array(
            "policestationcd" => "050103",
            "policestation" => "KUMARGANJ",
            "subdivisioncd" => "0501",
            "usercode" => "1",
            "posted_date" => "2018-11-15 15:28:54"
        ),
        array(
            "policestationcd" => "050104",
            "policestation" => "TAPAN",
            "subdivisioncd" => "0501",
            "usercode" => "1",
            "posted_date" => "2018-11-15 15:28:54"
        ),
        array(
            "policestationcd" => "050201",
            "policestation" => "BANSHIHARI",
            "subdivisioncd" => "0502",
            "usercode" => "1",
            "posted_date" => "2018-11-15 15:28:54"
        ),
        array(
            "policestationcd" => "050202",
            "policestation" => "GANGARAMPUR",
            "subdivisioncd" => "0502",
            "usercode" => "1",
            "posted_date" => "2018-11-15 15:28:54"
        ),
        array(
            "policestationcd" => "050203",
            "policestation" => "HARIRAMPUR",
            "subdivisioncd" => "0502",
            "usercode" => "1",
            "posted_date" => "2018-11-15 15:28:54"
        ),
        array(
            "policestationcd" => "050204",
            "policestation" => "KUSHMANDI",
            "subdivisioncd" => "0502",
            "usercode" => "1",
            "posted_date" => "2018-11-15 15:28:54"
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
                'district_id' => District::where('lg_code', '310')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}

