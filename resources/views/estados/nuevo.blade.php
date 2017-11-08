@extends('layouts.base')

@section('contenido')
    <p>Nuevo Estado</p>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="post" action="/estados/crear">
    {{ csrf_field() }}

    <input type="text" name="nombre" id="nombre" required/>

    <input type="submit" value="Submit">
    </form>
@endsection