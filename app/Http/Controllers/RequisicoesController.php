<?php namespace App\Http\Controllers;

use App\AETR\Contracts\NaturezasRepository      as NaturezasRepositoryContract;
use App\AETR\Contracts\RequisicoesRepository    as RequisicoesRepositoryContract;
use App\AETR\Contracts\ViaturasRepository       as ViaturasRepositoryContract;
use App\AETR\Contracts\EquipeServicoRepository  as EquipeServicoRepositoryContract;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequisicoesPostRequest;

class RequisicoesController extends Controller
{

    /**
     * @var $viaturasRepository Instancia da Classe ViaturasRepository
     */
    protected $viaturasRepository, $naturezasRepository, $requisicoesRepository, $equipeRepository;

    /**
     * RequisicoesController constructor.
     * @param ViaturasRepositoryContract $viaturasRepository
     * @param NaturezasRepositoryContract $naturezasRepository
     * @param RequisicoesRepositoryContract $requisicoesRepository
     * @param EquipeServicoRepositoryContract $equipeRepository
     */
    public function __construct(ViaturasRepositoryContract       $viaturasRepository,
                                NaturezasRepositoryContract      $naturezasRepository,
                                RequisicoesRepositoryContract    $requisicoesRepository,
                                EquipeServicoRepositoryContract  $equipeRepository)
    {
        $this->viaturasRepository       = $viaturasRepository;
        $this->naturezasRepository      = $naturezasRepository;
        $this->requisicoesRepository    = $requisicoesRepository;
        $this->equipeRepository         = $equipeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requisicoes = $this->requisicoesRepository->getAllRecords();

        return view('requisicoes.index')->with(compact('requisicoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($viatura_id = null)
    {
        $viaturas        = $this->viaturasRepository->getAllViaturasForSelect();
        $naturezas       = $this->naturezasRepository->getAllNaturezasForSelect();
        $equipe          = $this->equipeRepository->getAllRecordsOpen();
        $ultimoOdometro  = $this->requisicoesRepository->getUltimoOdometroViatura($viatura_id);

        //dd($ultimoOdometro);

        return view('requisicoes.create')->with(compact('viaturas'))
                                         ->with(compact('naturezas'))
                                         ->with(compact('equipe'))
                                         ->with(compact('ultimoOdometro'))
                                         ->with(compact('viatura_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequisicoesPostRequest $request)
    {
        dd($request);

        $result = $this->requisicoesRepository->storeRequisicao($request);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Inserido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Inserir o Registro!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requisicao = $this->requisicoesRepository->editRequisicao($id);

        return view('requisicoes.edit')->with(compact('requisicao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequisicoesPostRequest $request, $id)
    {
        $result = $this->requisicoesRepository->updateRequisicao($request, $id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Atualizado com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Atualizar o Registro!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->requisicoesRepository->destroyRequisicao($id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
