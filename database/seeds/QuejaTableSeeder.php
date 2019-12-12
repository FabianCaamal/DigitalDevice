<?php

use Illuminate\Database\Seeder;

class QuejaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quejas')->insert([
            'usuario_id' => '1',
            'empresa_id' => '1',
            'detalles' => 'sin producto',
        ]);
        DB::table('quejas')->insert([
            'usuario_id' => '2',
            'empresa_id' => '2',
            'detalles' => 'maquina no devuelve cambio',
        ]);
        DB::table('quejas')->insert([
            'usuario_id' => '3',
            'empresa_id' => '3',
            'detalles' => 'maquina desconfig de precios',
        ]);
    }
}
