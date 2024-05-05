<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use App\Models\Nosotros;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class NosotrosController extends Controller
{
    function updateInicioNosotros(Request $request){
        $inicio = Inicio::findOrfail(1);
        
        $inicio->tituloNosotros = $request->tituloNosotros;

        $inicio->save();

        Alert::success('Cambios guardados', 'El titulo de nosotros fue actualizado correctamente');

        return back();  
    }

    /* Agregar un datatable luego */
    function storeMision(Request $request){
        $nosotros = new Nosotros();
        
        $nosotros->titulo = $request->tituloMision;
        $nosotros->descripcion = $request->descripcionMision;

        $nosotros->save();

        Alert::success('Agregado', 'La mision fue agregado correctamente');

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

        Alert::success('Cambios guardados', 'La mision fue actualizada correctamente');

        return back();  
    }

    function destroyNosotros($id){
        $nosotros = Nosotros::findOrFail($id);
        
        $nosotros->delete();

        Alert::success('Eliminado', 'La mision fue eliminada correctamente');

        return back();
    }
}
