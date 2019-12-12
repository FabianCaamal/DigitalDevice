<?php
namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IBusqueda;
use App\Producto;
use App\Maquina;


class BuscarServicio extends Controller implements IBusqueda
{
	public function SearchProducto($name)
	{

		//('name', 'like', '%'. $name.'%')->get();     //funcion para buscar producto//
		$encontrar=Producto::where('nombre', 'like', '%'. $name.'%');

		return array('r'=>$name);

	}

	public function SearchMaquina($name)
	{

		//('name', 'like', '%'. $name.'%')->get();
		$encontrar=Maquina::where('Codigo', 'like', '%'. $name.'%')->get();

		return array('r'=>$name);

	}
}