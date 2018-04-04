<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'tipo',
        'nro_identificacion',
        'nombres',
        'apellidos',
        'razon_social',
        'correo',
        'direccion',
        'telefono',
    ];

    public function getNombreCompletoAttribute()
    {
        $nombreCompleto = $this->tipo == 'natural' ? ($this->nombres . ' ' . $this->apellidos) : $this->razon_social;

        return $nombreCompleto;
    }
}
