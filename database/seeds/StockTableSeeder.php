<?php

use Illuminate\Database\Seeder;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('stock')->insert([
        	'maquina_id' => 1,
        	'producto_id' => 1,
        	'cantidad' => 15
        ]);

        DB::table('stock')->insert([
        	'maquina_id' => 2,
        	'producto_id' => 2,
        	'cantidad' => 10
        ]);

        DB::table('stock')->insert([
        	'maquina_id' => 3,
        	'producto_id' => 2,
        	'cantidad' => 4
        ]);
    }
}
