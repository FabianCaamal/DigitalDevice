<?php

use Illuminate\Database\Seeder;

class SurtirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surtirs')->insert([
        	'maquina_id' => 1,
        	'producto_id' => 1,
        	'cantidad' => 10,
        	'fechaRealizada' => '2019-10-04'
        ]);

        DB::table('surtirs')->insert([
        	'maquina_id' => 2,
        	'producto_id' => 2,
        	'cantidad' => 100,
        	'fechaRealizada' => '2019-10-01'
        ]);

        DB::table('surtirs')->insert([
        	'maquina_id' => 3,
        	'producto_id' => 3,
        	'cantidad' => 34,
        	'fechaRealizada' => '2019-10-03'
        ]);
    }
}
