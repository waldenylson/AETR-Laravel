<?php namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use App\User as User;

class AuthController extends Controller
{

    private $rules = [
        'username' => 'required',
        'password' => 'required'
    ];

    private $messages = [
        'username.required' => 'Campo Usuário deve ser Preenchido!',
        'password.required' => 'Campo Senha deve ser Preenchido!'
    ];


    /**
     * @var Guard $auth
     */
    private $auth;


    public function __construct(Guard $auth)
    {

        $this->auth = $auth;
    }

    /**
     *  Show the form for user login
     *
     */
    public function index()
    {
        return redirect(route('seguranca.login'));
    }


    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules, $this->messages);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $usuario = User::where(['usu_login' => $request['username'], 'usu_senha' => $request['password']])->first();

        if(is_null($usuario))
        {
            return redirect()->back()->withErrors(['message' =>'Usuário ou Senha inválidos!']);
        }

        Auth::login($usuario);

        return redirect()->intended('/');
    }


    public function getLogout()
    {
        Auth::logout();
    }

}