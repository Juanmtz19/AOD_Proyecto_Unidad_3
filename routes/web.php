<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuitarController;
use App\Http\Controllers\SaxophoneController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\ContratoController;
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
    return view('welcome');
});

Route::resources([
    'guitar'=> GuitarController::class,
]);

Route::resources([
    'saxophone' => SaxophoneController::class,
]);

Route::resources([
    'keyboard' => KeyboardController::class,
]);

Route::resources([
    'contrato' => ContratoController::class,
]);