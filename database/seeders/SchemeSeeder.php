<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;
use App\Models\Scheme;
class SchemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $department= Department::where('name','WCD Department')->first();
        Scheme::create([
            'name' => 'Manabik',
            'department_id' => $department->id,
            'short_code' => 'Manabik',
        ]);
    }
}
