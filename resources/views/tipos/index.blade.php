@extends('layouts.base')

@section('contenido')
    <p>Por aca pasa a Tipos</p>

    <a href="/tipos/nuevo" target="_self"> <input type="button" name="boton" value="Nuevo Tipo" /> </a> 
    <br><br>
    
        @foreach ($tipos as $d)
        <tr>
            <th> {{ $d->nombre }} </th>
            <th> <a href="/tipos/modificar/{{ $d->id }}" target="_self"> <input type="button" name="boton" value="Modificar" /> </a></th>
            <th> <a href="/tipos/eliminar/{{ $d->id }}" target="_self"> <input type="button" name="boton" value="Eliminar" /> </a></th>
        </tr>
        @endforeach

    @endsection