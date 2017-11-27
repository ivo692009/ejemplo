@extends('layouts.base')

@section('contenido')
    <p>Por aca pasa a descriptores modificar</p>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form method="post" action="/piezas/modificado">
    
    {{ csrf_field() }}

        <input type="hidden" name="id" id="id" value="{{ $id }}" />
        <input type="text" name="registro" id="registro" value="{{ $piezas->registro }}"required/> <br>
        <input type="text" name="titulo" id="titulo" value="{{ $piezas->titulo }}"required/> <br>
        <input type="text" name="autor" id="autor" value="{{ $piezas->autor }}"required/> <br>
        <input type="text" name="estilo" id="estilo"value="{{ $piezas->estilo }}" required/> <br>
        <input type="text" name="material" id="material" value="{{ $piezas->material }}"required/> <br>
        <input type="text" name="epoca" id="epoca" value="{{ $piezas->epoca }}" required/> <br>
        <input type="date" name="fecha" id="fecha" value="{{ $piezas->fecha }}"required/> <br>
        <input type="text" name="procedencia" id="procedencia" value="{{ $piezas->procedencia }}"required/> <br>
        <input type="text" name="ubicacion" id="ubicacion" value="{{ $piezas->ubicacion }}"required/> <br>
        <input type="text" name="fotografo" id="fotografo" value="{{ $piezas->fotografo }}"required/> <br>
        <input type="text" name="descripcion" id="descripcion" value="{{ $piezas->descripcion }}" /> <br>
        <input type="text" name="observaciones" id="observaciones" value="{{ $piezas->observaciones }}"/> <br>
        
    <input type="submit" value="Submit">
    </form>
    @endsection