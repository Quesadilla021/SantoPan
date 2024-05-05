<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CatecoriaController extends Controller
{
    function storeCategoria(Request $request){
        $categoria = new Categoria();

        $categoria->nombre = $request->nombre;

        $categoria->save();

        Alert::success('Agregado', 'La nueva categoria fue agregada correctamente');

        return back();
    }

    function destroyCategoria($id){
        $categoria = Categoria::findOrFail($id);

        $categoria->delete();

        Alert::success('Eliminado', 'La categoria fue eliminada correctamente');

        return back();
    }
}
