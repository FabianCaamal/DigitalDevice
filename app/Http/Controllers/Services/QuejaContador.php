<?php
namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IQuejas;
use App\Queja;


class QuejaContador extends Controller implements IQuejas
{
	public function ContarQueja($usuario_id)
	{
		$quejas = Queja::where('usuario_id', $usuario_id)->sum('detalles');

		return array('hayQuejas'=>'hay quejas');
	}
}