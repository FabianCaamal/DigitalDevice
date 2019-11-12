<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaquinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maquinas')->insert([
            'codigo' => Str::random(10),
            'longitud' => Str::random(10),
            'latitud' => Str::random(10),
            'dineroAlmacenado' => Str::random(10),
        ]);
    }
}
