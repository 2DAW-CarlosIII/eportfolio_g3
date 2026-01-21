<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionEvidencia extends Model
{
    use HasFactory;

    protected $table = 'evaluaciones-evidencias';

    protected $fillable = ['evidencia_id', 'user_id', 'puntuacion', 'estado', 'observaciones'];
}
