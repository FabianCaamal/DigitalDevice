<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class todoController extends Controller
{

	public function suscripcion(){
		return view('extra.suscripcion');
	}

	public function admi(){
		return view('extra.admi');
	}

	public function invitado(){
		return view('extra.invitado');
	}
}


?>