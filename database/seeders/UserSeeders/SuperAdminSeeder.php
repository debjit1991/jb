<?php

namespace Database\Seeders\UserSeeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'wbsr-admin@nic.in',
            //Default Password = password
        ]);

        $role = Role::findByName('Super Admin');
        $user->assignRole($role);
        $user->givePermissionTo($role->permissions);
    }
}
