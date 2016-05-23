<?php namespace App\Http\Controllers;

use App\Http\Requests\StoreEquipeServicoPostRequest;
use App\AETR\Contracts\EquipeServicoRepository as EquipeServicoRepositoryContract;
use App\Http\Controllers\Controller;

class EquipeServicoController extends Controller
{
    /**
     * @var $equipeRepository Instancia da Classe EquipeServicoRepository
     */
    protected $equipeRepository;

    public function __construct(EquipeServicoRepositoryContract $equipeRepository)
    {
        $this->equipeRepository = $equipeRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = $this->equipeRepository->getAllRecords();

        return view('equipe.index')->with(compact('equipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEquipeServicoPostRequest $request)
    {
        $equipe = $this->equipeRepository->storeEquipeServico($request);

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
        $equipe = $this->equipeRepository->editEquipeServico($id);

        return view('equipe.edit')->with(compact('equipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEquipeServicoPostRequest $request, $id)
    {
        $equipe = $this->equipeRepository->updateEquipeServico($request, $id);

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
        $result = $this->equipeRepository->destroyEquipeServico($id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
