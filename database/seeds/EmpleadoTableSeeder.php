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
            'nombre' => Str::random(10),
            'edad' => Str::random(2),
            'telefono' => Str::random(10),
            'correo' => Str::random(10).'@gmail.com',
            'direccion' => Str::random(10),
            'nombre' => Str::random(10),
            'cargo' => Str::random(10),
            'fechaIngreso' => Str::random(10),
        ]);
    }
}
