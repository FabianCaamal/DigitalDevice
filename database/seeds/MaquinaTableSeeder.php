<?php

use Illuminate\Database\Seeder;

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
        	'codigo' => 'A123BC',
        	'longitud' => '1839235002',
        	'latitud' => '36120093728',
        	'dineroAlmacenado' => 760



        ]);
        DB::table('maquinas')->insert([
        	'codigo' => '90056',
        	'longitud' => '0639235102',
        	'latitud' => '78120093745',
        	'dineroAlmacenado' => 410



        ]);
        DB::table('maquinas')->insert([
        	'codigo' => '67084',
        	'longitud' => '4572138906',
        	'latitud' => '6743375690',
        	'dineroAlmacenado' => 1029



        ]);
    }
}
