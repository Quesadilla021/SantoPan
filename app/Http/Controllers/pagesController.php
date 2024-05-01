<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Evento;
use App\Models\Galeria;
use App\Models\imagenes_inicio;
use App\Models\Imagenes_ubicacion;
use App\Models\Inicio;
use App\Models\Nosotros;
use App\Models\Objetivo;
use App\Models\Personal;
use App\Models\Platillo;
use App\Models\Reservaciones;
use App\Models\Ubicacion;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    function index() {
        $inicio = Inicio::findOrFail(1);
        $imagenes = imagenes_inicio::findOrFail(1);
        $objetivos = Objetivo::all();
        $nosotros = Nosotros::all();
        $platillos = Platillo::all();
        $categorias = Categoria::all();
        $eventos = Evento::all();
        $personal = Personal::all();
        $galeria = Galeria::all();
        $ubicaciones = Ubicacion::all();
        $imagenesUbi = Imagenes_ubicacion::all();
        return view('index', compact('inicio', 'imagenes', 'objetivos', 
        'nosotros', 'platillos', 'categorias', 
        'eventos', 'personal', 'galeria',
        'ubicaciones', 'imagenesUbi'));
    }

    ////////Admin///////
    function indexInicio(){
        $inicio = Inicio::findOrFail(1);
        $imagenPrincipal = imagenes_inicio::findOrFail(1);
        return view('Admin.Personalizar_inicio.inicio', compact('inicio', 'imagenPrincipal'));
    }

    function indexMenu() {
        $platillos = Platillo::all();
        $categorias = Categoria::all();
        return view('Admin.Menu.menu', compact('platillos', 'categorias'));
    }

    function indexReservaciones(){
        $reservaciones = Reservaciones::all();
        return view('Admin.Reservaciones.reservaciones', compact('reservaciones'));
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
 
    function indexEventos(){
        $inicio = Inicio::findOrFail(1);
        $eventos = Evento::all();
        return view('Admin.Personalizar_inicio.eventos', compact('inicio', 'eventos'));
    }

    function indexCategorias() {
        $categorias = Categoria::all();
        return view('Admin.Menu.categorias', compact('categorias'));
    }

    function indexUbicacion(){
        $ubicaciones = Ubicacion::all();
        return view('Admin.Ubicaciones.ubicaciones', compact('ubicaciones'));
    }

    function indexPersonal(){
        $inicio = Inicio::findOrFail(1);
        $personal = Personal::all();
        return view('Admin.Personalizar_inicio.personal', compact('inicio', 'personal'));
    }

    function indexGaleria(){
        $inicio = Inicio::findOrFail(1);
        $galeria = Galeria::all();
        return view('Admin.Personalizar_inicio.galeria', compact('inicio', 'galeria'));
    }
    
}
