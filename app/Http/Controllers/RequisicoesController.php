<?php

namespace App\Http\Controllers;

use App\AETR\Repositories\Contracts\INaturezasRepository;
use Illuminate\Http\Request;
use App\AETR\Repositories\Contracts\IViaturasRepository;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RequisicoesController extends Controller
{

    /**
     * @var $viaturasRepository Instancia da Classe ViaturasRepository
     */
    protected $viaturasRepository, $naturezasRepository;

    public function __construct(IViaturasRepository $viaturasRepository, INaturezasRepository $naturezasRepository)
    {
        $this->viaturasRepository  = $viaturasRepository;
        $this->naturezasRepository = $naturezasRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "lista das fichas";
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
