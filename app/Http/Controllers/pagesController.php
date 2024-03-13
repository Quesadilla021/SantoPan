<?php

namespace App\Http\Controllers;

use App\Models\imagenes_inicio;
use App\Models\Inicio;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    function index() {
        $inicio = Inicio::findOrFail(1);
        $imagenes = imagenes_inicio::findOrFail(1);
        return view('index', compact('inicio', 'imagenes'));
    }

    ////////Admin///////
    function indexMenu() {
        return view('Admin.Menu.menu');
    }

    function indexReservaciones(){
        return view('Admin.Reservaciones.reservaciones');
    }

    function indexObjetivos(){
        return view('Admin.Personalizar_inicio.objetivos');
    }

    function indexNosotros(){
        return view('Admin.Personalizar_inicio.nosotros');
    }
}
