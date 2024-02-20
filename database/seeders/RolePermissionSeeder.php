<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $roles = [
            'Super Admin',
            'State Admin',
            'State Officer',
            'State User',
            'Department Admin',
            'Department Officer',
            'Department User',
            'District Admin',
            'District Officer',
            'District User',
            'Approver',
            'Verifier',
            'Operator',
        ];

        $parent_roles = [
            'Super Admin'           => '',
            'State Admin'           => 'Super Admin',
            'State Officer'         => 'State Admin',
            'State User'            => 'State Admin',
            'Department Admin'      => 'State Admin',
            'Department Officer'    => 'State Admin',
            'Department User'       => 'State Admin',
            'District Admin'        => 'State Admin',
            'District Officer'      => 'District Admin',
            'District User'         => 'District Admin',
            'Approver'              => 'District Admin',
            'Verifier'              => 'District Admin',
            'Operator'              => 'District Admin',
        ];

        $role_resources = [
            'Super Admin'           => '',
            'State Admin'           => ["App\Models\State"],
            'State Officer'         => ["App\Models\State", "App\Models\District"],
            'State User'            => ["App\Models\State", "App\Models\District"],
            'Department Admin'      => ["App\Models\State", "App\Models\Department"],
            'Department Officer'    => ["App\Models\State", "App\Models\Department"],
            'Department User'       => ["App\Models\State", "App\Models\Department"],
            'District Admin'        => ["App\Models\District", "App\Models\Block", "App\Models\Municipality"],
            'District Officer'      => ["App\Models\District", "App\Models\Block", "App\Models\Municipality"],
            'District User'         => ["App\Models\District", "App\Models\Block", "App\Models\Municipality"],
            'Approver'              => ["App\Models\District", "App\Models\Block", "App\Models\Municipality"],
            'Verifier'              => ["App\Models\District", "App\Models\Block", "App\Models\Municipality"],
            'Operator'              => ["App\Models\District", "App\Models\Block", "App\Models\Municipality"],
        ];

        $permissions = [
            //User Model
            'create user',
            'read user',
            'update user',
            'delete user',
            //User Resource
            'create user resource',
            'read user resource',
            'update user resource',
            'delete user resource',
            //Role
            'create role',
            'read role',
            'update role',
            'delete role',
            //Permission
            'create permission',
            'read permission',
            'update permission',
            'delete permission',
            //Role Permission
            'create role permission',
            'read role permission',
            'update role permission',
            'delete role permission',
            //User Role
            'create user role',
            'read user role',
            'update user role',
            'delete user role',
            //User Permission
            'create user permission',
            'read user permission',
            'update user permission',
            'delete user permission',
            //State
            'create state',
            'read state',
            'update state',
            'delete state',
            //District
            'create district',
            'read district',
            'update district',
            'delete district',
            //Block
            'create block',
            'read block',
            'update block',
            'delete block',
            //Municipality
            'create municipality',
            'read municipality',
            'update municipality',
            'delete municipality',
        ];

        $role_permission_map = [
            'Super Admin'           => [
                //Role
                'create role',
                'read role',
                'update role',
                'delete role',
                //Permission
                'create permission',
                'read permission',
                'update permission',
                'delete permission',
                //Role Permission
                'create role permission',
                'read role permission',
                'update role permission',
                'delete role permission',
            ],
            'State Admin'           => [
                //User Model
                'create user',
                'read user',
                'update user',
                'delete user',
                //User Resource
                'create user resource',
                'read user resource',
                'update user resource',
                'delete user resource',
                //User Role
                'create user role',
                'read user role',
                'update user role',
                'delete user role',
                //User Permission
                'create user permission',
                'read user permission',
                'update user permission',
                'delete user permission',
                //State
                'create state',
                'read state',
                'update state',
                'delete state',
                //District
                'create district',
                'read district',
                'update district',
                'delete district',
                //Block
                'create block',
                'read block',
                'update block',
                'delete block',
                //Municipality
                'create municipality',
                'read municipality',
                'update municipality',
                'delete municipality',
            ],
            'State Officer'         => [
                //State
                'read state',
                //District
                'read district',
                //Block
                'read block',
                //Municipality
                'read municipality',
            ],
            'State User'            => [
                //District
                'read district',
                //Block
                'read block',
                //Municipality
                'read municipality',
            ],
            'Department Admin'      => [],
            'Department Officer'    => [],
            'Department User'       => [],
            'District Admin'        => [
                //District
                'read district',
                //Block
                'create block',
                'read block',
                'update block',
                'delete block',
                //Municipality
                'create municipality',
                'read municipality',
                'update municipality',
                'delete municipality',
            ],
            'District Officer'      => [
                //District
                'read district',
                //Block
                'read block',
                //Municipality
                'read municipality',
            ],
            'District User'         => [
                //District
                'read district',
                //Block
                'read block',
                //Municipality
                'read municipality',
            ],
            'Approver'              => [
                //District
                'read district',
                //Block
                'read block',
                //Municipality
                'read municipality',
            ],
            'Verifier'              => [
                //District
                'read district',
                //Block
                'read block',
                //Municipality
                'read municipality',
            ],
            'Operator'              => [
                //District
                'read district',
                //Block
                'read block',
                //Municipality
                'read municipality',
            ],
        ];

        $rolesArr = collect($roles)->map(function ($role) {
            return [
                'id' => (string) str()->ulid(),
                'name' => $role,
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now()
            ];
        })->toArray();

        $permissionsArr = collect($permissions)->map(function ($permission) {
            return [
                'id' => (string) str()->ulid(),
                'name' => $permission,
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now()
            ];
        })->toArray();

        // Insert all roles
        Role::insert($rolesArr);

        // Insert all permissions
        Permission::insert($permissionsArr);

        foreach (Role::all() as $role) {
            if ($parent_roles[$role->name]) {
                $role->parent_role_id = Role::findByName($parent_roles[$role->name])->id;
            }
            $role->resource_types = $role_resources[$role->name];
            $role->save();
        }

        foreach ($role_permission_map as $role_name => $permissions) {
            $role = Role::findByName($role_name);
            $role->givePermissionTo($permissions);
        }
    }
}
