<?php

namespace App\Http\Controllers;

use App\Models\imagenes_inicio;
use App\Models\Inicio;
use App\Models\Objetivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ObjetivoController extends Controller
{
    function storeObjetivo(Request $request) {
        $objetivo = new Objetivo();
        $objetivo->objetivo = $request->objetivo;
        $objetivo->save();

        Alert::success('Agregado', 'El objetivo fue agregado correctamente');

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

        Alert::success('Cambios guardados', 'El titulo e imagenes de objetivos fue actualizado correctamente');

        return back();  
    }

    function destroyObjetivo($id){
        $objetivo = Objetivo::findOrFail($id);
        $objetivo->delete();

        Alert::success('Agregado', 'El objetivo fue eliminado correctamente');

        return back();
    }
}
