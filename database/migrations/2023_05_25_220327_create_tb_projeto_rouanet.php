<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rouanets', function (Blueprint $table) {
            $table->increments('id_projeto');
            $table->string('pronac', 191)->nullable(false);
            $table->string('ano_projeto' , 191)->nullable(false);
            $table->string('nome', 191)->nullable(false);
            $table->string('segmento', 191)->nullable(false);
            $table->string('area', 191)->nullable(false);
            $table->string('uf', 191)->nullable(false);
            $table->string('municipio', 191)->nullable(false);
            $table->dateTime('data_inicio')->nullable(false);
            $table->dateTime('data_termino')->nullable(false);
            $table->string('situacao', 191)->nullable(false);
            $table->string('mecanismo', 191)->nullable(false);
            $table->string('enquadramento', 191)->nullable(false);
            $table->string('valor_captado', 191)->nullable(false);
            $table->string('valor_aprovado', 191)->nullable(false);
            $table->text('acessibilidade')->nullable(false);
            $table->text('objetivos')->nullable();
            $table->text('justificativa')->nullable();
            $table->text('etapa')->nullable();
            $table->text('ficha_tecnica')->nullable(false);
            $table->text('impacto_ambiental')->nullable(false);
            $table->text('especificacao_tecnica')->nullable(false);
            $table->text('providencia')->nullable(false);
            $table->text('democratizacao')->nullable(false);
            $table->text('sinopse')->nullable(false);
            $table->text('resumo')->nullable(false);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('valor_projeto', 100)->nullable(false);
            $table->string('outras_fontes', 100)->nullable(false);
            $table->string('valor_proposta', 100)->nullable(false);
            $table->string('valor_solicitado', 100)->nullable(false);
            $table->longText('objetivo')->nullable(false);
            $table->longText('estrategia_execucao')->nullable(false);
            $table->string('link_incentivadores', 255)->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rouanets');
    }
};
