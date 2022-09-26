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
}
