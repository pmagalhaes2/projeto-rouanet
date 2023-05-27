<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


<style>
    * {
        font-family: 'Nunito';
    }

    .flag {
        text-transform: uppercase;
        background-color: #FFF2DB;
        color: #D2A562;
        font-weight: bold;
        width: fit-content;
        position: absolute;
        top: 0;
        right: 0;
        border-radius: 0.2rem;
        padding: 0 0.5rem;
    }

    .card-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        justify-items: center;

    }

    .card {
        position: relative;
        width: 400px;
        border: 1px solid #4A4A4A;
        border-radius: 0.5rem;
        padding: 1rem 2rem;
    }

    h2 {
        margin-top: 2.5rem;
    }

    p {
        color: #4A4A4A;
    }

    .wrap-text {
        display: flex;
        align-items: center;
        gap: 2rem;
    }

    span {
        font-weight: bold;
    }
</style>

<div class="card-container">
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
