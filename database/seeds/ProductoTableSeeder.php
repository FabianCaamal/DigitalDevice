<?php

use Illuminate\Database\Seeder;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
        'nombre' => 'pepsi',
        'precio' => 10,
        'categoria' => 'bebida',
        'empresa_id' => 1,

        ]);
         DB::table('productos')->insert([
        'nombre' => 'pandas',
        'precio' => 8,
        'categoria' => 'golosinas',
        'empresa_id' => 2,

        ]);
         DB::table('productos')->insert([
        'nombre' => 'papas',
        'precio' => 12,
        'categoria' => 'sabritas',
        'empresa_id' => 3,

        ]);
          DB::table('productos')->insert([
        'nombre' => 'oreo',
        'precio' => 11,
        'categoria' => 'galletas',
        'empresa_id' => 4,

        ]);
    }
}
