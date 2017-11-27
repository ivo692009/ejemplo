<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piezas extends Model
{
    protected $fillable = [
        'registro',
        'codigo',
        'tipo_id',
        'titulo',
        'autor',
        'estilo',
        'material',
        'epoca',
        'fecha',
        'estado_id',
        'procedencia',
        'ubicacion',
        'fotografo',
        'descripcion',
        'observaciones',
        'descriptores_id',
        'foto'
    ];
}
