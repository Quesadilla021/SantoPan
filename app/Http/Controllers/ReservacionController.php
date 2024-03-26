<?php

namespace App\Http\Controllers;

use App\Models\Reservaciones;
use Illuminate\Http\Request;

class ReservacionController extends Controller
{
    function storeReservacion(Request $request){
        $reservacion = new Reservaciones();

        $reservacion->nombre = $request->nombre;
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

    function rechazarSoli($id){
        $reservacion = Reservaciones::findOrFail($id);

        $reservacion->estado = "Rechazado";

        $reservacion->save();

        return redirect("https://api.whatsapp.com/send?phone="."$reservacion->telefono"."&text=¡Buenas%20"."$reservacion->nombre"."%20le%20informamos%20que%20la%20mesa%20solicitida%20para%20la%20fecha:%20"."$reservacion->fecha"."%20a%20la%20hora:%20"."$reservacion->hora"."%20no%20se%20encuentra%20disponible%20en%20este%20momento!%20en%20breves%20se%20comunicara%20la%20razon...");
        
    }

    function aprobarSoli($id){

        $reservacion = Reservaciones::findOrFail($id);

        $reservacion->estado = "Aprobado";

        $reservacion->save();

        return redirect("https://api.whatsapp.com/send?phone="."$reservacion->telefono"."&text=¡Buenas%20"."$reservacion->nombre"."%20le%20informamos%20que%20la%20mesa%20solicitida%20para%20la%20fecha:%20"."$reservacion->fecha"."%20a%20la%20hora:%20"."$reservacion->hora"."%20se%20encuentra%20disponible!%20favor%20responder%20este%20mensaje%20para%20su%20confirmacion%20correspondiente");
        
    }
}
