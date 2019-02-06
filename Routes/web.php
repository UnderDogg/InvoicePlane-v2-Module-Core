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

Route::prefix('admincp')->middleware('role:owner|superadministrator|administrator')->group(function () {
  Route::get('/', 'DashboardController@index');
  Route::get('/dashboard', 'DashboardController@dashboard')->name('admincp.dashboard');
  Route::resource('/staff', 'StaffController');
  Route::resource('/permissions', 'PermissionsController', ['except' => 'destroy']);
  Route::resource('/roles', 'RolesController', ['except' => 'destroy']);
});