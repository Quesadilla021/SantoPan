<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Platillo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlatillosController extends Controller
{
    function storePlatillo(Request $request){
        $platillos = new Platillo();

        $platillos->nombre = $request->nombre;
        $platillos->detalles = $request->detalles;
        $platillos->precio = $request->precio;
        $platillos->id_categoria = $request->categoria;

        if ($request->hasFile('imagenPlatillo')){
            $img = $request->imagenPlatillo->store('imagenes', 'public');
            $url = Storage::url($img);
            $platillos->imagen = $url;
        }

        $platillos->save();

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

        if ($request->hasFile('imagenPlatillo')){
            $img = $request->imagenPlatillo->store('imagenes', 'public');
            $url = Storage::url($img);
            $platillo->imagen = $url;
        }

        $platillo->save();

        return redirect()->route('menu');
    }

    function destroyPlatillo($id){
        $platillo = Platillo::findOrFail($id);
        
        Storage::delete('public/'.$platillo->imagen);
        
        $platillo->delete();

        return redirect()->route('menu');

    }
}
