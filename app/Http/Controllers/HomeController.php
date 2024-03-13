<?php

namespace App\Http\Controllers;

use App\Models\imagenes_inicio;
use App\Models\Inicio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $inicio = Inicio::findOrFail(1);
        $imagenPrincipal = imagenes_inicio::findOrFail(1);
        return view('Admin.index', compact('inicio', 'imagenPrincipal'));
    }
}
