<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\cursosRobotica;

class kitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       

        DB::table('cursos_roboticas')->insert([
            'nombreCurso'=> 'Prueba1',
            'kitRobotica'=> 'StartetKit',
        ]);

        DB::table('cursos_roboticas')->insert([
            'nombreCurso'=> 'Prueba2',
            'kitRobotica'=> 'Educational Robotics Kit',
        ]);

        DB::table('cursos_roboticas')->insert([
            'nombreCurso'=> 'Prueba3',
            'kitRobotica'=> 'Kit5',
        ]);

        
    }
}
