<?php

Route::get('/', ['middleware' => 'auth', 'uses' => 'HomeController@index']);

Route::get('home', ['as' => 'home', function()
{
    return redirect('/');
}]);


Route::group(['prefix' => 'seguranca', 'namespace' => 'Auth'], function()
{
    Route::get(''                    , ['as' => 'seguranca.relacoes'       , 'uses' => 'AuthController@showAllUserRelationship']);
    Route::get('relacionar'          , ['as' => 'seguranca.relacionar'     , 'uses' => 'AuthController@getCreateUserRelationship']);
    Route::get('{id}/criarRelacao'   , ['as' => 'seguranca.makeRelacao'    , 'uses' => 'AuthController@postCreateUserRelationship']);
    Route::get('{id}/excluirRelacao' , ['as' => 'seguranca.destroyRelacao' , 'uses' => 'AuthController@postDestroyUserRelationship']);

    Route::get(''       , ['as' => 'seguranca.index' , 'uses' => 'AuthController@index']);
    Route::get('login'  , ['as' => 'seguranca.login' , 'uses' => 'AuthController@getLogin']);
    Route::get('logout' , ['as' => 'seguranca.logout', 'uses' => 'AuthController@getLogout']);
    Route::post('login' , ['as' => 'seguranca.login' , 'uses' => 'AuthController@postLogin']);
});

/**
 *   Configuração das Rotas
 *
 *   index   - Lista Viaturas Cadastradas
 *   create  - Carrega o Formulário para Cadastrar Viaturas
 *   store   - Persiste os Dados no Banco
 *   edit    - Carrega o Formulário com os Dados Cadastrados para edição
 *   update  - Persiste os Dados Editados no Banco
 *   destroy - Remove um Registro do Banco de Dados
 */

Route::group(['prefix' => 'viaturas', 'middleware' => 'auth'], function()
{
    Route::get(''                , ['as' => 'viaturas.index'   , 'uses' => 'ViaturasController@index']);
    Route::get('cadastrar'       , ['as' => 'viaturas.create'  , 'uses' => 'ViaturasController@create']);
    Route::post('salvar'         , ['as' => 'viaturas.store'   , 'uses' => 'ViaturasController@store']);
    Route::get('{id}/editar'     , ['as' => 'viaturas.edit'    , 'uses' => 'ViaturasController@edit']);
    Route::post('{id}/atualizar' , ['as' => 'viaturas.update'  , 'uses' => 'ViaturasController@update']);
    Route::get('{id}/remover'    , ['as' => 'viaturas.destroy' , 'uses' => 'ViaturasController@destroy']);
});


/**
 *   Configuração das Rotas
 *
 *   index   - Lista Naturezas Cadastradas
 *   create  - Carrega o Formulário para Cadastrar Naturezas
 *   store   - Persiste os Dados no Banco
 *   edit    - Carrega o Formulário com os Dados Cadastrados para edição
 *   update  - Persiste os Dados Editados no Banco
 *   destroy - Remove um Registro do Banco de Dados
 */

Route::group(['prefix' => 'naturezas', 'middleware' => 'auth'], function()
{
    Route::get(''                , ['as' => 'naturezas.index'   , 'uses' => 'NaturezasController@index']);
    Route::get('cadastrar'       , ['as' => 'naturezas.create'  , 'uses' => 'NaturezasController@create']);
    Route::post('salvar'         , ['as' => 'naturezas.store'   , 'uses' => 'NaturezasController@store']);
    Route::get('{id}/editar'     , ['as' => 'naturezas.edit'    , 'uses' => 'NaturezasController@edit']);
    Route::post('{id}/atualizar' , ['as' => 'naturezas.update'  , 'uses' => 'NaturezasController@update']);
    Route::get('{id}/remover'    , ['as' => 'naturezas.destroy' , 'uses' => 'NaturezasController@destroy']);
});


Route::group(['prefix' => 'requisicao', 'middleware' => 'auth'], function()
{
    Route::get(''                , ['as' => 'requisicoes.index'   , 'uses' => 'RequisicoesController@index']);
    Route::get('cadastrar'       , ['as' => 'requisicoes.create'  , 'uses' => 'RequisicoesController@create']);
    Route::post('salvar'         , ['as' => 'requisicoes.store'   , 'uses' => 'RequisicoesController@store']);
    Route::get('{id}/editar'     , ['as' => 'requisicoes.edit'    , 'uses' => 'RequisicoesController@edit']);
    Route::post('{id}/atualizar' , ['as' => 'requisicoes.update'  , 'uses' => 'RequisicoesController@update']);
    Route::get('{id}/remover'    , ['as' => 'requisicoes.destroy' , 'uses' => 'RequisicoesController@destroy']);
});

Route::group(['prefix' => 'equipeservico', 'middleware' => 'auth'], function()
{
    Route::get(''                   , ['as' => 'equipe.index'         , 'uses' => 'EquipeServicoController@index']);
    Route::get('cadastrar'          , ['as' => 'equipe.create'        , 'uses' => 'EquipeServicoController@create']);
    Route::post('salvar'            , ['as' => 'equipe.store'         , 'uses' => 'EquipeServicoController@store']);
    Route::get('{id}/editar'        , ['as' => 'equipe.edit'          , 'uses' => 'EquipeServicoController@edit']);
    Route::post('{id}/atualizar'    , ['as' => 'equipe.update'        , 'uses' => 'EquipeServicoController@update']);
    Route::get('{id}/updateStatus'  , ['as' => 'equipe.updateStatus'  , 'uses' => 'EquipeServicoController@updateStatus']);
    Route::get('{id}/remover'       , ['as' => 'equipe.destroy'       , 'uses' => 'EquipeServicoController@destroy']);
});