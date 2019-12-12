<?php

use Illuminate\Database\Seeder;

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
        	'Marca' => 'Coca-cola',
        	'Direccion' => 'Mexico DF',
        	'correo' => 'coca@empresa.com'
        ]);

         DB::table('empresas')->insert([
        	'Marca' => 'Pepsico',
        	'Direccion' => 'Mexico DF',
        	'correo' => 'pepsi@empresa.com'
        ]);

         DB::table('empresas')->insert([
        	'Marca' => 'Bimbo',
        	'Direccion' => 'Yucatan',
        	'correo' => 'bimbo@empresa.com'
        ]);
    }
    }
}
