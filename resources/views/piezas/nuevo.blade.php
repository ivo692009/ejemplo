@extends('layouts.base')

@section('contenido')
    <h1>Nueva pieza</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form method="post" action="/piezas/crear" enctype="multipart/form-data">
    {{ csrf_field() }}

        <p>Numero de registro</p> 
        <input type="text" name="registro" id="registro" required/> <br>
        <p>Titulo</p> 
        <input type="text" name="titulo" id="titulo" required/> <br>
        <p> Tipo de pieza </p> 
        <select name="tipo_id" id="tipo_id" required>
            @foreach ($tipos as $t)
            <option value="{{ $t->id }}">{{ $t->nombre }}</option>
            @endforeach
        </select>
        <p>Nombre del Autor</p> 
        <input type="text" name="autor" id="autor" required/> <br>
        <p>Forma de Estilo</p> 
        <input type="text" name="estilo" id="estilo" required/> <br>
        <p>Nombre del Material</p> 
        <input type="text" name="material" id="material" required/> <br>
        <p>Epoca de la pieza</p> 
        <input type="text" name="epoca" id="epoca" required/> <br>
        <p>Año estimado de la Pieza</p> 
        <input type="date" name="fecha" id="fecha" required/> <br>
        <p> Estado de la pieza </p> 
        <select name="estado_id" id="estado_id" required>
            @foreach ($estados as $e)
            <option value="{{ $e->id }}">{{ $e->nombre }}</option>
            @endforeach
        </select>
        <p>Procedencia de la Pieza</p> 
        <input type="text" name="procedencia" id="procedencia" required/> <br>
        <p>Ubicacion registrada de la pieza</p> 
        <input type="text" name="ubicacion" id="ubicacion" required/> <br>
        <p>Fotografia</p>
        <input type="file" name="foto" id="foto" required>
        <p>Nombre del Fotografo</p> 
        <input type="text" name="fotografo" id="fotografo" required/> <br>
        <p>Descripcion de la pieza</p> 
        <input type="text" name="descripcion" id="descripcion" /> <br>
        <p>Observaciones de la pieza</p> 
        <input type="text" name="observaciones" id="observaciones" /> <br>
        <p>Descriptores</p>
        <select name="descriptores_id" id="descriptores_id" multiple>
            @foreach ($descriptores as $d)
            <option value="{{ $d->id }}">{{ $d->nombre }}</option>
            @endforeach
        </select>

    <input type="submit" value="Submit">
    </form>
@endsection