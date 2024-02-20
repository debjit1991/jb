<?php

namespace Database\Seeders\UserSeeders;

use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use App\Models\State;
use App\Models\UserResource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'State Admin WB',
            'email' => 'sa-wb@nic.in',
            //Default Password = password
        ]);

        /**
         * Creating the Profile
         */
        $profile = new Profile([
            'designation' => 'State Admin WB',
            'mobile' => '9874379963',
        ]);
        $user->profile()->save($profile);

        $role = Role::findByName('State Admin');
        $user->assignRole($role);
        $user->givePermissionTo($role->permissions);


        /**
         * Creating a User Resource and associating with WB State
         */
        $resource = new UserResource();
        $resource->resource()->associate(
            State::where(
                'ref_code',
                19
            )->first()
        );
        $user->attached_to()->save($resource);
    }
}
