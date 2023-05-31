<?php

use Illuminate\Support\Facades\Route;

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



<<<<<<< HEAD
Route::get('/connexion', function () {
    return view('connexion');
});

Route::get('/', function () {
    return view('homePage');
});
=======
Route::get('/inscription', function () {
    return view('inscription');
});


Route::get('/test', function () {
    return view('test');
});
>>>>>>> a39e0fe08a5c9311085dd4fa4cd13f6762429f14
