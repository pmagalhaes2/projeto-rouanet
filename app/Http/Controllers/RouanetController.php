<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rouanet;

class RouanetController extends Controller
{
    public function index()
    {
        return Rouanet::all();
    }

    // Retorno de view com listagem de projetos
    public function getProjectsView()
    {
        $data = Rouanet::all();

        return view('projects', [
            'data' => $data,
        ]);
    }

    /**
     * Display the specified project.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Rouanet::findOrFail($id);
    }

    // Retorno de view de acordo com o id do projeto
    public function getProjectByIdView($id)
    {
        $data = Rouanet::find($id);

        return view('project', [
            'id' => $id,
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Rouanet;

        $project->pronac = $request->pronac;
        $project->ano_projeto = $request->ano_projeto;
        $project->nome = $request->nome;
        $project->segmento = $request->segmento;
        $project->area = $request->area;
        $project->uf = $request->uf;
        $project->municipio = $request->municipio;
        $project->data_inicio = $request->data_inicio;
        $project->data_termino = $request->data_termino;
        $project->situacao = $request->situacao;
        $project->mecanismo = $request->mecanismo;
        $project->enquadramento = $request->enquadramento;
        $project->valor_captado = $request->valor_captado;
        $project->valor_aprovado = $request->valor_aprovado;
        $project->acessibilidade = $request->acessibilidade;
        $project->objetivos = $request->objetivos;
        $project->justificativa = $request->justificativa;
        $project->etapa = $request->etapa;
        $project->ficha_tecnica = $request->ficha_tecnica;
        $project->impacto_ambiental = $request->impacto_ambiental;
        $project->especificacao_tecnica = $request->especificacao_tecnica;
        $project->providencia = $request->providencia;
        $project->democratizacao = $request->democratizacao;
        $project->sinopse = $request->sinopse;
        $project->resumo = $request->resumo;
        $project->valor_projeto = $request->valor_projeto;
        $project->outras_fontes = $request->outras_fontes;
        $project->valor_proposta = $request->valor_proposta;
        $project->valor_solicitado = $request->valor_solicitado;
        $project->objetivo = $request->objetivo;
        $project->estrategia_execucao = $request->estrategia_execucao;
        $project->link_incentivadores = $request->link_incentivadores;

        echo $project;

        $project->save();

        return redirect('/')->with('msg', 'Projeto criado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rouanet::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Projeto excluído com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $project = Rouanet::findOrFail($id);

        return view('projects.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Rouanet::findOrFail($request->id)->update($request->all());

        return redirect('/')->with('msg', 'Projeto alterado com sucesso!');
    }
}
