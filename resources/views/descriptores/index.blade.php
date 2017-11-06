@extends('layouts.base')

@section('contenido')
    <p>Por aca pasa a descriptores</p>

    <a href="/descriptores/nuevo" target="_self"> <input type="button" name="boton" value="Nuevo Descriptor" /> </a> 

    
        @foreach ($descriptores as $d)
        <ul>
            <li> {{ $d->nombre }} </li>
            <li> <a href="/descriptores/modificar/{{ $d->id }}" target="_self"> <input type="button" name="boton" value="Modificar" /> </a></li>
            <li> <a href="/descriptores/eliminar/{{ $d->id }}" target="_self"> <input type="button" name="boton" value="Eliminar" /> </a></li>
        </ul>
        @endforeach

    @endsection