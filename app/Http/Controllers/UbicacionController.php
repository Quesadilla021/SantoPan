<?php

namespace App\Http\Controllers;

use App\Models\Imagenes_ubicacion;
use App\Models\Ubicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class UbicacionController extends Controller
{
    function storeUbicacion(Request $request){
        $ubicacion = new Ubicacion();

        $ubicacion->nombre = $request->nombre;

        $ubicacion->save();
        
        Alert::success('Agregado', 'La ubicacion fue agregada correctamente');
        
        return back();
    }

    function indexAgregarImgsZonas($id){
        $ubicacion = Ubicacion::findOrFail($id);

        return view('Admin.Ubicaciones.imgsUbicaciones', compact('ubicacion'));
    }

    function agregarFotosUbicacion($id, Request $request){
        $imgUbi = new Imagenes_ubicacion();

        $imgUbi->id_ubicacion = $id;

        if ($request->hasFile('file')){
            $imagen = $request->file->store('imagenes', 'public');
            $url = Storage::url($imagen);
            $imgUbi->imagen = $url;
        }

        $imgUbi->save();
    }

    function editUbicacion($id){
        $ubicacion = Ubicacion::findOrFail($id);
        $imagenesUbicaciones = Imagenes_ubicacion::all();

        $imagenes = $ubicacion->imagenes;

        return view('Admin.Ubicaciones.editarUbicacion', compact('ubicacion', 'imagenesUbicaciones', 'imagenes'));
    }

    function updateUbicacion($id, Request $request){
        $ubicacion = Ubicacion::findOrFail($id);

        $ubicacion->nombre = $request->nombre;

        $ubicacion->save();

        Alert::success('Cambios guardados', 'El titulo de personal fue actualizado correctamente');
        
        return back();
    }
    
    function destroyFotoUbi($id){
        $imagen = Imagenes_ubicacion::findOrFail($id);

        $imagen->delete();

        Alert::success('Eliminado', 'La foto de la ubicacion fue eliminada correctamente');

        return back();  
    }

    function destroyUbicacion($id){
        $ubicacion = Ubicacion::findOrFail($id);

        $ubicacion->delete();

        Alert::success('Eliminado', 'La ubicacion fue eliminada correctamente');

        return back();
    }
}
