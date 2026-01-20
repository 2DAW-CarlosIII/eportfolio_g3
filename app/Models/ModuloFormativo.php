<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModuloFormativo extends Model
{
    protected $table = 'modulos_formativos';
    
    protected $fillable = ['nombre', 'codigo', 'horas_totales', 'curso_escolar', 'centro', 'docente_id', 'descripcion'];
}
