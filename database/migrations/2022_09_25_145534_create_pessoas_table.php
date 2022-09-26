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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('funcao');
            $table->string('password')->nullable();
            $table->string('nome');
            $table->string('genero')->nullable();
            $table->date('datadenascimento')->nullable();
            $table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->string('telefone')->unique();
            $table->string('telefoneopcional')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('cidade')->nullable();
            $table->string('cep')->nullable();
            $table->string('bairro')->nullable();
            $table->string('rua')->nullable();
            $table->string('numerodacasa')->nullable();
            //medico
            $table->string('crm')->unique()->nullable();
            $table->string('rqe')->nullable();
            $table->string('foto')->nullable();
            $table->string('curriculo')->nullable();
            $table->string('diploma')->nullable();
            $table->string('assinatura')->nullable();
            //paciente
            $table->string('convenio')->nullable();
            $table->string('peso')->nullable();//
            $table->string('altura')->nullable();//
            $table->string('idade')->nullable();//tem q calcular automatico
            $table->string('etnia')->nullable();
            $table->string('estado civil')->nullable();
            $table->string('conjuge')->nullable();
            $table->string('fumante')->nullable();
            $table->string('filhos')->nullable();
            $table->string('qtd_filhos')->nullable();
            $table->string('menarca')->nullable();
            $table->string('menopausa')->nullable();
            
            $table->longText('queixa')->nullable();//1
            $table->longText('antecedentehistorico')->nullable();
            $table->longText('antecedentealergico')->nullable();
            $table->string('idade_constatado_problema')->nullable();
            $table->longText('tempo_sintomas')->nullable();
            $table->longText('providencias_tomadas')->nullable();
            $table->longText('cirurgias_realizadas')->nullable();
            $table->string('fez_radioterapia')->nullable();
            $table->longText('qtd_sessoes_radioterapia')->nullable();
            $table->string('perda_de_cabelo')->nullable();
            $table->string('fez_quimioterapia')->nullable();
            $table->longText('qtd_sessoes_quimioterapia')->nullable();
            $table->string('transfusao_de_sangue')->nullable();
            $table->longText('uso_de_medicacoes')->nullable();
            $table->longText('como_reagiu')->nullable();
            $table->longText('oque_mudou_na_vida')->nullable();
            $table->string('sono_e_repouso')->nullable();
            $table->string('pratica_atividade_fisica')->nullable();
            $table->string('atividades_lazer')->nullable();
            $table->string('alimentacao_balanceada')->nullable();
            $table->longText('alimentacao_quais')->nullable();
            $table->string('toma_agua')->nullable();

            $table->string('CID')->nullable();
            $table->string('Estadiamento')->nullable();
            $table->string('anexar_exames')->nullable();
            $table->longText('medicamentos_receitados')->nullable();
            $table->date('medicamentos_receitados_data')->nullable();
            $table->string('exames_solicitados')->nullable();
            $table->date('exames_solicitados_data')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
};
