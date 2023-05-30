<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rouanet;

/**
 * @OA\Info(
 *             title="Projeto Rouanet API",
 *             version="1.0",
 *             description="Lista com URI's da API de Projetos Rouanet"
 * )
 *
 * @OA\Server(url="http://127.0.0.1:8000")
 */
class RouanetController extends Controller
{
    /**
     * Get list of projects
     * @OA\Get (
     *     path="/projects",
     *     tags={"Projects"},
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="projects",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="id_projeto",
     *                         type="number",
     *                         example=123
     *                     ),
     *                     @OA\Property(
     *                         property="pronac",
     *                         type="string",
     *                         example="12345"
     *                     ),
     *                    @OA\Property(
     *                         property="ano_projeto",
     *                         type="string",
     *                         example="2023"
     *                     ),
     *                    @OA\Property(
     *                         property="nome",
     *                         type="string",
     *                         example="Festival de Blumenau"
     *                     ),
     *                    @OA\Property(
     *                         property="segmento",
     *                         type="string",
     *                         example="Exposição de Artes Visuais"
     *                     ),
     *                    @OA\Property(
     *                         property="area",
     *                         type="string",
     *                         example="Artes Visuais"
     *                     ),
     *                    @OA\Property(
     *                         property="uf",
     *                         type="string",
     *                         example="SC"
     *                     ),
     *                    @OA\Property(
     *                         property="municipio",
     *                         type="string",
     *                         example="Blumenau"
     *                     ),
     *                    @OA\Property(
     *                         property="data_inicio",
     *                         type="string",
     *                         example="2023-02-23 00:00:00"
     *                     ),
     *                    @OA\Property(
     *                         property="data_termino",
     *                         type="string",
     *                         example="2023-02-28 00:00:00"
     *                     ),
     *                    @OA\Property(
     *                         property="situacao",
     *                         type="string",
     *                         example="Autorizada a captação"
     *                     ),
     *                    @OA\Property(
     *                         property="mecanismo",
     *                         type="string",
     *                         example="Mecenato"
     *                     ),
     *                    @OA\Property(
     *                         property="enquadramento",
     *                         type="string",
     *                         example="Artigo XXX"
     *                     ),
     *                    @OA\Property(
     *                         property="valor_captado",
     *                         type="string",
     *                         example="65000"
     *                     ),
     *                    @OA\Property(
     *                         property="valor_aprovado",
     *                         type="string",
     *                         example="20000"
     *                     ),
     *                    @OA\Property(
     *                         property="acessibilidade",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="objetivos",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="justificativa",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="etapa",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="ficha_tecnica",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="impacto_ambiental",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="especificacao_tecnica",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="providencia",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="democratizacao",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="sinopse",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="resumo",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="created_at",
     *                         type="string",
     *                         example="2023-02-23T12:33:45.000000Z"
     *                     ),
     *                   @OA\Property(
     *                         property="uppated_at",
     *                         type="string",
     *                         example="2023-02-25T12:33:45.000000Z"
     *                     ),
     *                    @OA\Property(
     *                         property="valor_projeto",
     *                         type="string",
     *                         example="78000.36"
     *                     ),
     *                    @OA\Property(
     *                         property="outras_fontes",
     *                         type="string",
     *                         example="0"
     *                     ),
     *                   @OA\Property(
     *                         property="valor_proposta",
     *                         type="string",
     *                         example="454587"
     *                     ),
     *                    @OA\Property(
     *                         property="valor_solicitado",
     *                         type="string",
     *                         example="454587"
     *                     ),
     *                    @OA\Property(
     *                         property="objetivo",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                    @OA\Property(
     *                         property="estrategia_execucao",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                    @OA\Property(
     *                         property="link_incentivadores",
     *                         type="string",
     *                         example="http://link_example.com"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
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
    /**
     * @OA\Get(
     *      path="/projects/{id}",
     *      operationId="getProjectById",
     *      tags={"Projects"},
     *      summary="Get project information by ID",
     *      description="Returns project data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Project id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *      @OA\JsonContent(
     *                     @OA\Property(
     *                         property="id_projeto",
     *                         type="number",
     *                         example=123
     *                     ),
     *                     @OA\Property(
     *                         property="pronac",
     *                         type="string",
     *                         example="12345"
     *                     ),
     *                    @OA\Property(
     *                         property="ano_projeto",
     *                         type="string",
     *                         example="2023"
     *                     ),
     *                    @OA\Property(
     *                         property="nome",
     *                         type="string",
     *                         example="Festival de Blumenau"
     *                     ),
     *                    @OA\Property(
     *                         property="segmento",
     *                         type="string",
     *                         example="Exposição de Artes Visuais"
     *                     ),
     *                    @OA\Property(
     *                         property="area",
     *                         type="string",
     *                         example="Artes Visuais"
     *                     ),
     *                    @OA\Property(
     *                         property="uf",
     *                         type="string",
     *                         example="SC"
     *                     ),
     *                    @OA\Property(
     *                         property="municipio",
     *                         type="string",
     *                         example="Blumenau"
     *                     ),
     *                    @OA\Property(
     *                         property="data_inicio",
     *                         type="string",
     *                         example="2023-02-23 00:00:00"
     *                     ),
     *                    @OA\Property(
     *                         property="data_termino",
     *                         type="string",
     *                         example="2023-02-28 00:00:00"
     *                     ),
     *                    @OA\Property(
     *                         property="situacao",
     *                         type="string",
     *                         example="Autorizada a captação"
     *                     ),
     *                    @OA\Property(
     *                         property="mecanismo",
     *                         type="string",
     *                         example="Mecenato"
     *                     ),
     *                    @OA\Property(
     *                         property="enquadramento",
     *                         type="string",
     *                         example="Artigo XXX"
     *                     ),
     *                    @OA\Property(
     *                         property="valor_captado",
     *                         type="string",
     *                         example="65000"
     *                     ),
     *                    @OA\Property(
     *                         property="valor_aprovado",
     *                         type="string",
     *                         example="20000"
     *                     ),
     *                    @OA\Property(
     *                         property="acessibilidade",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="objetivos",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="justificativa",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="etapa",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="ficha_tecnica",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="impacto_ambiental",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="especificacao_tecnica",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="providencia",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="democratizacao",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="sinopse",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="resumo",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                   @OA\Property(
     *                         property="created_at",
     *                         type="string",
     *                         example="2023-02-23T12:33:45.000000Z"
     *                     ),
     *                   @OA\Property(
     *                         property="uppated_at",
     *                         type="string",
     *                         example="2023-02-25T12:33:45.000000Z"
     *                     ),
     *                    @OA\Property(
     *                         property="valor_projeto",
     *                         type="string",
     *                         example="78000.36"
     *                     ),
     *                    @OA\Property(
     *                         property="outras_fontes",
     *                         type="string",
     *                         example="0"
     *                     ),
     *                   @OA\Property(
     *                         property="valor_proposta",
     *                         type="string",
     *                         example="454587"
     *                     ),
     *                    @OA\Property(
     *                         property="valor_solicitado",
     *                         type="string",
     *                         example="454587"
     *                     ),
     *                    @OA\Property(
     *                         property="objetivo",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                    @OA\Property(
     *                         property="estrategia_execucao",
     *                         type="string",
     *                         example="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
     *                     ),
     *                    @OA\Property(
     *                         property="link_incentivadores",
     *                         type="string",
     *                         example="http://link_example.com"
     *                     )
     *          )
     *       ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Project not found",
     *      @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="No query results for model [App\\Models\\Rouanet] #id"),
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        $project = Rouanet::find($id);

        if (is_null($project)) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        return $project;
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

    /**
     * @OA\Post(
     *      path="/projects",
     *      tags={"Projects"},
     *      summary="Create a new project",
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                      type="object",
     *                      @OA\Property(
     *                          property="pronac",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="ano_projeto",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="nome",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="segmento",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="area",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="uf",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="municipio",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="data_inicio",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="data_termino",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="situacao",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="mecanismo",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="enquadramento",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="valor_captado",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="valor_aprovado",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="acessibilidade",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="objetivos",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="justificativa",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="etapa",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="ficha_tecnica",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="impacto_ambiental",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="especificacao_tecnica",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="providencia",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="democratizacao",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="sinopse",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="resumo",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="created_at",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="updated_at",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="valor_projeto",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="outras_fontes",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="valor_proposta",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="valor_solicitado",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="objetivo",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="estrategia_execucao",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="link_incentivadores",
     *                          type="string"
     *                      )
     *                 ),
     *                 example={
     *                     "pronac":"12345",
     *                     "ano_projeto":"2023",
     *                     "nome":"Nome do Projeto",
     *                     "segmento":"Exposição de Artes Visuais",
     *                     "area":"Artes Visuais",
     *                     "uf":"SC",
     *                     "municipio": "Blumenau",
     *                     "data_inicio":"2023-02-23 00:00:00",
     *                     "data_termino":"2023-02-28 00:00:00",
     *                     "situacao":"Autorizada a captação",
     *                     "mecanismo":"Mecenato",
     *                     "enquadramento":"Artigo XXX",
     *                     "valor_captado":"65000",
     *                     "valor_aprovado":"20000",
     *                     "acessibilidade":"Lorem ipsum dolor sit amet.",
     *                     "objetivos":"Lorem ipsum dolor sit amet.",
     *                     "justificativa":"Lorem ipsum dolor sit amet.",
     *                     "etapa":"Lorem ipsum dolor sit amet.",
     *                     "ficha_tecnica":"Lorem ipsum dolor sit amet.",
     *                     "impacto_ambiental":"Lorem ipsum dolor sit amet.",
     *                     "especificacao_tecnica":"Lorem ipsum dolor sit amet.",
     *                     "providencia":"Lorem ipsum dolor sit amet.",
     *                     "democratizacao":"Lorem ipsum dolor sit amet.",
     *                     "sinopse":"Lorem ipsum dolor sit amet.",
     *                     "resumo":"Lorem ipsum dolor sit amet.",
     *                     "created_at":"2023-02-23T12:33:45.000000Z",
     *                     "updated_at":"2023-02-25T12:33:45.000000Z",
     *                     "valor_projeto":"78000.36",
     *                     "outras_fontes":"0",
     *                     "valor_proposta":"454587",
     *                     "valor_solicitado":"454587",
     *                     "objetivo":"Lorem ipsum dolor sit amet.",
     *                     "estrategia_execucao":"Lorem ipsum dolor sit amet.",
     *                     "link_incentivadores": "http://link_example.com"
     *                }
     *             )
     *         )
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="CREATED",
     *          @OA\JsonContent(
     *              @OA\Property(property="id_projeto", type="number", example=1),
     *              @OA\Property(property="pronac", type="string", example="12345"),
     *              @OA\Property(property="ano_projeto", type="string", example="2023"),
     *              @OA\Property(property="nome", type="string", example="Nome do Projeto"),
     *              @OA\Property(property="segmento", type="string", example="Exposição de Artes Visuais"),
     *              @OA\Property(property="area", type="string", example="Artes Visuais"),
     *              @OA\Property(property="uf", type="string", example="SC"),
     *              @OA\Property(property="municipio", type="string", example="Blumenau"),
     *              @OA\Property(property="data_inicio", type="string", example="2023-02-23 00:00:00"),
     *              @OA\Property(property="data_termino", type="string", example="2023-02-28 00:00:00"),
     *              @OA\Property(property="situacao", type="string", example="Autorizada a captação"),
     *              @OA\Property(property="mecanismo", type="string", example="Mecenato"),
     *              @OA\Property(property="enquadramento", type="string", example="Artigo XXX"),
     *              @OA\Property(property="valor_captado", type="string", example="65000"),
     *              @OA\Property(property="valor_aprovado", type="string", example="20000"),
     *              @OA\Property(property="acessibilidade", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="objetivos", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="justificativa", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="etapa", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="ficha_tecnica", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="impacto_ambiental", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="especificacao_tecnica", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="providencia", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="democratizacao", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="sinopse", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="resumo", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="created_at", type="string", example="2023-02-23T12:33:45.000000Z"),
     *              @OA\Property(property="updated_at", type="string", example="2023-02-25T12:33:45.000000Z"),
     *              @OA\Property(property="valor_projeto", type="string", example="78000.36"),
     *              @OA\Property(property="outras_fontes", type="string", example="0"),
     *              @OA\Property(property="valor_proposta", type="string", example="454587"),
     *              @OA\Property(property="valor_solicitado", type="string", example="454587"),
     *              @OA\Property(property="objetivo", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="estrategia_execucao", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="link_incentivadores", type="string", example="http://link_example.com")
     *          )
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="UNPROCESSABLE CONTENT",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="The pronac field is required."),
     *              @OA\Property(property="errors", type="string", example="Object of errors"),
     *          )
     *      )
     * )
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

        $request->validate([
            'pronac' => 'required',
            'ano_projeto' => 'required',
            'nome' => 'required',
            'segmento' => 'required',
            'area' => 'required',
            'uf' => 'required',
            'municipio' => 'required',
            'data_inicio' => 'required',
            'data_termino' => 'required',
            'situacao' => 'required',
            'mecanismo' => 'required',
            'enquadramento' => 'required',
            'valor_captado' => 'required',
            'valor_aprovado' => 'required',
            'acessibilidade' => 'required',
            'objetivos' => 'required',
            'justificativa' => 'required',
            'etapa' => 'required',
            'ficha_tecnica' => 'required',
            'impacto_ambiental' => 'required',
            'especificacao_tecnica' => 'required',
            'providencia' => 'required',
            'democratizacao' => 'required',
            'sinopse' => 'required',
            'resumo' => 'required',
            'valor_projeto' => 'required',
            'outras_fontes' => 'required',
            'valor_proposta' => 'required',
            'valor_solicitado' => 'required',
            'objetivo' => 'required',
            'estrategia_execucao' => 'required',
            'link_incentivadores' => 'required',
        ]);


        $project->save();

        return response()->json($project, 201);

        // return redirect('/')->with('msg', 'Projeto criado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    /**
     * Delete a project by ID
     * @OA\Delete (
     *     path="/projects/{id}",
     *     tags={"Projects"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="number")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="NO CONTENT"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied"
     *     ),
     *      @OA\Response(
     *          response=404,
     *          description="NOT FOUND",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Project not found"),
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        $project = Rouanet::find($id);

        if (is_null($project)) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        $project->delete();

        return response()->noContent();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function editView($id)
    {
        $project = Rouanet::findOrFail($id);

        return view('projects.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */

    /**
     * Update project information by ID
     * @OA\Put (
     *     path="/projects/update/{id}",
     *     tags={"Projects"},
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="number")
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                      type="object",
     *                      @OA\Property(
     *                          property="pronac",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="ano_projeto",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="nome",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="segmento",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="area",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="uf",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="municipio",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="data_inicio",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="data_termino",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="situacao",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="mecanismo",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="enquadramento",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="valor_captado",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="valor_aprovado",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="acessibilidade",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="objetivos",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="justificativa",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="etapa",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="ficha_tecnica",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="impacto_ambiental",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="especificacao_tecnica",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="providencia",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="democratizacao",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="sinopse",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="resumo",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="created_at",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="updated_at",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="valor_projeto",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="outras_fontes",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="valor_proposta",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="valor_solicitado",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="objetivo",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="estrategia_execucao",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="link_incentivadores",
     *                          type="string"
     *                      )
     *                 ),
     *                 example={
     *                     "pronac":"12345",
     *                     "ano_projeto":"2023",
     *                     "nome":"Nome do Projeto Editado",
     *                     "segmento":"Exposição de Artes Visuais",
     *                     "area":"Artes Visuais",
     *                     "uf":"SC",
     *                     "municipio": "Blumenau",
     *                     "data_inicio":"2023-02-23 00:00:00",
     *                     "data_termino":"2023-02-28 00:00:00",
     *                     "situacao":"Autorizada a captação",
     *                     "mecanismo":"Mecenato",
     *                     "enquadramento":"Artigo XXX",
     *                     "valor_captado":"65000",
     *                     "valor_aprovado":"20000",
     *                     "acessibilidade":"Lorem ipsum dolor sit amet.",
     *                     "objetivos":"Lorem ipsum dolor sit amet.",
     *                     "justificativa":"Lorem ipsum dolor sit amet.",
     *                     "etapa":"Lorem ipsum dolor sit amet.",
     *                     "ficha_tecnica":"Lorem ipsum dolor sit amet.",
     *                     "impacto_ambiental":"Lorem ipsum dolor sit amet.",
     *                     "especificacao_tecnica":"Lorem ipsum dolor sit amet.",
     *                     "providencia":"Lorem ipsum dolor sit amet.",
     *                     "democratizacao":"Lorem ipsum dolor sit amet.",
     *                     "sinopse":"Lorem ipsum dolor sit amet.",
     *                     "resumo":"Lorem ipsum dolor sit amet.",
     *                     "created_at":"2023-02-23T12:33:45.000000Z",
     *                     "updated_at":"2023-02-25T12:33:45.000000Z",
     *                     "valor_projeto":"78000.36",
     *                     "outras_fontes":"0",
     *                     "valor_proposta":"454587",
     *                     "valor_solicitado":"454587",
     *                     "objetivo":"Lorem ipsum dolor sit amet.",
     *                     "estrategia_execucao":"Lorem ipsum dolor sit amet.",
     *                     "link_incentivadores": "http://link_example_edit.com"
     *                }
     *             )
     *         )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *              @OA\Property(property="id_projeto", type="number", example=1),
     *              @OA\Property(property="pronac", type="string", example="12345"),
     *              @OA\Property(property="ano_projeto", type="string", example="2023"),
     *              @OA\Property(property="nome", type="string", example="Nome do Projeto Editado"),
     *              @OA\Property(property="segmento", type="string", example="Exposição de Artes Visuais"),
     *              @OA\Property(property="area", type="string", example="Artes Visuais"),
     *              @OA\Property(property="uf", type="string", example="SC"),
     *              @OA\Property(property="municipio", type="string", example="Blumenau"),
     *              @OA\Property(property="data_inicio", type="string", example="2023-02-23 00:00:00"),
     *              @OA\Property(property="data_termino", type="string", example="2023-02-28 00:00:00"),
     *              @OA\Property(property="situacao", type="string", example="Autorizada a captação"),
     *              @OA\Property(property="mecanismo", type="string", example="Mecenato"),
     *              @OA\Property(property="enquadramento", type="string", example="Artigo XXX"),
     *              @OA\Property(property="valor_captado", type="string", example="65000"),
     *              @OA\Property(property="valor_aprovado", type="string", example="20000"),
     *              @OA\Property(property="acessibilidade", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="objetivos", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="justificativa", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="etapa", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="ficha_tecnica", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="impacto_ambiental", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="especificacao_tecnica", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="providencia", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="democratizacao", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="sinopse", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="resumo", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="created_at", type="string", example="2023-02-23T12:33:45.000000Z"),
     *              @OA\Property(property="updated_at", type="string", example="2023-02-25T12:33:45.000000Z"),
     *              @OA\Property(property="valor_projeto", type="string", example="78000.36"),
     *              @OA\Property(property="outras_fontes", type="string", example="0"),
     *              @OA\Property(property="valor_proposta", type="string", example="454587"),
     *              @OA\Property(property="valor_solicitado", type="string", example="454587"),
     *              @OA\Property(property="objetivo", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="estrategia_execucao", type="string", example="Lorem ipsum dolor sit amet."),
     *              @OA\Property(property="link_incentivadores", type="string", example="http://link_example_edit.com")
     *          )
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="UNPROCESSABLE CONTENT",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="The pronac field is required."),
     *              @OA\Property(property="errors", type="string", example="Object of errors"),
     *          )
     *      )
     * )
     */
    public function update(Request $request)
    {
        $project = Rouanet::find($request->id);

        if (is_null($project)) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        $request->validate([
            'pronac' => 'required',
            'ano_projeto' => 'required',
            'nome' => 'required',
            'segmento' => 'required',
            'area' => 'required',
            'uf' => 'required',
            'municipio' => 'required',
            'data_inicio' => 'required',
            'data_termino' => 'required',
            'situacao' => 'required',
            'mecanismo' => 'required',
            'enquadramento' => 'required',
            'valor_captado' => 'required',
            'valor_aprovado' => 'required',
            'acessibilidade' => 'required',
            'objetivos' => 'required',
            'justificativa' => 'required',
            'etapa' => 'required',
            'ficha_tecnica' => 'required',
            'impacto_ambiental' => 'required',
            'especificacao_tecnica' => 'required',
            'providencia' => 'required',
            'democratizacao' => 'required',
            'sinopse' => 'required',
            'resumo' => 'required',
            'valor_projeto' => 'required',
            'outras_fontes' => 'required',
            'valor_proposta' => 'required',
            'valor_solicitado' => 'required',
            'objetivo' => 'required',
            'estrategia_execucao' => 'required',
            'link_incentivadores' => 'required',
        ]);

        $project->update($request->all());
    }
}
