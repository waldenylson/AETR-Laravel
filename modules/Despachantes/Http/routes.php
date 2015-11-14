<?php

Route::group(['prefix' => 'despachantes', 'namespace' => 'Modules\Despachantes\Http\Controllers'], function()
{
	Route::get('/', 'DespachantesController@index');
});