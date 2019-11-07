<?php

namespace App\Contracts;

interface IReportes
{
	
	///Operacion aritmetica de suma
	public function RDinero($fechaIni, $fechaFin);

	public function RVentas($productos);

	public function RproductoAlmacenado($producto, $cantidad);
}

?>