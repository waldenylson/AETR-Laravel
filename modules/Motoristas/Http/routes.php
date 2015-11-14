<?php

Route::group(['prefix' => 'motoristas', 'namespace' => 'Modules\Motoristas\Http\Controllers'], function()
{
	Route::get('/', 'MotoristasController@index');
});