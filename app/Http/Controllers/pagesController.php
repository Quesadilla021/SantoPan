<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\imagenes_inicio;
use App\Models\Inicio;
use App\Models\Nosotros;
use App\Models\Objetivo;
use App\Models\Platillo;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    function index() {
        $inicio = Inicio::findOrFail(1);
        $imagenes = imagenes_inicio::findOrFail(1);
        $objetivos = Objetivo::all();
        $nosotros = Nosotros::all();
        return view('index', compact('inicio', 'imagenes', 'objetivos', 'nosotros'));
    }

    ////////Admin///////
    function indexMenu() {
        $platillos = Platillo::all();
        $categorias = Categoria::all();
        return view('Admin.Menu.menu', compact('platillos', 'categorias'));
    }

    function indexReservaciones(){
        return view('Admin.Reservaciones.reservaciones');
    }

    function indexObjetivos(){
        $inicio = Inicio::findOrFail(1);
        $objetivos = Objetivo::all();
        $imagenes = imagenes_inicio::findOrFail(1);
        return view('Admin.Personalizar_inicio.objetivos', compact('inicio', 'objetivos', 'imagenes'));
    }

    function indexNosotros(){
        $inicio = Inicio::findOrFail(1);
        $misiones = Nosotros::all();
        return view('Admin.Personalizar_inicio.nosotros', compact('inicio', 'misiones'));
    }

    function indexCategorias() {
        $categorias = Categoria::all();
        return view('Admin.Menu.categorias', compact('categorias'));

        
    }
}
