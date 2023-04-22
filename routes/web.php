<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/coliseo', function () {
    return view('vistaColiseo');
});

Route::get('/disney', function () {
    return view('vistaDisneyland');
});

Route::get('/montefuji', function () {
    return view('vistaMontefuji');
});

Route::get('/muralla', function () {
    return view('vistaMuralla');
});

Route::get('/tajmahal', function () {
    return view('vistaTajmahal');
});

Route::get('/vaticano', function () {
    return view('vistaVaticano');
});
