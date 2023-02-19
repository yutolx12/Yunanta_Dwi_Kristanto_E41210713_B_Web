<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use PhpParser\Builder\Function_;
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

 

// Route di bawah berfungsi untuk menampilkan view "login" ketika halaman root dari web (/) diakses
Route::get('/', function () {
    return view('login');
});

// Route di bawah berfungi untuk menampilkan string "Hi!" ketika url "localhost:8000/hello" diakses
Route::get('/hello', function () {
    return 'Hi!';
});



// Route di bawah berfungsi untuk menampilkan view "login" ketika url "localhost:8000/login" diakses
Route::get('login', function () {
    return view('login');
});


// Route di bawah ini berfunsi untuk menjalankan class index pada Controller "UserController" 
// ketika url "localhost:8000/user" diakses
Route::get('/user', [UserController::class, 'index']);

// Route di bawah ini berfunsi untuk menjalankan class index pada Controller "PenggunaController" 
// ketika url "localhost:8000/user/{nama}" diakses, nama pada url merupakan nama user 
// yang ingin ditampilkan, 
Route::get('/user/{nama}', [App\Http\Controllers\PenggunaController::class, 'index'])
// melakukan pembatasan input hanya huruf alphabet saja 
->where('nama', '[A-Za-z]+');

// pengaplikasian method get dan post
Route::get('/form', [UserController::class, 'form']);
Route::post('/form/proses', [UserController::class, 'proses']);

// penggunaan route view
Route::view('/laravel', 'welcome');

// penggunaan route redirect
Route::redirect('/dashboard', '/user');

// redirect dengan return code 301
Route::redirect('/redirect301', '/return301', 301);

// permanent redirect yang ketika diakses akan otomatis memberikan return code 301 tanpa dituliskan
Route::permanentRedirect('/permanentredirect', '/return301');

// // Route::get('/user', [PenggunaController::class, 'user']);

// //Route::get('request/post-data', [App\Http\Controllers\RequestController::class, 'viewPostData']);
// //Route::post('request/post-data', [App\Http\Controllers\RequestController::class, 'processPostData']);


// pengimplementasian named route
Route::get('/user/profile', [App\Http\Controllers\PenggunaController::class, 'index'])->name('profile');


Route::get('/user/{id}/profile', function(){

})->name('profile');

$url = route('profile', ['id'=>1, 'photos' => 'yes']);


// pengimplementasian group routing

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        return view('login');
    });

    Route::get('/user/profile', function(){
        return "welcome to profile";
    });
});