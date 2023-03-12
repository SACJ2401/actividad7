<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name'=> 'Admon',
            'email'=> 'admon@robotics.com',
            'password' => 'Adm@2022',
            'rol' => 'Administrativo',
        ]);

        DB::table('users')->insert([
            'name'=> 'Tecmilenio',
            'email'=> 'tecmilenio@robotics.com',
            'password' => 'Adm@2022',
            'rol' => 'Profesor',
        ]);

        DB::table('users')->insert([
            'name'=> 'Estudiante',
            'email'=> 'student@robotics.com',
            'password' => 'Adm@2022',
            'rol' => 'Estudiante',
        ]);

    }
}
