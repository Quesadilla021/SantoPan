<?php

namespace App\Http\Controllers;

use App\Models\Reservaciones;
use Illuminate\Http\Request;

class ReservacionController extends Controller
{
    function storeReservacion(Request $request){
        $reservacion = new Reservaciones();

        $reservacion->nombre = $request->nombre;
        $reservacion->correo_electronico = $request->correo_electronico;
        $reservacion->telefono = $request->telefono;
        $reservacion->fecha = $request->fecha;
        $reservacion->hora = $request->hora;
        $reservacion->num_personas = $request->num_personas;
        $reservacion->mensaje = $request->mensaje;
        $reservacion->estado = 'Pendiente';

        $reservacion->save();

        return back();

    }

    function verSolicitud($id){
        $reservacion = Reservaciones::findOrFail($id);

        return view('Admin.Reservaciones.verSolicitud', compact('reservacion'));
    }
}
