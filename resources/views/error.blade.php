@extends('layouts.base')

@section('contenido')
    

@foreach ($errors as $e)
      <h1> {{ $e }}  </h1>
@endforeach
   </br>
   </br>
   <a href="/inicio"> Volver al inicio</a> </br>

@endsection