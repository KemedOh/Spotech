<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;

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


Route::get('/spotech', [HaiController::class, 'index']);
Route::get('/shap{hp}/cek', [HaiController::class, 'Shap']);
Route::get('/', function () {
    return view('welcome');
});
