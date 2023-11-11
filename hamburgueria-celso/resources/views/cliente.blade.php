@extends('layouts.main')

@section('title','Cliente')

@section('content')

@foreach($clientes as $cliente)
    <p>Nome: {{$cliente->name}} - E-mail: {{$cliente->email}}</p>
@endforeach

<a href="/home">Ir para a Home Page</a>

@endsection
