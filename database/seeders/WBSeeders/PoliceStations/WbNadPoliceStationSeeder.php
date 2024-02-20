<?php

namespace Database\Seeders\WBSeeders\PoliceStations;

use App\Models\District;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class WbNadPoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array("policestationcd" => "080101","policestation" => "NAKASHIPARA PS","subdivisioncd" => "0801","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080102","policestation" => "KOTWALI PS","subdivisioncd" => "0801","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080103","policestation" => "CHAPRA PS","subdivisioncd" => "0801","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080104","policestation" => "DHUBULIA PS","subdivisioncd" => "0801","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080105","policestation" => "KALIGANJ PS","subdivisioncd" => "0801","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080106","policestation" => "NABADWIP PS","subdivisioncd" => "0801","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080201","policestation" => "KRISHNAGANJ PS","subdivisioncd" => "0802","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080202","policestation" => "DHANTALA PS","subdivisioncd" => "0802","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080203","policestation" => "HANSKHALI PS","subdivisioncd" => "0802","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080204","policestation" => "SANTIPUR PS","subdivisioncd" => "0802","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080205","policestation" => "GANGNAPUR PS","subdivisioncd" => "0802","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080206","policestation" => "TAHERPUR PS","subdivisioncd" => "0802","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080207","policestation" => "RANAGHAT PS","subdivisioncd" => "0802","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080301","policestation" => "KALYANI PS","subdivisioncd" => "0803","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080302","policestation" => "CHAKDAHA PS","subdivisioncd" => "0803","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080303","policestation" => "HARINGHATA PS","subdivisioncd" => "0803","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080401","policestation" => "HOGOLBERIA PS","subdivisioncd" => "0804","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080402","policestation" => "THANARPARA PS","subdivisioncd" => "0804","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080403","policestation" => "MURUTIA PS","subdivisioncd" => "0804","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080404","policestation" => "KARIMPUR PS","subdivisioncd" => "0804","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
        array("policestationcd" => "080405","policestation" => "TEHATTA PS","subdivisioncd" => "0804","usercode" => "1","posted_date" => "2018-09-20 16:04:16"),
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
                'district_id' => District::where('lg_code', '320')->firstOrFail()->id
            ]);

            $police_station->save();
        }
    }
}
