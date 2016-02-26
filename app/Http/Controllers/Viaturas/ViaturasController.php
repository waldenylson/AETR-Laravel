<?php namespace App\Http\Controllers\Viaturas;

use App\Http\Requests\StoreViaturasPostRequest;
use App\Models\Viaturas as Viaturas;
use App\Http\Controllers\Controller as Controller;

class ViaturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $viaturas = Viaturas::all();

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
        $viatura = Viaturas::create($request->all());

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
        $viatura = Viaturas::findOrFail($id);

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
        $viatura = Viaturas::findOrFail($id)->update($request->all());

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
        $viatura = Viaturas::findOrFail($id);

        if ($viatura->delete())
        {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }
        else
        {
            return redirect()->back()->with('message', 'Erro ao Tentar Remover o Registro!');
        }
    }
}
