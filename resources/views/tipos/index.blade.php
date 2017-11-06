@extends('layouts.base')

@section('contenido')
    <p>Por aca pasa a Tipos</p>

    <a href="/tipos/nuevo" target="_self"> <input type="button" name="boton" value="Nuevo Tipo" /> </a> 

    
        @foreach ($tipos as $d)
        <ul>
            <li> {{ $d->nombre }} </li>
            <li> <a href="/tipos/modificar/{{ $d->id }}" target="_self"> <input type="button" name="boton" value="Modificar" /> </a></li>
            <li> <a href="/tipos/eliminar/{{ $d->id }}" target="_self"> <input type="button" name="boton" value="Eliminar" /> </a></li>
        </ul>
        @endforeach

    @endsection