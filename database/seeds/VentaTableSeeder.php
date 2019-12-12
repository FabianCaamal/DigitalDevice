<?php

use Illuminate\Database\Seeder;

class VentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ventas')->insert([
        	'fecha' => '2019-10-10',
        	'maquina_id' => 1,
        	'producto_id' => 1,
        	'precio' => 10
        ]);

        DB::table('ventas')->insert([
        	'fecha' => '2019-10-10',
        	'maquina_id' => 1,
        	'producto_id' => 2,
        	'precio' => 10
        ]);

        DB::table('ventas')->insert([
        	'fecha' => '2019-10-8',
        	'maquina_id' => 2,
        	'producto_id' => 2,
        	'precio' => 10
        ]);

        DB::table('ventas')->insert([
        	'fecha' => '2019-11-28',
        	'maquina_id' => 3,
        	'producto_id' => 3,
        	'precio' => 10
        ]);
    }
}
