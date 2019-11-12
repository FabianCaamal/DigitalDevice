<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'Maquina_id' => Str::random(10),
            'producto' => Str::random(10);
            'Cantidad' => Str::random(10).'@gmail.com',
        ]);
    }
}
