<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class platinoController extends Controller
{

	public function form(){
		return view('platino.platino');
	}
}


?>