<?php
Route::group(['prefix' => 'guest' , 'namespace' => 'Laraflat\Users\Http\Controllers\Front\Guest'] , function () {
    Route::get('/', function () {
        return view('laraflat::guest.guest');
    });
    Route::get('/home', 'HomeController@index');
});



