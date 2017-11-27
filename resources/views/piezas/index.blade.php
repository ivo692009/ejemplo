@extends('layouts.base')

@section('contenido')
    <p>Por aca pasa a Tipos</p>

    <a href="/piezas/nuevo" target="_self"> <input type="button" name="boton" value="Nueva Pieza" /> </a> 
    <br><br>
    
        @foreach ($piezas as $d)
        <tr>
            <th> {{ $d->titulo }} </th>
            <th> <a href="/piezas/ver/{{ $d->id }}" target="_self"> <input type="button" name="boton" value="Ver" /> </a></th>
            <th> <a href="/piezas/modificar/{{ $d->id }}" target="_self"> <input type="button" name="boton" value="Modificar" /> </a></th>
            <th> <a href="/piezas/eliminar/{{ $d->id }}" target="_self"> <input type="button" name="boton" value="Eliminar" /> </a></th>
        </tr>
        @endforeach

    @endsection