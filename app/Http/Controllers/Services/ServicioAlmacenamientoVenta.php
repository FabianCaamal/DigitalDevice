<?php  
namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IVenta;
use Illuminate\Support\Facades\DB;
use App\Venta;
use App\Stock;
use App\Maquina;
use App\Producto;

class ServicioAlmacenamientoVenta extends Controller implements IVenta
{
	public function dineroVenta($producto_id, $maquina_id)
	{
		$venta = new Venta();
		$venta->producto_id = $producto_id;
		$venta->maquina_id = $maquina_id;
		 

		$stock = Stock::where('maquina_id', $maquina_id)->where('producto_id', $producto_id)->first();
		
		if ($stock == null) 
		{
			throw new Exception("No hay productos disponibles", 500);			

	}else{
		$stock->cantidad = $stock->cantidad - 1;

		$maquina = Maquina::find($maquina_id);
		$producto = Producto::find($producto_id);
		$maquina->dineroAlmacenado = $maquina->dineroAlmacenado + $producto->precio;
	}
		$stock->save();
		$maquina->save();
		$venta->save();

		return array('r' => 'venta realizada');
		}

}
