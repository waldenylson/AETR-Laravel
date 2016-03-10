<?php

Route::get('/', ['middleware' => 'auth', 'uses' => 'HomeController@index']);

Route::get('home', ['as' => 'home', function()
{
    return redirect('/');
}]);


Route::group(['prefix' => 'seguranca', 'namespace' => 'Auth'], function()
{
    Route::get('relacionar', ['as' => 'seguranca.relacionar', 'uses' => 'AuthController@getCreateUserRelationship']);
    Route::get('{id}/criarRelacao', ['as' => 'seguranca.makeRelacao', 'uses' => 'AuthController@postCreateUserRelationship']);
    Route::get('{id}/excluirRelacao', ['as' => 'seguranca.destroyRelacao', 'uses' => 'AuthController@postDestroyUserRelationship']);
});


Route::group(['prefix' => 'seguranca', 'namespace' => 'Auth'], function()
{
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

Route::group(['prefix' => 'viaturas', 'namespace' => 'Viaturas', 'middleware' => 'auth'], function()
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

Route::group(['prefix' => 'naturezas', 'namespace' => 'Naturezas', 'middleware' => 'auth'], function()
{
    Route::get(''                , ['as' => 'naturezas.index'   , 'uses' => 'NaturezasController@index']);
    Route::get('cadastrar'       , ['as' => 'naturezas.create'  , 'uses' => 'NaturezasController@create']);
    Route::post('salvar'         , ['as' => 'naturezas.store'   , 'uses' => 'NaturezasController@store']);
    Route::get('{id}/editar'     , ['as' => 'naturezas.edit'    , 'uses' => 'NaturezasController@edit']);
    Route::post('{id}/atualizar' , ['as' => 'naturezas.update'  , 'uses' => 'NaturezasController@update']);
    Route::get('{id}/remover'    , ['as' => 'naturezas.destroy' , 'uses' => 'NaturezasController@destroy']);
});