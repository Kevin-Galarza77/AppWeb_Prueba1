<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Models\Articulo;
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

Route::get('/', [Controller::class,'index'])->name('pagInicio');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('articulos', ArticuloController::class)->middleware(['auth']);

