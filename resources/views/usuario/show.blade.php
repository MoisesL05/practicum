@extends('layouts.app')
@section('title', 'Index de usuario')

@section('content')
    @if($email==null)
        <h1>Hola, {{$nombre}}.</h1><br>
    @else
        <h1>Hola, {{$nombre}}. Email: {{$email}}</h1><br>
    @endif
@endsection

