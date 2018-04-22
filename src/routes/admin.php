<?php
Route::group(['prefix' => 'admin', 'namespace' => 'Laraflat\Users\Http\Controllers\Admin'] , function () {
    Route::get('/', function () {
        return view('laraflat::admin.admin');
    });
    Route::get('/home', 'HomeController@index');
});



