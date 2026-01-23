<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignaciones extends Model
{
    protected $table = 'asignaciones';

    protected $fillable = ['evidencia_id', 'revisor_id', 'estado', 'comentarios'];

}
