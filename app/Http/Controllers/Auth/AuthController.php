<?php namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Auth\Guard;
use Illuminate\Http\Request;
use App\Models\UsersHydra;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\AETR\Repositories\UsersHydraRepository;

class AuthController extends Controller
{

    /**
     * @var $usersHydraRepository Instancia da Classe UsersHydraRepository
     */
    protected $usersHydraRepository;

    /**
     * @var Guard $auth
     */
    private $auth;

    /**
     * AuthController constructor.
     * @param Guard $auth
     * @param UserHydraRepository $usersHydraRepository
     */
    public function __construct(Guard $auth, UsersHydraRepository $usersHydraRepository)
    {
        $this->auth = $auth;

        $this->usersHydraRepository = $usersHydraRepository;
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
     *  Mostra o formulário de pesquisa para relacionar o
     *  usuário na base do Hydra.
     */
    public function getCreateUserRelationship()
    {
        $usuarios = $this->usersHydraRepository->getAllUsersFromHydra();

        return view('auth.createRelationship')->with(compact('usuarios'));
    }

    /**
     *  Cria uma referencia na tabela users com base na
     *  tabela de cadastro de usuários do Hydra.
     *
     *  @param $usu_login PK no cadastro do Hydra
     */
    public function postCreateUserRelationship($usu_login = null)
    {
        $usuario = UsersHydra::where('usu_login', $usu_login)->get()->toArray();

        try
        {
            User::create([
                'usu_login' => strtolower($usuario[0]['usu_login']),
                'password'  => bcrypt($usuario[0]['usu_senha'])
            ]);

            return redirect()->back()->with('message', 'Usuário Cadastrado com Sucesso!');

        } catch(Exeption $e)
        {
            return redirect()->back()->withErrors('message', 'Erro ao Tentar Cadastrar o Usuário!\n $e');
        }
    }

    public function postDestroyUserRelationship($usu_login = null)
    {
        $user = User::where('usu_login', $usu_login)->first();

        if (!is_null($user))
        {
            if ($user->delete()) {
                return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
            }
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
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

        $data = [
            'usu_login' => strtolower($request['username']),
            'password'  => md5($request['password'])
        ];

        if ($this->auth->attempt(['usu_login' => $data['usu_login'], 'password' => $data['password']]))
        {
            return redirect()->intended('/');
        }

        return redirect()->back()->withErrors(['message' =>'Usuário ou Senha inválidos!']);
    }


    public function getLogout()
    {
        $this->auth->logout();

        return redirect('/');
    }
}