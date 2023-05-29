@extends('layouts.main')

@section('title', 'Editar Projeto')

<link rel="stylesheet" href="/css/styles.css">

@section('content')

<div id="project-create-container">
    <h1>Edite o seu projeto</h1>
    <form action="/projects/update/{{$project-> id_projeto }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Projeto:</label>
            <input type="text" class="form-control" id='nome' name="nome" placeholder="Nome do Projeto" value='{{$project->nome }}' required>
            <label for="pronac">PRONAC:</label>
            <input type="number" class="form-control" id='pronac' name='pronac' placeholder="PRONAC do Projeto" value='{{$project->pronac }}' required>
            <label for="ano">Ano:</label>
            <input type='number' min="1" max='2023' class="form-control" id='ano' name='ano_projeto' placeholder="Ano do Projeto" value='{{$project->ano_projeto }}' required>
            <label for="segmento">Segmento:</label>
            <input type="text" class="form-control" id='segmento' name='segmento' placeholder="Segmento do Projeto" value='{{$project->segmento }}' required>
            <label for="area">Área:</label>
            <select name="area" id="area" required>
                <option value=""></option>
                <option value="Artes Cênicas">Artes cênicas</option>
                <option value="Artes Visuais">Artes visuais</option>
                <option value="Audiovisual">Audiovisual</option>
                <option value="Humanidades">Humanidades</option>
                <option value="Música">Música</option>
                <option value="Patrimônio Cultural">Patrimônio Cultural</option>
            </select>
            <label for="uf">UF:</label>
            <input type="text" class="form-control" id='uf' name='uf' placeholder="UF do Projeto" value='{{$project->uf }}' required>
            <label for="uf">Município:</label>
            <input type="text" class="form-control" id='municipio' name='municipio' placeholder="Município do Projeto" value='{{$project->municipio }}' required>
            <label for="data_inicio">Início:</label>
            <input type="date" class="form-control" id='data_inicio' name='data_inicio' placeholder="Data de início do Projeto" required>
            <label for="data_termino">Término:</label>
            <input type="date" class="form-control" id='data_termino' name='data_termino' placeholder="Data de término do Projeto" required>
            <label for="situacao">Situação:</label>
            <input type="text" class="form-control" id='situacao' name='situacao' placeholder="Insira a situação do Projeto" value='{{$project->situacao }}' required>
            <label for="mecanismo">Mecanismo:</label>
            <input type="text" class="form-control" id='mecanismo' name='mecanismo' placeholder="Insira o mecanismo do Projeto" value='{{$project->mecanismo }}' required>
            <label for="enquadramento">Enquadramento:</label>
            <input type="text" class="form-control" id='enquadramento' name='enquadramento' placeholder="Insira o enquadramento do Projeto" value='{{$project->enquadramento }}' required>

            <label for="valor_captado">Valor captado:</label>
            <input type="number" class="form-control" id='valor_captado' name='valor_captado' placeholder="Insira o valor captado do Projeto" value='{{$project->valor_captado }}' required>


            <label for="valor_aprovado">Valor aprovado:</label>
            <input type="number" class="form-control" id='valor_aprovado' name='valor_aprovado' value='{{$project->valor_aprovado }}' required>

            <label for="acessibilidade">Acessibilidade:</label>
            <textarea class="form-control" id='acessibilidade' name='acessibilidade' placeholder="Insira a acessibilidade do Projeto" rows="6" value='{{$project->acessibilidade }}' required></textarea>

            <label for=" objetivos">Objetivos:</label>
            <input type="text" class="form-control" id='objetivos' name='objetivos' placeholder="Insira os objetivos do Projeto" value='{{$project->objetivos }}'></input>

            <label for="justificativa">Justificativa:</label>
            <textarea class="form-control" id='justificativa' name='justificativa' placeholder="Insira a justificativa do Projeto" rows='6' value='{{$project->justificativa }}'></textarea>

            <label for="etapa">Etapa:</label>
            <input type="text" class="form-control" id='etapa' name='etapa' placeholder="Insira a etapa do Projeto" value='{{$project->etapa }}'>

            <label for="ficha_tecnica">Ficha Técnica:</label>
            <input type="text" class="form-control" id='ficha_tecnica' name='ficha_tecnica' placeholder="Insira a ficha técnica do Projeto" value='{{$project->ficha_tecnica }}' required>


            <label for="impacto_ambiental">Impacto Ambiental:</label>
            <input type="text" class="form-control" id='impacto_ambiental' name='impacto_ambiental' placeholder="Insira o impacto ambiental do Projeto" value='{{$project->impacto_ambiental }}' required>


            <label for="especificacao_tecnica">Especificação Técnica:</label>
            <input type="text" class="form-control" id='especificacao_tecnica' name='especificacao_tecnica' placeholder="Insira a especificação técnica do Projeto" value='{{$project->especificacao_tecnica }}' required>


            <label for="providencia">Providencia:</label>
            <input type="text" class="form-control" id='providencia' name='providencia' placeholder="Insira a providencia do Projeto" value='{{$project->providencia }}' required>

            <label for="democratizacao">Democratização:</label>
            <input type="text" class="form-control" id='democratizacao' name='democratizacao' placeholder="Insira a democratizacao do Projeto" value='{{$project->democratizacao }}'>

            <label for="sinopse">Sinopse:</label>
            <input type="text" class="form-control" id='sinopse' name='sinopse' placeholder="Insira a sinopse do Projeto" value='{{$project->sinopse }}'>

            <label for="resumo">Resumo:</label>
            <input type="text" class="form-control" id='resumo' name='resumo' placeholder="Insira o resumo do Projeto" value='{{$project->resumo }}'>

            <label for="valor_projeto">Valor projeto:</label>
            <input type="number" class="form-control" id='valor_projeto' name='valor_projeto' placeholder="Insira o valor do Projeto" value='{{$project->valor_projeto }}' required>


            <label for="outras_fontes">Outras fontes:</label>
            <input type="text" class="form-control" id='outras_fontes' name='outras_fontes' placeholder="Insira outras fontes do Projeto" value='{{$project->outras_fontes }}' required>

            <label for="valor_proposta">Valor proposta:</label>
            <input type="number" class="form-control" id='valor_proposta' name='valor_proposta' placeholder="Insira o valor proposta do Projeto" value='{{$project->valor_proposta }}' required>


            <label for="valor_solicitado">Valor solicitado:</label>
            <input type="number" class="form-control" id='valor_solicitado' name='valor_solicitado' placeholder="Insira o valor solicitado do Projeto" value='{{$project->valor_solicitado }}' required>

            <label for="objetivo">Objetivo:</label>
            <input type="text" class="form-control" id='objetivo' name='objetivo' placeholder="Insira o objetivo do Projeto" value='{{$project->objetivo }}' required>


            <label for="estrategia_execucao">Estratégia execução:</label>
            <input type="text" class="form-control" id='estrategia_execucao' name='estrategia_execucao' placeholder="Insira a estratégia de execução do Projeto" value='{{$project->estrategia_execucao }}' required>


            <label for="link_incentivadores">Link incentivadores:</label>
            <input type="url" class="form-control" id='link_incentivadores' name='link_incentivadores' placeholder="Insira o link incentivadores do Projeto" value='{{$project->link_incentivadores }}' required>

            <input type="submit" value="Confirmar Alteração">

        </div>
    </form>
</div>

@endsection
