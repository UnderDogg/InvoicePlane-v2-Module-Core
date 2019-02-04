<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admincp', function () {
    return view('core::admincp.dashboard');
});

Route::get('/ownercp', function () {
    return view('core::ownercp.dashboard');
});