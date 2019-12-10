<?php
namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IAlmacenamiento;
use App\Surtir;
use App\Stock; 
use App\Venta;

class ServicioAñadir extends Controller implements IAlmacenamiento
{
	
	public function surtir($producto_id, $maquina_id, $cantidad)
	{
		$surtir = new Surtir();
		$surtir->maquina_id = $maquina_id;
		$surtir->producto_id = $producto_id;
		$surtir->cantidad = $cantidad;
		$surtir->save();

		$stock = Stock::where('maquina_id', $maquina_id)->where('producto_id', $producto_id)->first();		
		if($stock == null)
		{
			$stock = new Stock();
			$stock->maquina_id = $maquina_id;
			$stock->producto_id  = $producto_id;
			$stock->cantidad = $cantidad;			
		} else{

			$stock->cantidad = $stock->cantidad + $cantidad;
		}
		
		$stock->save();

		return array('surtir'=>'producto añadido');		
	}

}

?>