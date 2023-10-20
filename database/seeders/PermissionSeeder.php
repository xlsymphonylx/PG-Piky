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
            //Roles Table
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //Work Order Table
            'ver-work',
            'crear-work',
            'editar-work',
            'borrar-work',
            //Conditions Table
            'ver-conditions',
            'crear-conditions',
            'editar-conditions',
            'borrar-conditions',
            //Vessel_Info Table
            'ver-vesselinfo',
            'crear-vesselinfo',
            'editar-vesselinfo',
            'borrar-vesselinfo',
            //Time Log Table
            'ver-timelog',
            'crear-timelog',
            'editar-timelog',
            'borrar-timelog',
            //AFT Table
            'ver-AFT',
            'crear-AFT',
            'editar-AFT',
            'borrar-AFT',
            //FWDTable
            'ver-FWT',
            'crear-FWT',
            'editar-FWT',
            'borrar-FWT',
            //MM Table
            'ver-MM',
            'crear-MM',
            'editar-MM',
            'borrar-MM',
            //MID Table
            'ver-MID',
            'crear-MID',
            'editar-MID',
            'borrar-MID',
            //MM Displacement Table
            'ver-MMD',
            'crear-MMD',
            'editar-MMD',
            'borrar-MMD',
            //displacement Table
            'ver-Displacement',
            'crear-Displacement',
            'editar-Displacement',
            'borrar-Displacement',
            //deduction_total Table
            'ver-DeductionTotal',
            'crear-DeductionTotal',
            'editar-DeductionTotal',
            'borrar-DeductionTotal',
            //Trim Corr Table
            'ver-TrimCorr',
            'crear-TrimCorr',
            'editar-TrimCorr',
            'borrar-TrimCorr',
            //Vessel Corr Table
            'ver-VesselCorr',
            'crear-VesselCorr',
            'editar-VesselCorr',
            'borrar-VesselCorr',
        ];
        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        }
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
    }
}
