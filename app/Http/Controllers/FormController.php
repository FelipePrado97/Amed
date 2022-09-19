<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function adicionar(){

        $forms = Form::all();
        return view('pages.formularios.adicionar',['forms'=> $forms]);
    }
    public function forms(){
        $forms = Form::all();
        return view('pages.formularios.formularios',['forms'=> $forms]);
    }

    public function store(Request $request){
        $forms = new Form;

        $forms->id = $request->id;
        $forms->titulo = $request->titulo;
        $forms->tipo = $request->tipo;

        $forms->save(); 
    }
}
