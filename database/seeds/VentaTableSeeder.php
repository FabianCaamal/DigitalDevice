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
        DB::table('empresas')->insert([
            'Fecha' => Str::random(10),
            'Producto' => Str::random(10);
            'Precio' => Str::random(10),
        ]);
    }
}
