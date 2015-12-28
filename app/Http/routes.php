<?php

Route::get('/', 'HomeController@index');
Route::get('home', ['as' => 'home', function()
{
    return redirect('/');
}]);