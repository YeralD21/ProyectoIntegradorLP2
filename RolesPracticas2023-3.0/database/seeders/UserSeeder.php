<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $user=User::create([
            'name'=>'Jenson Chambi',
            'email'=>'jenson@gmail.com',
            'password'=>bcrypt('123')
        ]);
        $user->assignRole('Coordinador');

        $user=User::create([
            'name'=>'Omar Sanchez',
            'email'=>'omar@gmail.com',
            'password'=>bcrypt('123')
        ]);
        $user->assignRole('Supervisor');

        $user=User::create([
            'name'=>'Yerald Sanchez Saravia',
            'email'=>'yerald@gmail.com',
            'password'=>bcrypt('123')
        ]);
        $user->assignRole('Estudiante');
    }
}
