<?php

namespace App\Contracts;

interface IAlmacenamiento
{
	public function Surtir($producto_id, $maquina_id, $cantidad);

}


?>