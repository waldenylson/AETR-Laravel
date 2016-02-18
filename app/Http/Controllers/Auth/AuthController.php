<?php namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller
{

    /**
     * @var Guard $auth
     */
    private $auth;

    /**
     * AuthController constructor.
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    
    private $rules = [
        'username' => 'required',
        'password' => 'required'
    ];

    private $messages = [
        'username.required' => 'Campo Usuário deve ser Preenchido!',
        'password.required' => 'Campo Senha deve ser Preenchido!'
    ];

    /**
     *  Mostra o Formulário para consulta/relacionamento
     *  dos usuarios no Hydra e no banco local do sistema.
     */
    public function getCreateUserRelationship()
    {
        $viaturas = Viaturas::paginate(5);

        return view('auth.CreateUserRelationship')->with(compact('viaturas'));
    }


    /**
     *  Cria uma referencia na tabela users com base na
     *  tabela de cadastro de usuários do Hydra.
     *
     *  @param $usu_login PK no cadastro do Hydra
     */
    public function postCreateUserRelationship($usu_login)
    {

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

        if ($this->auth->attempt(['usu_login' => $request['username'], 'password' => md5($request['password'])])) {
            // Authentication passed...
            return redirect()->intended('/');
        } else {

        }
    }


    public function getLogout()
    {
        Auth::logout();
    }

}