<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'farmer']);

        $permission = Permission::create(['name' => 'dashboar']);
        $permission = Permission::create(['name' => 'users']);
        $permission = Permission::create(['name' => 'devices']);
        $permission = Permission::create(['name' => 'heater']);
        $permission = Permission::create(['name' => 'lamp']);
        //
    }
}
