<?php

namespace App\Contracts;

interface IReportes
{ 	
	///Operacion aritmetica de suma
	public function RDinero($fechaIni, $fechaFin);

	public function RVentas($fechaIni, $fechaFin);

	public function RproductoAlmacenado($producto, $cantidad);
}

?>