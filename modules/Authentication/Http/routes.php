<?php

Route::group(['prefix' => 'seguranca', 'namespace' => 'Modules\Authentication\Http\Controllers'], function()
{
	Route::get(''           , ['as' => 'seguranca.index'  , 'uses' => 'AuthenticationController@index']);
	Route::get('login'      , ['as' => 'seguranca.login'  , 'uses' => 'AuthenticationController@getLogin']);
	Route::get('logout'     , ['as' => 'seguranca.logout' , 'uses' => 'AuthenticationController@getLogout']);
	Route::post('login'     , ['as' => 'seguranca.login'  , 'uses' => 'AuthenticationController@postLogin']);
});