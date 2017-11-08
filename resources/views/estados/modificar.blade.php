@extends('layouts.base')

@section('contenido')
    <p>Por aca pasa a estados modificar</p>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form method="post" action="/estados/modificado">
    
    {{ csrf_field() }}

    <input type="hidden" name="id" id="id" value="{{ $id }}" />
    <input type="text" name="nombre" id="nombre" value="{{ $estados->nombre }}"required/>

    <input type="submit" value="Submit">
    </form>
    @endsection