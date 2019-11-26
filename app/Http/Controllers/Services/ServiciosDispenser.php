<?php
namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IReportes;
use App\Venta;
use App\Stock;

class ServiciosDispenser extends Controller implements IReportes
{
	public function RDinero($fechaIni, $fechaFin)
	{
		//whereBetween('age', [$ageFrom, $ageTo]);
		$DineroAlmacenado = Venta::whereBetween('fecha', [$fechaIni, $fechaFin])				
            	->orderBy('date', 'desc') 
            	->sum('precio')           	
            	->get();

         return array('r'=>$DineroAlmacenado);
	}

	public function RVentas($fechaIni, $fechaFin)
	{		
		$RProducto = Venta::whereBetween('Fecha', [$fechaIni, $fechaFin])			
				->orderBy('date', 'desc')  
				->groupBy('Producto')            	          	
            	->get();

        $ProductoCantidad = Venta::Producto()
        					->count();
	}

	public function RproductoAlmacenado($producto)
	{
		$ProductoRestantes = Stock::Producto()
				->groupBy()
				->count()           	
            	->get();
	}

}
