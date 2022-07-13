@extends('adminlte::page')
@section('title', 'Prueba')

@section('content_header')
    <h1>Probando AdminLTE</h1>
@stop

@section('content')
    <p>Usando AdminLTE.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
