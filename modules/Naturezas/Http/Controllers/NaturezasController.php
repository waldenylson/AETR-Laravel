<?php namespace Modules\Naturezas\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class NaturezasController extends Controller {
	
	public function index()
	{
		return view('naturezas::index');
	}
	
}