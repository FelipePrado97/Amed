<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function adicionar(){

        
        return view('pages.formularios.adicionar');
    }
    public function forms(){
        


        return view('pages.formularios.formularios');
        

    }

    public function store(Request $request){
        $form = new Form;

        //$request->id;
        $form->titulo = $request->titulo;
        $form->tipo = $request->tipo;
        $form->form = $request->array;
        
        $form->save();

        return redirect('/formularios');
    }
}
