<?php
namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IAlmacenamiento;
use App\Surtir;
use App\Stock;

class ServicioAñadir extends Controller implements IAlmacenamiento
{
	
	public function surtir($producto_id, $maquina_id, $cantidad)
	{

		 $cantidad = Surtir::where('maquina_id', $)
	}
}

?>