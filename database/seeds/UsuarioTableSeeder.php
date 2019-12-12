<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         DB::table('usuarios')->insert([
            'nombre' => 'eric caamal',
            'correo' => 'eric'.'@gmail.com',
            'sexo' => 'Hombre',
        ]);
         DB::table('usuarios')->insert([
            'nombre' => 'joel chuc',
            'correo' => 'joel'.'@gmail.com',
            'sexo' => 'Hombre',
        ]);
         DB::table('usuarios')->insert([
            'nombre' => 'daniela briceño',
            'correo' => 'daniela'.'@gmail.com',
            'sexo' => 'Mujer',
        ]);
    }
}
