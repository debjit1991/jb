<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoliceStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            WBSeeders\PoliceStations\WbDarjPoliceStationSeeder::class, //Seeds the databse with Police Stations of Darjeeling District
            WBSeeders\PoliceStations\WbApdPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Alipurduar District
            WBSeeders\PoliceStations\WbBirPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Birbhum District
            WBSeeders\PoliceStations\WbBnrPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Bankura District
            WBSeeders\PoliceStations\WbBrdPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Purba Bardhaman District
            WBSeeders\PoliceStations\WbCbhPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Coochbehar District
            WBSeeders\PoliceStations\WbDpdPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Dinajpur Dakshin District
            WBSeeders\PoliceStations\WbDpuPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Dinajpur Uttar District
            WBSeeders\PoliceStations\WbGrmPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Jhargram District
            WBSeeders\PoliceStations\WbHooPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Hooghly District
            WBSeeders\PoliceStations\WbHwrPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Howrah District
            WBSeeders\PoliceStations\WbJlpPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Jalpaiguri District
            WBSeeders\PoliceStations\WbKlkPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Kolkata District
            WBSeeders\PoliceStations\WbMbrPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Paschim bardhaman District
            WBSeeders\PoliceStations\WbMldPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Maldah District
            WBSeeders\PoliceStations\WbMpePoliceStationSeeder::class,   //Seeds the databse with Police Stations of Mednipur East District
            WBSeeders\PoliceStations\WbMpnPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Kalimpong District
            WBSeeders\PoliceStations\WbMpwPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Mednipur West District
            WBSeeders\PoliceStations\WbMrsPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Murshidabad District
            WBSeeders\PoliceStations\WbN24PoliceStationSeeder::class,   //Seeds the databse with Police Stations of North 24 Paraganas District
            WBSeeders\PoliceStations\WbNadPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Nadia District
            WBSeeders\PoliceStations\WbPrlPoliceStationSeeder::class,   //Seeds the databse with Police Stations of Purulia District
            WBSeeders\PoliceStations\WbS24PoliceStationSeeder::class,   //Seeds the databse with Police Stations of South 24 Paraganas District

        ]);
    }
}
