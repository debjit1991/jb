<?php

namespace Database\Seeders;
use App\Models\ResourceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResourceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $resource_type_list = array(
            array(
                "name" => "Admin",
                "rank" => "5"
            ),
            array(
                "name" => "State",
                "rank" => "10"
            ),
            array(
                "name" => "District",
                "rank" => "15"
            ),
            array(
                "name" => "Sub Division",
                "rank" => "20"
            ),
            array(
                "name" => "Block",
                "rank" => "25"
            ),
            array(
                "name" => "Municipality",
                "rank" => "30"
            ),
            array(
                "name" => "GP",
                "rank" => "35"
            ),
            array(
                "name" => "Ward",
                "rank" => "40"
            ),
            array(
                "name" => "School",
                "rank" => "45"
            ),
        );

        foreach ($resource_type_list as $resource_type_item) {
            ResourceType::create([
                'name'   => $resource_type_item['name'],
                'rank'    => $resource_type_item['rank'],
            ]);
        }
    }
}
