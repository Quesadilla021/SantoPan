<?php

namespace App\Http\Controllers;

use App\Models\imagenes_inicio;
use App\Models\Inicio;
use App\Models\Objetivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ObjetivoController extends Controller
{
    function storeObjetivo(Request $request) {
        $objetivo = new Objetivo();
        $objetivo->objetivo = $request->objetivo;
        $objetivo->save();
        return back();
    }

    function updateInicioObjetivo(Request $request){
        $inicio = Inicio::findOrfail(1);
        $imagenes = imagenes_inicio::findOrfail(1);
        
        $inicio->tituloObjetivos = $request->tituloObjetivo;

        if ($request->hasFile('imagenObjetivo')){
            $img = $request->imagenObjetivo->store('imagenes', 'public');
            $url = Storage::url($img);
            $imagenes->img_objetivo = $url;
        }

        if ($request->hasFile('imagenfondoObjetivo')){
            $img = $request->imagenfondoObjetivo->store('imagenes', 'public');
            $url = Storage::url($img);
            $imagenes->img_fondo_objetivo = $url;
        }

        $inicio->save();
        $imagenes->save();

        return back();  
    }

    function destroyObjetivo($id){
        $objetivo = Objetivo::findOrFail($id);
        $objetivo->delete();

        return back();
    }
}
