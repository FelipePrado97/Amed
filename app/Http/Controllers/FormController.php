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
        $forms = Form::all();
        return view('pages.formularios.formularios',['forms' => $forms]);
    }

    public function destroy($id) {

        Form::findOrFail($id)->delete();

        return redirect('/formularios')->with('msg','Formulario excluído com sucesso!');
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
