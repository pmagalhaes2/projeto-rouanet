<?php

namespace App\Http\Controllers;

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

    public function getProjectById($id)
    {
        return Rouanet::find($id);
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
}
