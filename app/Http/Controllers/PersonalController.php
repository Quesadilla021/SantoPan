<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use App\Models\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonalController extends Controller
{
    function updateInPersonal(Request $request){
        $inicio = Inicio::findOrfail(1);
        
        $inicio->tituloPersonal = $request->tituloPersonal;

        $inicio->save();

        return back();  
    }

    function storePersonal(Request $request){
        $personal = new Personal();

        $personal->nombre = $request->nombrePersonal;
        $personal->rol = $request->rolPersonal;
        $personal->facebook = $request->facePersonal;
        $personal->instagram = $request->intsaPersonal;

        if ($request->hasFile('imagenPersonal')){
            $img = $request->imagenPersonal->store('imagenes', 'public');
            $url = Storage::url($img);
            $personal->imagen = $url;
        }

        $personal->save();
        return back();
        
    }

    function editPersonal($id) {
        $personal = Personal::findOrFail($id);

        return view('Admin.Personalizar_inicio.editarPersonal', compact('personal'));
    }

    function updatePersonal($id, Request $request){
        $personal = Personal::findOrFail($id);

        $personal->nombre = $request->nombre;
        $personal->rol = $request->rol;
        $personal->facebook = $request->facebook;
        $personal->instagram = $request->instagram;

        if ($request->hasFile('imagenPersonal')){
            $img = $request->imagenPersonal->store('imagenes', 'public');
            $url = Storage::url($img);
            $personal->imagen = $url;
        }

        $personal->save();
        return back();

    }

    function destroyPersonal($id){
        $personal = Personal::findOrFail($id);

        $personal->delete();

        return back();
    }
    
}
