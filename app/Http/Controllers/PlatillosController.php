<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Platillo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PlatillosController extends Controller
{
    function storePlatillo(Request $request){
        $platillos = new Platillo();

        $platillos->nombre = $request->nombre;
        $platillos->detalles = $request->detalles;
        $platillos->precio = $request->precio;
        $platillos->id_categoria = $request->categoria;
        $platillos->dia = $request->dia;

        if ($request->hasFile('imagenPlatillo')){
            $img = $request->imagenPlatillo->store('imagenes', 'public');
            $url = Storage::url($img);
            $platillos->imagen = $url;
        }

        $platillos->save();

        Alert::success('Agregado', 'El nuevo platillo fue agregado correctamente');

        return back();


    }

    function editPlatillo($id){
        $platillo = Platillo::findOrFail($id);
        $categorias = Categoria::all();

        return view('Admin.Menu.editarPlatillo', compact('platillo', 'categorias'));
    }

    function updatePlatillo(Request $request, $id){
        $platillo = Platillo::findOrFail($id);

        $platillo->nombre = $request->nombre;
        $platillo->detalles = $request->detalles;
        $platillo->precio = $request->precio;
        $platillo->id_categoria = $request->categoria;
        $platillo->dia = $request->dia;

        if ($request->hasFile('imagenPlatillo')){
            $img = $request->imagenPlatillo->store('imagenes', 'public');
            $url = Storage::url($img);
            $platillo->imagen = $url;
        }

        $platillo->save();

        Alert::success('Cambios guardados', 'El platillo fue actualizado correctamente');

        return redirect()->route('menu');
    }

    function destroyPlatillo($id){
        $platillo = Platillo::findOrFail($id);
        
        Storage::delete('public/'.$platillo->imagen);
        
        $platillo->delete();

        Alert::success('Eliminado', 'El platillo fue eliminado correctamente');

        return redirect()->route('menu');

    }
}
