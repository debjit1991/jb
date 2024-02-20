<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbMpePoliceStationSeeder extends Seeder
{
    protected $policestations = array(  
        array("policestationcd" => "140101","policestation" => "CHANDIPUR","subdivisioncd" => "1401","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140102","policestation" => "CHANDIPUR","subdivisioncd" => "1401","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140103","policestation" => "KOLAGHAT","subdivisioncd" => "1401","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140104","policestation" => "MOYNA","subdivisioncd" => "1401","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140105","policestation" => "NANDAKUMAR","subdivisioncd" => "1401","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140106","policestation" => "PANSKURA","subdivisioncd" => "1401","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140107","policestation" => "TAMLUK","subdivisioncd" => "1401","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140201","policestation" => "BHABANIPUR","subdivisioncd" => "1402","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140202","policestation" => "DURGACHAK","subdivisioncd" => "1402","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140203","policestation" => "HALDIA","subdivisioncd" => "1402","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140204","policestation" => "MAHISHADAL","subdivisioncd" => "1402","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140205","policestation" => "NANDIGRAM","subdivisioncd" => "1402","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140206","policestation" => "SUTAHATA","subdivisioncd" => "1402","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140301","policestation" => "BHUPATINAGAR","subdivisioncd" => "1403","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140302","policestation" => "CONTAI","subdivisioncd" => "1403","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140303","policestation" => "DIGHA","subdivisioncd" => "1403","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140304","policestation" => "KHEJURI","subdivisioncd" => "1403","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140305","policestation" => "MARISHDA","subdivisioncd" => "1403","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140306","policestation" => "RAMNAGAR","subdivisioncd" => "1403","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140401","policestation" => "BHAGWANPUR","subdivisioncd" => "1404","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140402","policestation" => "EGRA","subdivisioncd" => "1404","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
        array("policestationcd" => "140403","policestation" => "PATASHPUR","subdivisioncd" => "1404","usercode" => "1","posted_date" => "2018-11-19 16:31:14"),
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
                'district_id' => District::where('lg_code', '317')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
