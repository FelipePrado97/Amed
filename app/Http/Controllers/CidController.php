<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cid;
use App\Models\Estadiamento;

class CidController extends Controller
{
    public function listacid10(){
        $forms = Cid::all();
        return view('pages.cid10.listacid10',['forms' => $forms]);
    }
    public function adicionarplano(){
        return view('pages.cid10.adicionarplano');
    }
    public function cadastrarCID(Request $request){
        //verifica se CID existe
        $formCID = new Cid;
       
        $teste = Cid::where('cod_cid', $request->cod_cid)->first();
        if($teste == ""){
            
            $formCID->cod_cid = $request->cod_cid;
            $formCID->descricao = $request->descricao;
            $formCID->variaveis = $request->variaveis;
            $formCID->cod_estadiamento = $request->cod_estadiamento;
            $formCID->estagio = $request->estagio;
            $formCID->upstaging = $request->upstaging;
            $formCID->downtaging = $request->downtaging;
            $formCID->nomigration = $request->nomigration;
            $formCID->exames_recomendados = $request->exames_recomendados;
            $formCID->tratamentos_recomendados = $request->tratamentos_recomendados;
            $formCID->medicamentos_recomendados = $request->medicamentos_recomendados;
            $formCID->save();
           
            
            return redirect('/listacid10');
        }else{
            $teste = Cid::where('cod_estadiamento', $request->cod_estadiamento)->first();
            if($teste == ""){
                $formCID->cod_cid = $request->cod_cid;
                $formCID->descricao = $request->descricao;
                $formCID->variaveis = $request->variaveis;
                $formCID->cod_estadiamento = $request->cod_estadiamento;
                $formCID->estagio = $request->estagio;
                $formCID->upstaging = $request->upstaging;
                $formCID->downtaging = $request->downtaging;
                $formCID->nomigration = $request->nomigration;
                $formCID->exames_recomendados = $request->exames_recomendados;
                $formCID->tratamentos_recomendados = $request->tratamentos_recomendados;
                $formCID->medicamentos_recomendados = $request->medicamentos_recomendados;
                $formCID->save();
                return redirect('/listacid10');
            }else{
                return view('pages.cid10.adicionarplano');
            }
        }
        
        
    }
    public function cadastrarPlano(Request $request){
        return redirect('/');
    }
    public function cadastrarPresc(Request $request){
        return redirect('/');
    }
}
