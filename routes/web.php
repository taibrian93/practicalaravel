<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('dashboard', function (){
    return view('dashboard.index');
});

Auth::routes();

// Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'dashboard'], function () {
//     Route::get('home', 'DashboardController@home');
// });

// Route::middleware('auth')->namespace('Dashboard')->group(['prefix' => 'dashboard'], function () {
//     Route::get('home', 'DashboardController@home');
// });

// Route::group(['middleware' => ['mantenimiento']], function () {

// });




