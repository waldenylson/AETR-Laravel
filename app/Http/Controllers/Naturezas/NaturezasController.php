<?php namespace App\Http\Controllers\Naturezas;

use App\Http\Requests\StoreNaturezasPostRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Naturezas;
use Illuminate\Support\Facades\Validator;

class NaturezasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $naturezas = Naturezas::all();

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

        $natureza = Naturezas::create($request->all());

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
        $natureza = Naturezas::findOrFail($id);

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
        $naturezas = Naturezas::findOrFail($id)->update($request->all());

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
        $natureza = Naturezas::findOrFail($id);

        if ($natureza->delete()) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
