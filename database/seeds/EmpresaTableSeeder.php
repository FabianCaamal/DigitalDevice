<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'Marca' => Str::random(10),
            'Direccion' => Str::random(10);
            'Correo' => Str::random(10).'@gmail.com',
        ]);
    }
}
