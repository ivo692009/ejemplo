@extends('layouts.base')

@section('contenido')
    <p>Por aca pasa a descriptores</p>

    <a href="/descriptores/nuevo" target="_self"> <input type="button" name="boton" value="Nuevo Descriptor" /> </a> 
    <br><br>
    
        @foreach ($descriptores as $d)
        <tr>
            <th> {{ $d->nombre }} </th>
            <th> <a href="/descriptores/modificar/{{ $d->id }}" target="_self"> <input type="button" name="boton" value="Modificar" /> </a></th>
            <th> <a href="/descriptores/eliminar/{{ $d->id }}" target="_self"> <input type="button" name="boton" value="Eliminar" /> </a></th>
        </tr>
        @endforeach

    @endsection