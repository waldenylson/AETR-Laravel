<?php namespace App\Http\Controllers\Naturezas;

use App\AETR\Repositories\NaturezasRepository;
use App\Http\Requests\StoreNaturezasPostRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class NaturezasController extends Controller
{

    /**
     * @var $naturezasRepository Instancia da Classe NaturezasRepository
     */
    protected $naturezasRepository;

    public function __construct(NaturezasRepository $naturezasRepository)
    {
        $this->naturezasRepository = $naturezasRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $naturezas = $this->naturezasRepository->getAllNaturezas();

        return view('naturezas.index')->with(compact('naturezas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('naturezas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNaturezasPostRequest $request)
    {
        $validator = Validator::make($request->all(), $this->rules, $this->messages);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $natureza = $this->naturezasRepository->storeNatureza($request);

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
        $natureza = $this->naturezasRepository->editNatureza($id);

        return view('naturezas.edit')->with(compact('natureza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreNaturezasPostRequest $request, $id)
    {
        $natureza = $this->naturezasRepository->updateNatureza($request, $id);

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
        $result = $this->naturezasRepository->destroyNatureza($id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
