<?php namespace Modules\authentication\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Pingpong\Modules\Routing\Controller;

class authenticationController extends Controller {

	private $rules = [
		'username' => 'required',
		'password' => 'required'
	];

	private $messages = [
		'username.required' => 'Campo Usuário deve ser Preenchido!',
		'password.required' => 'Campo Senha deve ser Preenchido!'
	];

	/**
	 *  Show the form for user login
	 *
	 */
	public function index()
	{
		return redirect( route ('seguranca.login'));
	}



	public function getLogin()
	{
		return view('authentication::login');
	}

	public function postLogin(Request $request)
	{
		$validator = Validator::make($request->all(), $this->rules, $this->messages);

		if($validator->fails())
		{
			return redirect()->back()->withInput()->withErrors($validator);
		}
	}


	public function logout()
	{
		//
	}
	
}