<?php



Route::get('/', ['middleware' => 'auth', 'uses' => 'HomeController@index']);

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