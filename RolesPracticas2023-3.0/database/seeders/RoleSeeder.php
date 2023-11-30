<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $role=Role::create(['name'=>'Coordinador']);
        $role->syncPermissions([
            //Asignar Roles
            'Listar estudiantes',
            'Crear estudiantes',
            'Editar estudiantes',
            'Eliminar estudiantes',

            'Listar Sede',
            'Crear Sede',
            'Editar Sede',
            'Eliminar Sede',

            'Listar Empresa',
            'Crear Empresa',
            'Editar Empresa',
            'Eliminar Empresa',

            'Listar Convocatoria',
            'Crear Convocatoria',
            'Editar Convocatoria',
            'Eliminar Convocatoria',

            'Listar Requisitos',
            'Editar Requisitos',
            'Eliminar Requisitos',

        ]);

        $role=Role::create(['name'=>'Supervisor']);
        $role->permissions()->attach([1]);

        $role=Role::create(['name'=>'Estudiante']);
        $role->syncPermissions([
            //Convocatoria
            'Listar Convocatoria',

            //Requisitos
            'Listar Requisitos',
            'Crear Requisitos',

            //Empresa Formulario
            'Listar Empresa Formulario',
            'Crear Empresa Formulario',
            'Editar Empresa Formulario',
            'Eliminar Empresa Formulario',

        ]);
    }
}
