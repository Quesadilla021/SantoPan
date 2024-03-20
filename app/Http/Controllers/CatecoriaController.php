<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CatecoriaController extends Controller
{
    function storeCategoria(Request $request){
        $categoria = new Categoria();

        $categoria->nombre = $request->nombre;

        $categoria->save();

        return back();
    }
}
