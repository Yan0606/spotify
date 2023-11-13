@extends('layouts.main')

@section('title','Home')

@section('content')
<link rel="stylesheet" href="/public/css/style.css">
<header class="spotify-header">
<a href="{{ url('principal') }}">
    <img src="/img/logo.png" alt="Logo Spotify">
</a>
</header>

<form method="POST" action="/">
    @csrf 
    <h1>Entrar no Spotify</h1>
    <div class="cadasto">
    <input type="button" value="Continuar com Google" id="cadastro" class="google-button">
    <input type="button" value="Continuar com Facebook" id="cadastro" class="face-button">
    <input type="button" value="Continuar com Apple" id="cadastro" class="apple-button">
    <input type="button" value="Continuar com um numero de Telefone" id="cadastro">
    </div>
    <label>Nome: </label>
    <input type="text" name="name" placeholder="Digite seu nome">
    <label>E-mal: </label>
    <input type="text" name="email" placeholder="Digite seu e-mail">
    <label>Password: </label>
    <input type="password" name="password" placeholder="Digite sua senha">
    <input type="submit" name="Cadastrar" value="Entrar">
    
</form>

<!-- @endsection 
