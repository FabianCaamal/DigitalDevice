<?php
namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IReportes;
use App\Venta;
use App\Stock;

class generarReporte extends Controller, implements IReportes
{
	public function RDinero($fechaIni, $fechaFin)
	{
		//whereBetween('age', [$ageFrom, $ageTo]);
		$DineroAlmacenado = Venta::whereBetween('Fecha', [$fechaIni, $fechaFin])				
            	->orderBy('date', 'desc') 
            	->count('Precio')           	
            	->get();
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
