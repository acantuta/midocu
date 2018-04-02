<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpedienteTipo extends Model
{
	protected $table = 'expediente_tipos';
	protected $fillable = [
		'nombre',
		'descripcion',
	];
}
