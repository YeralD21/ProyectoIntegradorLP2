<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
         //Dashboard
        Permission::create([
            'name'=>'Ver dashboard'
        ]);

        //Coordinador
        Permission::create([
            'name'=>'Listar estudiantes'
        ]);
        Permission::create([
            'name'=>'Crear estudiantes'
        ]);
        Permission::create([
            'name'=>'Editar estudiantes'
        ]);
        Permission::create([
            'name'=>'Eliminar estudiantes'
        ]);
        //Coordinador-Crear-Sede
        Permission::create([
            'name'=>'Listar Sede'
        ]);
        Permission::create([
            'name'=>'Crear Sede'
        ]);
        Permission::create([
            'name'=>'Editar Sede'
        ]);
        Permission::create([
            'name'=>'Eliminar Sede'
        ]);
        //Coordinador-Crear-Empresa
        Permission::create([
            'name'=>'Listar Empresa'
        ]);
        Permission::create([
            'name'=>'Crear Empresa'
        ]);
        Permission::create([
            'name'=>'Editar Empresa'
        ]);
        Permission::create([
            'name'=>'Eliminar Empresa'
        ]);
        //(Coordinador/Estudiante)/Postular/Crear-Convocatoria
        Permission::create([
            'name'=>'Listar Convocatoria'
        ]);
        Permission::create([
            'name'=>'Crear Convocatoria'
        ]);
        Permission::create([
            'name'=>'Editar Convocatoria'
        ]);
        Permission::create([
            'name'=>'Eliminar Convocatoria'
        ]);


        //(Coordinador/Estudiante)-Enviar/Validar Requisitos
        Permission::create([
            'name'=>'Listar Requisitos'
        ]);
        Permission::create([
            'name'=>'Crear Requisitos'
        ]);
        Permission::create([
            'name'=>'Editar Requisitos'
        ]);
        Permission::create([
            'name'=>'Eliminar Requisitos'
        ]);

        //Estudiante-Crear-Empresa
        Permission::create([
            'name'=>'Listar Empresa Formulario'
        ]);
        Permission::create([
            'name'=>'Crear Empresa Formulario'
        ]);
        Permission::create([
            'name'=>'Editar Empresa Formulario'
        ]);
        Permission::create([
            'name'=>'Eliminar Empresa Formulario'
        ]);


    }
}
