<?php

use Illuminate\Database\Seeder;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('maklad.permission.cache');
        
        // create roles and assign existing permissions
        $role = Role::firstOrCreate(['name' => 'PTC']);
        $role = Role::firstOrCreate(['name' => 'Supervisor']);
        $role = Role::firstOrCreate(['name' => 'Administrador']);
    }
}