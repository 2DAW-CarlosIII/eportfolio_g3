<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $fillable = [
        'id',
        'estudiante_id',
        'modulo_formativo_id'
    ];
}
