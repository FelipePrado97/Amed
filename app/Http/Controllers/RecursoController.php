<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recurso;

class RecursoController extends Controller
{
    public function recurso() {
        return view('pages.recurso.listarrecursos');
    }
    public function adicionar() {
        return view('pages.recurso.adicionar');
    }
}
