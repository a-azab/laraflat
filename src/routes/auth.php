<?php
Route::group(['prefix' => 'auth','namespace' => 'Laraflat\Users\Http\Controllers\Front\Auth' , 'middleware' => 'auth'] , function () {
    Route::get('/', function () {
        return view('laraflat::auth.auth');
    });
    Route::get('/home', 'HomeController@index');
});



