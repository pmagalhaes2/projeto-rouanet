@extends('layouts.main')

@section('title', 'Projetos')

<link rel="stylesheet" href="/css/styles.css">

@section('content')

<div class="cards-container">
    @foreach($data as $d)
    <div class="card">
        <p class='flag'>{{$d->area}}</p>
        <h2>{{ $d->nome }}</h2>
        <p>{{$d->municipio}} • {{$d->uf}}</p>
        <p>{{$d->resumo}}</p>
        <div class='wrap-text'>
            <p>Aprovado</p>
            <span>R$ {{ $d->valor_aprovado }}</span>
        </div>
        <div class='wrap-text'>
            <p>Captado</p>
            <span>R$ {{ $d->valor_captado }}</span>
        </div>
    </div>
    @endforeach
</div>

@endsection
