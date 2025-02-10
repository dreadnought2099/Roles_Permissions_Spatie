<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       //create roles
       $admin = Role::create(['name', 'admin']);
       $user = Role::create(['name', 'user']);

       //create permissions
       $permissions = [
            ['name' => 'create'],
            ['name' => 'update'],
            ['name' => 'delete'],
       ];

       Permission::insert($permissions);

       $admin->givePermissionTo($permissions);
       $user->givePermissionTo('create');
    }
}
