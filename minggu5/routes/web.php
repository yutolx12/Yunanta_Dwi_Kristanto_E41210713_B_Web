<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['namespace' => 'Frontend'], function(){
//     Route::resource('home', 'HomeController');
// });
// Route::resource('home', 'HomeController');

Route::resource('/home', HomeController::class);

Route::resource('/admin', DashboardController::class);

Route::get('/session/create', [SessionController::class, 'create']);

Route::get('/session/show', [SessionController::class, 'show']);

Route::get('/session/delete', [SessionController::class, 'delete']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);

Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/cobaerror', [CobaController::class, 'index']);


// Route::get('/admin', function () {
//     return view('backend.layouts.dashboard');
// });