<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservaciones extends Model
{
    protected $table = 'reservaciones';
    protected $primaryKey = 'id_reservacion';
    public $timestamps = false;
}
