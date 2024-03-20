<?php

namespace App\Http\Controllers;

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
}
