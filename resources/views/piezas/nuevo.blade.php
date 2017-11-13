@extends('layouts.base')

@section('contenido')
    <p>Nueva pieza</p>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form method="post" action="/piezas/crear">
    {{ csrf_field() }}

        <input type="text" name="registro" id="registro" required/> <br>
        <input type="text" name="titulo" id="titulo" required/> <br>
        <input type="text" name="autor" id="autor" required/> <br>
        <input type="text" name="estilo" id="estilo" required/> <br>
        <input type="text" name="material" id="material" required/> <br>
        <input type="text" name="epoca" id="epoca" required/> <br>
        <input type="date" name="fecha" id="fecha" required/> <br>
        <input type="text" name="procedencia" id="procedencia" required/> <br>
        <input type="text" name="ubicacion" id="ubicacion" required/> <br>
        <input type="text" name="fotografo" id="fotografo" required/> <br>
        <input type="text" name="descripcion" id="descripcion" /> <br>
        <input type="text" name="observaciones" id="observaciones" /> <br>

    <input type="submit" value="Submit">
    </form>
@endsection