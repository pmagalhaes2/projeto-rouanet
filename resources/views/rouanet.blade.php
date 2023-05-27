@extends('layouts.main')

@section('title', 'Rouanet')

<link rel="stylesheet" href="/css/styles.css">

@section('content')


<h1>Exibindo rouanet id: {{ $id }}</h1>

<div class="card-container">
    <div class="card">
        <p class='flag'>{{$data->area}}</p>
        <h2>{{ $data->nome }}</h2>
        <p>{{$data->municipio}} • {{$data->uf}}</p>
        <p>{{$data->resumo}}</p>
        <div class='wrap-text'>
            <p>Aprovado</p>
            <span>R$ {{ $data->valor_aprovado }}</span>
        </div>
        <div class='wrap-text'>
            <p>Captado</p>
            <span>R$ {{ $data->valor_captado }}</span>
        </div>
    </div>
</div>

@endsection
