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
        'descriptores_id_1',
        'descriptores_id_2',
        'descriptores_id_3',
        'descriptores_id_4',
        'descriptores_id_5',
        'descriptores_id_6',
        'foto'
    ];
}
