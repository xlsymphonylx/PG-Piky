<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            'create-work_orders',
            'create-conditions',
            'create-users',
            'create-roles',
            'create-time_logs',
            'create-ships',
            'show-work_orders',
            'show-conditions',
            'show-users',
            'show-roles',
            'show-time_logs',
            'show-ships',
            'edit-work_orders',
            'edit-conditions',
            'edit-users',
            'edit-roles',
            'edit-time_logs',
            'edit-ships',
            'delete-work_orders',
            'delete-conditions',
            'delete-users',
            'delete-roles',
            'delete-time_logs',
            'delete-ships',
        ];
        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        }
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
    }
}
