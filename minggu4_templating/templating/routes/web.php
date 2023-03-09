<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;

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
// Route::get('/admin', function () {
//     return view('backend.layouts.dashboard');
// });