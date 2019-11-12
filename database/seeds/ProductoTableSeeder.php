<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'Nombre' => Str::random(10),
            'precio' => Str::random(10);
            'Categoria' => Str::random(10),
            'distribuidor'=> Str::random(10),
        ]);
    }
}
