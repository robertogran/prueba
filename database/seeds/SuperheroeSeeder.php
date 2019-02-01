<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperheroeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('superheroes')->insert([
           [
                'nombre'=> 'Superman',
                'poder'=> 'vuela',
                'creador'=> 'Robert',
                'villano'=> 'Criptonita ',
           ],
    
            [
                'nombre'=> 'Batman',
                'poder'=> 'Batimóvil',
                'creador'=> 'Robert',
                'villano'=> 'Wason ',
            ],
            [
                'nombre'=> 'Linterna Verde',
                'poder'=> 'Luz verde',
                'creador'=> 'Robert',
                'villano'=> 'No sé ',
            ],
            [
                'nombre'=> 'Hulk',
                'poder'=> 'Fuerza',
                'creador'=> 'Robert',
                'villano'=> 'No sé ',
            ],
            [
                'nombre'=> 'La Mole',
                'poder'=> 'Roca',
                'creador'=> 'Robert',
                'villano'=> 'Dr. Watson ',
            ],
            [
                'nombre'=> 'Mujer Invisible',
                'poder'=> 'Invisible',
                'creador'=> 'Robert',
                'villano'=> 'Fantasma ',
            ]
    ]) ;
    }
}
