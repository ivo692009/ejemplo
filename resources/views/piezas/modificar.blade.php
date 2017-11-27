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
        <p>Numero de registro</p> 
        <input type="text" name="registro" id="registro" required/> <br>
        <p>Titulo</p> 
        <input type="text" name="titulo" id="titulo"  value="{{ $piezas->titulo }}" required/> <br>
        <p> Tipo de pieza </p> 
        <select name="tipo_id" id="tipo_id" required>
            @foreach ($tipos as $t)
            <option value="{{ $t->id }}">{{ $t->nombre }}</option>
            @endforeach
        </select>
        <p>Nombre del Autor</p> 
        <input type="text" name="autor" id="autor"  value="{{ $piezas->autor }}" required/> <br>
        <p>Forma de Estilo</p> 
        <input type="text" name="estilo" id="estilo"  value="{{ $piezas->estilo }}" required/> <br>
        <p>Nombre del Material</p> 
        <input type="text" name="material" id="material"  value="{{ $piezas->material }}" required/> <br>
        <p>Epoca de la pieza</p> 
        <input type="text" name="epoca" id="epoca"  value="{{ $piezas->epoca }}" required/> <br>
        <p>Año estimado de la Pieza</p> 
        <input type="date" name="fecha" id="fecha"  value="{{ $piezas->fecha }}" required/> <br>
        <p> Estado de la pieza </p> 
        <select name="estado_id" id="estado_id" required>
            @foreach ($estados as $e)
            <option value="{{ $e->id }}">{{ $e->nombre }}</option>
            @endforeach
        </select>
        <p>Procedencia de la Pieza</p> 
        <input type="text" name="procedencia" id="procedencia"  value="{{ $piezas->procedencia }}" required/> <br>
        <p>Ubicacion registrada de la pieza</p> 
        <input type="text" name="ubicacion" id="ubicacion"  value="{{ $piezas->ubicacion }}" required/> <br>
        <p>Fotografia</p>
        <img src="{{ Storage::url($piezas->foto)}}">
        <input type="file" name="foto" id="foto">
        <p>Nombre del Fotografo</p> 
        <input type="text" name="fotografo" id="fotografo"  value="{{ $piezas->fotografo }}" required/> <br>
        <p>Descripcion de la pieza</p> 
        <input type="text" name="descripcion" id="descripcion"  value="{{ $piezas->descripcion }}" /> <br>
        <p>Observaciones de la pieza</p> 
        <input type="text" name="observaciones" id="observaciones"  value="{{ $piezas->observaciones }}" /> <br>
        <p>Descriptores</p>
        <select name="descriptores_id" id="descriptores_id" multiple>
            @foreach ($descriptores as $d)
            <option value="{{ $d->id }}">{{ $d->nombre }}</option>
            @endforeach
        </select>
    <input type="submit" value="Submit">
    </form>
    @endsection