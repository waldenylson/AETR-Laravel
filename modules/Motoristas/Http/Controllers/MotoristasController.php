<?php namespace Modules\Motoristas\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class MotoristasController extends Controller {
	
	public function index()
	{
		return view('motoristas::index');
	}
	
}