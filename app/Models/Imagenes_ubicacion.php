<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagenes_ubicacion extends Model
{
    protected $table = 'imagenes_ubicaciones';
    protected $primaryKey = 'id_img_ubicacion';
    public $timestamps = false;
}
