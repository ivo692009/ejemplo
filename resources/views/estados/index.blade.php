@extends('layouts.base')

@section('contenido')
    <p>Por aca pasa a estados</p>

    <a href="/estados/nuevo" target="_self"> <input type="button" name="boton" value="Nuevo Estado" /> </a> 

    
        @foreach ($estados as $d)
        <ul>
            <li> {{ $d->nombre }} </li>
            <li> <a href="/estados/modificar/{{ $d->id }}" target="_self"> <input type="button" name="boton" value="Modificar" /> </a></li>
            <li> <a href="/estados/eliminar/{{ $d->id }}" target="_self"> <input type="button" name="boton" value="Eliminar" /> </a></li>
        </ul>
        @endforeach

    @endsection