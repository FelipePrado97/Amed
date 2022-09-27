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
        $formEST = new Estadiamento;
        
        $teste = Cid::where('ref', $request->ref)->where('sub', $request->sub)->first();
        if($teste == ""){
            echo('vamos cadastrar');
            $formCID->ref = $request->ref;
            $formCID->sub = $request->sub;
            $formCID->descricao = $request->descricao;
            $formCID->variaveis = $request->variaveis;
            
            
            $formEST->cid = $request->ref;
            $formEST->codigoestadiamento = $request->codigoestadiamento;
            $formEST->estagio = $request->estagio;
            $formEST->upstaging = $request->upstaging;
            $formEST->downtaging = $request->downtaging;
            $formEST->nomigration = $request->nomigration;
            $formEST->exames_recomendados = $request->exames_recomendados   ;
            $formEST->tratamento = $request->tratamento;
            $formEST->medicamentos = $request->medicamentos;

            $formCID->save();
            $formEST->save();
            
            return redirect('/listacid10');
        }else{
            echo('cid já existente');
            return view('pages.cid10.adicionarplano');
        }
        
        
    }
    public function cadastrarPlano(Request $request){
        return redirect('/');
    }
    public function cadastrarPresc(Request $request){
        return redirect('/');
    }
}
