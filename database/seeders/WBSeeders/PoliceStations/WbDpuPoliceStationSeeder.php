<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbDpuPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array(
            "policestationcd" => "040101",
            "policestation" => "RAIGANJ",
            "subdivisioncd" => "0401",
            "usercode" => "1",
            "posted_date" => "2018-11-15 16:22:51"
        ),
        array(
            "policestationcd" => "040102",
            "policestation" => "HEMTABAD",
            "subdivisioncd" => "0401",
            "usercode" => "1",
            "posted_date" => "2018-11-15 16:22:51"
        ),
        array(
            "policestationcd" => "040103",
            "policestation" => "KALIYAGANJ",
            "subdivisioncd" => "0401",
            "usercode" => "1",
            "posted_date" => "2018-11-15 16:22:51"
        ),
        array(
            "policestationcd" => "040104",
            "policestation" => "ITAHAR",
            "subdivisioncd" => "0401",
            "usercode" => "1",
            "posted_date" => "2018-11-15 16:22:51"
        ),
        array(
            "policestationcd" => "040201",
            "policestation" => "CHOPRA",
            "subdivisioncd" => "0402",
            "usercode" => "1",
            "posted_date" => "2018-11-15 16:22:51"
        ),
        array(
            "policestationcd" => "040202",
            "policestation" => "ISLAMPUR",
            "subdivisioncd" => "0402",
            "usercode" => "1",
            "posted_date" => "2018-11-15 16:22:51"
        ),
        array(
            "policestationcd" => "040203",
            "policestation" => "GOALPOKHAR",
            "subdivisioncd" => "0402",
            "usercode" => "1",
            "posted_date" => "2018-11-15 16:22:51"
        ),
        array(
            "policestationcd" => "040204",
            "policestation" => "CHAKULIA",
            "subdivisioncd" => "0402",
            "usercode" => "1",
            "posted_date" => "2018-11-15 16:22:51"
        ),
        array(
            "policestationcd" => "040205",
            "policestation" => "KARANDIGHI",
            "subdivisioncd" => "0402",
            "usercode" => "1",
            "posted_date" => "2018-11-15 16:22:51"
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
                'district_id' => District::where('lg_code', '311')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
