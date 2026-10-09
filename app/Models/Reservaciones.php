<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservaciones extends Model
{
    protected $table = 'reservaciones';
    protected $primaryKey = 'id_reservacion';
    public $timestamps = false;
    
    protected $fillable = [
        'nombre',
        'fecha',
        'hora',
        'num_personas',
        'telefono',
        'mensaje',
        'ubicacion',
        'reciente',
        // Si necesitas el token, puedes agregarlo aquí, aunque generalmente no es necesario
        // '_token',
    ];
    
}
