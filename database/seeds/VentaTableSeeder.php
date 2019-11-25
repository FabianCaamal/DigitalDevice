<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'fecha' => '2019/11/24',
            'maquina_id' => 1,
            'producto_id' => 1,
            'precio' => 7.5,
        ]);
    }
}
