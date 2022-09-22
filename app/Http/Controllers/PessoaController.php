<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function pessoa() {
        return view('pages.pessoa.listapessoas');
    }
    public function adicionar() {
        return view('pages.pessoa.adicionar');
    }
}
