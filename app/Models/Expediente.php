<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    protected $table = 'expedientes';

    protected $fillable = [
        'remitente_persona_id',
        'remitente_nombre_completo',
        'asunto',
        'nro',
        'cabecera',
        'prioridad',
        'folios',
        'fecha_limite',
        'observaciones',
        'origen',
        'area_id',
        'expediente_tipo_id',
        'estado',
    ];
}
