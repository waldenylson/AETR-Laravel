<?php



Route::get('/', 'HomeController@index');
//Route::get('/', ['middleware' => 'auth', 'uses' => 'HomeController@index']);

Route::get('teste', function(){
    return \Illuminate\Support\Facades\Auth::user();
});

Route::get('home', ['as' => 'home', function()
{
    return redirect('/');
}]);

Route::group(['prefix' => 'seguranca', 'namespace' => 'Auth'], function()
{
    Route::get(''           , ['as' => 'seguranca.index'  , 'uses' => 'AuthController@index']);
    Route::get('login'      , ['as' => 'seguranca.login'  , 'uses' => 'AuthController@getLogin']);
    Route::get('logout'     , ['as' => 'seguranca.logout' , 'uses' => 'AuthController@getLogout']);
    Route::post('login'     , ['as' => 'seguranca.login'  , 'uses' => 'AuthController@postLogin']);
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

Route::group(['prefix' => 'viaturas', 'namespace' => 'Viaturas'], function()
{
    Route::get(''                , ['as' => 'viaturas.index'   , 'uses' => 'ViaturasController@index']);
    Route::get('cadastrar'       , ['as' => 'viaturas.create'  , 'uses' => 'ViaturasController@create']);
    Route::post('salvar'         , ['as' => 'viaturas.store'   , 'uses' => 'ViaturasController@store']);
    Route::get('{id}/editar'     , ['as' => 'viaturas.edit'    , 'uses' => 'ViaturasController@edit']);
    Route::post('{id}/atualizar' , ['as' => 'viaturas.update'  , 'uses' => 'ViaturasController@update']);
    Route::get('{id}/remover'    , ['as' => 'viaturas.destroy' , 'uses' => 'ViaturasController@destroy']);
});