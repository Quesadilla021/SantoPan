<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use App\Models\Nosotros;
use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    function updateInicioNosotros(Request $request){
        $inicio = Inicio::findOrfail(1);
        
        $inicio->tituloNosotros = $request->tituloNosotros;

        $inicio->save();

        return back();  
    }

    /* Agregar un datatable luego */
    function storeMision(Request $request){
        $nosotros = new Nosotros();
        
        $nosotros->titulo = $request->tituloMision;
        $nosotros->descripcion = $request->descripcionMision;

        $nosotros->save();

        return back();  
    }

    function editNosotros($id) {
        $nosotros = Nosotros::findOrFail($id);

        return view('Admin.Personalizar_inicio.editarNosotros', compact('nosotros'));
    }

    function updateNosotros($id, Request $request){
        $nosotros = Nosotros::findOrFail($id);
        
        $nosotros->titulo = $request->tituloMision;
        $nosotros->descripcion = $request->descripcionMision;

        $nosotros->save();

        return back();  
    }

    function destroyNosotros($id){
        $nosotros = Nosotros::findOrFail($id);
        
        $nosotros->delete();

        return back();
    }
}
