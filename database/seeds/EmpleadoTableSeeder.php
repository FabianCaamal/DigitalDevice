<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'nombre' => 'fabian caamal',
            'edad' => 20,
            'telefono' => '9995957022',
            'correo' => 'fabian@gmail.com',
            'direccion' => 'Maxcanú',
            'nivelEducativo' => 'preparatoria',
            'cargo' => 'surtidor',
            'fechaIngreso' => '2019-10-10',
        ]);
    }
}
