<?php

namespace App\Contracts;

interface IAlmacenamiento
{
	public function surtir($producto_id, $maquina_id, $cantidad);
}


?>