<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function pessoa() {
        $forms = Pessoa::all();
        return view('pages.pessoa.listapessoas',['forms' => $forms]);
    }
    public function adicionar() {
        return view('pages.pessoa.adicionar');
    }
    public function adicionarmedico(Request $request) {
        $form = new Pessoa;
        

        
        $form->funcao = 'Médico';
        $form->password = $request->cpfmedico;
        $form->nome = $request->nomemedico;
        $form->email = $request->emailmedico;
        $form->cpf = $request->cpfmedico;
        $form->telefone = $request->telefonemedico;
        $form->crm = $request->crmmedico;
        $form->rqe = $request->rqemedico;
        $form->curriculo = $request->curriculo;
        $form->diploma = $request->diploma;
        $form->assinatura = $request->assinatura;
        
        $form->save();
        return redirect('/pessoa');
    }
    public function store(){
        return view('pages.pessoa.listapessoas');
    }
}
