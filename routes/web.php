<?php

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

Route::get('/', function () {

    $articulos = Articulo::all();
    return view('welcome')->with('articulos', $articulos);
});

Route::resource('articulos', 'App\Http\Controllers\ArticuloController');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->get('/dashboard', function () {
    return view('dashboard');
});


