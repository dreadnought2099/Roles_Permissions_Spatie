<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {

        $permissions = [
            'create posts',
            'edit posts',
            'delete posts',
            'view posts'
        ];


        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }


        $roles = [
            'Admin' => ['create posts', 'edit posts', 'delete posts', 'view posts'],
            'Editor' => ['edit posts', 'delete posts','view posts'],
            'User' => ['view posts']
        ];

        foreach ($roles as $role => $perms) {
            $role = Role::firstOrCreate(['name' => $role]);
            $role->syncPermissions($perms);
        }


        $users = User::inRandomOrder()->limit(10)->get();
        foreach ($users as $user) {
            $randomRole = array_rand($roles);
            $user->assignRole(array_keys($roles)[$randomRole]);
        }
    }
}
