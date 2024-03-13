<?php

namespace App\Http\Controllers;

use App\Models\imagenes_inicio;
use App\Models\Inicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InicioController extends Controller
{
    function updateInicio(Request $request){
        $inicio = Inicio::findOrFail(1);
        $imagenPrincipal = imagenes_inicio::findOrFail(1);

        $inicio->titulo = $request->titulo;
        $inicio->subtitulo = $request->subtitulo;

        if ($request->hasFile('imagenPrincipal')){
            $img = $request->imagenPrincipal->store('imagenes', 'public');
            $url = Storage::url($img);
            $imagenPrincipal->img_principal = $url;
        }

        $inicio->localizacion = $request->localizacion;
        $inicio->horario = $request->horario;
        $inicio->correo_electronico = $request->correo_electronico;
        $inicio->telefono = $request->telefono;

        $inicio->save();
        $imagenPrincipal->save();

        return back();

    }
}
