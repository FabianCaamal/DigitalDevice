<?php

use Illuminate\Database\Seeder;

class EmpleadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'nombre' => 'Fabian',
            'edad' => '22',
            'telefono' => '997-125-7178',
            'correo' =>'FabianCaamal@gmail.com',
            'direccion' =>'C.25 x 12 y 16',
            'nivelEducativo' =>'Preparatoria',
            'cargo' => 'Encargado de Zona',
            'fechaIngreso' => '2019-12-11',
            'empresa_id' => '1',
        ]);
         DB::table('empleados')->insert([
            'nombre' => 'Adrian',
            'edad' => '20',
            'telefono' => '997-345-8486',
            'correo' =>'AdrianQuintal@gmail.com',
            'direccion' =>'C.34 x 56 y 26',
            'nivelEducativo' =>'Secundaria',
            'cargo' => 'Conserje',
            'fechaIngreso' => '2019-12-13',
            'empresa_id' => '2',
        ]);
         DB::table('empleados')->insert([
            'nombre' => 'Eric',
            'edad' => '21',
            'telefono' => '997-123-0169',
            'correo' =>'EricCaamal@gmail.com',
            'direccion' =>'C.40 x 12 y 19',
            'nivelEducativo' =>'Univaersidad',
            'cargo' => 'Gerente',
            'fechaIngreso' => '2019-12-14',
            'empresa_id' => '3',
        ]); //
    }
}
