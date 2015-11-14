<?php namespace Modules\Despachantes\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class DespachantesController extends Controller {
	
	public function index()
	{
		return view('despachantes::index');
	}
	
}