<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
    protected $table = 'objetivos';
    protected $primaryKey = 'id_objetivo';
    public $timestamps = false;
}
