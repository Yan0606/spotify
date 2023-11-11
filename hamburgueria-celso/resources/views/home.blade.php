@extends('layouts.main')

@section('title','Home')

@section('content')
<link rel="stylesheet" href="/public/css/style.css">

<h1>CADSTRO</h1>
<form method="POST" action="/">
    @csrf 
    <label>Nome: </label>
    <input type="text" name="name" placeholder="Digite seu nome">
    <label>E-mal: </label>
    <input type="text" name="email" placeholder="Digite seu e-mail">
    <label>Password: </label>
    <input type="password" name="password" placeholder="Digite sua senha">
    <input type="submit" name="Cadastrar" value="Cadastrar">
</form>

@endsection
