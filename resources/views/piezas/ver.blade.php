@extends('layouts.base')

@section('contenido')
    <p>Aca vemos una pieza</p>

        <p>Numero de Registro: <b>{{ $piezas->registro }}</b></p>
        <p>Codigo: <b>{{ $piezas->codigo }}</b></p>
        <p>Titulo: <b>{{ $piezas->titulo }}</b></p>
        <p> Tipo de pieza: <b>{{ $tipos->nombre }}</b></p> 
        <p>Nombre del Autor: <b>{{ $piezas->autor }}</b></p> 
        <p>Forma de Estilo: <b>{{ $piezas->estilo }}</b></p> 
        <p>Nombre del Material: <b>{{ $piezas->material }}</b></p> 
        <p>Epoca de la pieza: <b>{{ $piezas->epoca }}</b></p> 
        <p>Año estimado de la Pieza: <b>{{ $piezas->fecha }}</b></p> 
        <p> Estado de la pieza :<b>{{ $estados->nombre }}</b></p> 
        <p>Procedencia de la Pieza: <b>{{ $piezas->procedencia }}</b></p>
        <p>Ubicacion registrada de la pieza: <b>{{ $piezas->ubicacion }}</b></p> 
        <p>Fotografia</p>
        <img src="{{ Storage::url($piezas->foto)}}">
        <p>Nombre del Fotografo: <b>{{ $piezas->fotografo }}</b></p> 
        <p>Descripcion de la pieza: <b>{{ $piezas->descripcion }}</b></p> 
        <p>Observaciones de la pieza: <b>{{ $piezas->observaciones }}</b></p> 
        <p>Descriptores: <b>{{ $descriptores->nombre }}</b></p>

    @endsection