<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class piezasRules extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'registro'          => 'required|unique:piezas|min:3|max:200',
            'tipo_id'           => 'required',
            'titulo'            => 'required|min:3|max:200',
            'autor'             => 'required|min:3|max:200',
            'estilo'            => 'required|min:3|max:200',
            'material'          => 'required|min:3|max:200',
            'epoca'             => 'required|min:3|max:200',
            'fecha'             => 'required',
            'estado_id'         => 'required',
            'procedencia'       => 'required|min:3|max:200',
            'ubicacion'         => 'required|min:3|max:200',
            'fotografo'         => 'required|min:3|max:200',
            'descripcion'       => 'min:3|max:240',
            'observaciones'     => 'min:3|max:200',
            'descriptores_id'   =>'required',
            //'foto'
        ];
    }
}