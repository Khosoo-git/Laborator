<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create Permissions
        Permission::create(['name' => 'view system']);
        Permission::create(['name' => 'manage settings']);
        Permission::create(['name' => 'view logs']);

        // Create Roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Assign Permissions to Roles
        $adminRole->givePermissionTo('view system', 'manage settings', 'view logs');
        $userRole->givePermissionTo('view system', 'view logs');
    }
}
