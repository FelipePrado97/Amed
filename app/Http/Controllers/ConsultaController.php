<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Consulta;


class ConsultaController extends Controller
{
    public function listarconsultas(){
        return view('pages.consulta.listarconsultas');
    }
    public function adicionarconsulta(){
        $msg = "";
        return view('pages.consulta.novaconsulta',['msg'=> $msg]);
    }
    public function buscarpaciente(Request $request){
        $msg = "CPF Não Encontrado!";
        $paciente = Pessoa::where('cpf', $request->cpf)->first();
                 
        if($paciente) {
            
            return view('pages.consulta.consulta',['paciente'=>$paciente]);
        }
        else{
            return view('pages.consulta.novaconsulta',['msg'=> $msg]);
        }
    }

    public function anamnese(Request $request){
        
        $form = Pessoa::find($request->id);
        if($request->queixa!=""){$form->queixa = $request->queixa;}
        if($request->peso!=""){$form->peso = $request->peso;} 
        if($request->altura!=""){$form->altura = $request->altura;} 
        if($request->etnia!=""){$form->etnia = $request->etnia;} 
        if($request->fumante!=""){$form->fumante = $request->fumante;} 
        if($request->altura!=""){$form->altura = $request->altura;} 
        if($request->qtd_filhos!=""){$form->qtd_filhos = $request->qtd_filhos;} 
        if($request->antecedentehistorico!=""){$form->antecedentehistorico = $request->antecedentehistorico;} 
        if($request->antecedentealergico!=""){ $form->antecedentealergico = $request->antecedentealergico;} 
        if($request->idade_constatado_problema!=""){$form->idade_constatado_problema = $request->idade_constatado_problema;} 
        if($request->tempo_sintomas!=""){$form->tempo_sintomas = $request->tempo_sintomas;} 
        if($request->providencias_tomadas!=""){$form->providencias_tomadas = $request->providencias_tomadas;} 
        if($request->cirurgias_realizadas!=""){$form->cirurgias_realizadas = $request->cirurgias_realizadas;} 
        if($request->fez_radioterapia!=""){$form->fez_radioterapia = $request->fez_radioterapia;} 
        if($request->qtd_sessoes_radioterapia!=""){$form->qtd_sessoes_radioterapia = $request->qtd_sessoes_radioterapia;} 
        if($request->perda_de_cabelo!=""){$form->perda_de_cabelo = $request->perda_de_cabelo;} 
        if($request->fez_quimioterapia!=""){$form->fez_quimioterapia = $request->fez_quimioterapia;} 
        if($request->qtd_sessoes_quimioterapia!=""){$form->qtd_sessoes_quimioterapia = $request->qtd_sessoes_quimioterapia;}     
        if($request->transfusao_de_sangue!=""){$form->transfusao_de_sangue = $request->transfusao_de_sangue;} 
        if($request->uso_de_medicacoes!=""){$form->uso_de_medicacoes = $request->uso_de_medicacoes;}
        if($request->como_reagiu!=""){$form->como_reagiu = $request->como_reagiu;}
        if($request->oque_mudou_na_vida!=""){$form->oque_mudou_na_vida = $request->oque_mudou_na_vida;}
        if($request->sono_e_repouso!=""){$form->sono_e_repouso = $request->sono_e_repouso;}
        if($request->pratica_atividade_fisica!=""){$form->pratica_atividade_fisica = $request->pratica_atividade_fisica;}
        if($request->atividades_lazer!=""){$form->atividades_lazer = $request->atividades_lazer;}
        if($request->alimentacao_balanceada!=""){$form->alimentacao_balanceada = $request->alimentacao_balanceada;}
        if($request->alimentacao_quais!=""){$form->alimentacao_quais = $request->alimentacao_quais;}
        if($request->toma_agua!=""){$form->toma_agua = $request->toma_agua;}
        if($request->anexar_exames!=""){$form->anexar_exames = $request->anexar_exames;}

        $form->update();

        return view('pages.consulta.consulta',['paciente'=>$form]);
    }
}
