<?php

Route::group(['prefix' => 'naturezas', 'namespace' => 'Modules\Naturezas\Http\Controllers'], function()
{
	Route::get('/', 'NaturezasController@index');
});