<?php namespace App\Http\Controllers;

use App\AETR\Contracts\ViaturasRepository as ViaturasRepositoryContract;
use App\Http\Requests\StoreViaturasPostRequest;
use App\Http\Controllers\Controller;

class ViaturasController extends Controller
{

    /**
     * @var $viaturasRepository Instancia da Classe ViaturasRepository
     */
    protected $viaturasRepository;

    public function __construct(ViaturasRepositoryContract $viaturasRepository)
    {
        $this->viaturasRepository = $viaturasRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $viaturas = $this->viaturasRepository->getAllViaturas();

        return view('viaturas.index')->with(compact('viaturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('viaturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreViaturasPostRequest  $request
     * @return Response
     */
    public function store(StoreViaturasPostRequest $request)
    {
        $viatura = $this->viaturasRepository->storeViatura($request);

        return redirect()->back()->with('message', 'Registro Inserido com Sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $viatura = $this->viaturasRepository->editViatura($id);

        return view('viaturas.edit')->with(compact('viatura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreViaturasPostRequest  $request
     * @param  int  $id
     * @return Response
     */
    public function update(StoreViaturasPostRequest $request, $id)
    {
        $viatura = $this->viaturasRepository->updateViatura($request, $id);

        return redirect()->back()->with('message', 'Registro Atualizado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $result = $this->viaturasRepository->destroyViatura($id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
