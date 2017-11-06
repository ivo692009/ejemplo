@extends('layouts.base')

@section('contenido')
    <p>Nuevo Estado</p>

    <form method="post" action="/tipos/crear">
    {{ csrf_field() }}

    <input type="text" name="nombre" id="nombre" required/>

    <input type="submit" value="Submit">
    </form>
@endsection