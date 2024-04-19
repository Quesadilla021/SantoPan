<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Inicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventoController extends Controller
{

    function updateInicioEvento(Request $request){
        $inicio = Inicio::findOrfail(1);
        
        $inicio->tituloEventos = $request->tituloEventos;

        $inicio->save();

        return back();  
    }

    function storeEvento(Request $request){
        $evento = new Evento();

        $evento->nombre = $request->tituloEvento;
        $evento->fecha = $request->fechaEvento;
        $evento->descripcion = $request->descripcionEvento;

        if ($request->hasFile('imagenEvento')){
            $img = $request->imagenEvento->store('imagenes', 'public');
            $url = Storage::url($img);
            $evento->imagen = $url;
        }

        $evento->save();
        return back();
    }

    function editEvento($id){
        $evento =  Evento::findOrFail($id);

        return view('Admin.Personalizar_inicio.editarEvento', compact('evento'));
    }

    function updateEvento($id, Request $request){
        $evento =  Evento::findOrFail($id);

        $evento->nombre = $request->tituloEvento;
        $evento->fecha = $request->fechaEvento;
        $evento->descripcion = $request->descripcionEvento;

        if ($request->hasFile('imagenEvento')){
            $img = $request->imagenEvento->store('imagenes', 'public');
            $url = Storage::url($img);
            $evento->imagen = $url;
        }

        $evento->save();
        return back();
    }
}
