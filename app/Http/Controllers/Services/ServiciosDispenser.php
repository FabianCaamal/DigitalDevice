<?php
namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IReportes;
use Illuminate\Support\Facades\DB;
use App\Venta;
use App\Stock;

class ServiciosDispenser extends Controller implements IReportes
{
	public function RDinero($fechaIni, $fechaFin)
	{
		//whereBetween('age', [$ageFrom, $ageTo]);
		$DineroAlmacenado = Venta::whereBetween('fecha', [$fechaIni, $fechaFin])		
            	->orderBy('date', 'desc') 
            	->sum('precio');
            	

         return array('r'=>$DineroAlmacenado);
	}

	public function RVentas($fechaIni, $fechaFin)
	{		
		$RProducto = Venta::whereBetween('fecha', [$fechaIni, $fechaFin])
				->count();

			return array('r'=>$RProducto);
	}

	public function Contador($producto_id)
	{
		$existen = Stock::where('producto_id', $producto_id)->count('cantidad');

		return array('quedan'=>'si queda');
	}

}
