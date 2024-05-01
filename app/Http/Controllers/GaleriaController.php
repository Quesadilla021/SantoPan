<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use App\Models\Inicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
{
    function updateInGaleria(Request $request){
        
        $inicio = Inicio::findOrfail(1);
        
        $inicio->tituloGaleria = $request->tituloGaleria;

        $inicio->save();

        return back();  


    }

    function indexAgregarGaleria(){
        return view('Admin.Personalizar_inicio.subirImgGaleria');
    }

    function storeGaleria(Request $request){
        $img = new Galeria();

        if ($request->hasFile('file')){
            $imagen = $request->file->store('imagenes', 'public');
            $url = Storage::url($imagen);
            $img->imagen = $url;

        }

        $img->save();
    }

    function destroyGaleria($id){
        $img = Galeria::findOrFail($id);

        $img->delete();

        return back();
    }
}
