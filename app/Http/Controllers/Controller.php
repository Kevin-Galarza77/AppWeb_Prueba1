<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {

        $articulos = Articulo::all();

        return view('welcome')->with('articulos', $articulos);
    }

    public function dashboard() {
        return view('dashboard');
    }
}
