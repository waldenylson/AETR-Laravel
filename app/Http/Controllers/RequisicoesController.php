<?php namespace App\Http\Controllers;

use App\AETR\Contracts\NaturezasRepository      as NaturezasRepositoryContract;
use App\AETR\Contracts\RequisicoesRepository    as RequisicoesRepositoryContract;
use App\AETR\Contracts\ViaturasRepository       as ViaturasRepositoryContract;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequisicoesPostRequest;
use App\Support\Validators\CustomValidatorsServiceProvider;
use Illuminate\Support\Facades\Validator;

class RequisicoesController extends Controller
{

    /**
     * @var $viaturasRepository Instancia da Classe ViaturasRepository
     */
    protected $viaturasRepository, $naturezasRepository, $requisicoesRepository;

    public function __construct(ViaturasRepositoryContract      $viaturasRepository,
                                NaturezasRepositoryContract     $naturezasRepository,
                                RequisicoesRepositoryContract   $requisicoesRepository)
    {
        $this->viaturasRepository       = $viaturasRepository;
        $this->naturezasRepository      = $naturezasRepository;
        $this->requisicoesRepository    = $requisicoesRepository;
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
    public function create()
    {
        $viaturas  = $this->viaturasRepository->getAllViaturasForSelect();
        $naturezas = $this->naturezasRepository->getAllNaturezasForSelect();

        return view('requisicoes.create')->with(compact('viaturas'))->with(compact('naturezas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequisicoesPostRequest $request)
    {
        $requisicao = $this->requisicoesRepository->storeRequisicao($request);

        return redirect()->back()->with('message', 'Registro Inserido com Sucesso!');
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
        $requisicao = $this->requisicoesRepository->updateRequisicao($request, $id);

        return redirect()->back()->with('message', 'Registro Atualizado com Sucesso!');
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
