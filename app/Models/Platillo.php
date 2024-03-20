<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    protected $table = 'platillos';
    protected $primaryKey = 'id_platillo';
    public $timestamps = false;

    public function categoria()
    {
    return $this->belongsTo(Categoria::class, 'id_categoria');
    }

}
