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

        return redirect('/formularios');
    }
    public function duplicar($id) {
        $form = Form::find($id);

        $formCopy = $form->replicate();
        $formCopy->created_at = now();
        $formCopy->updated_at = now();
        $formCopy->titulo = $formCopy->titulo .' - Copia';

        $formCopy->save();
        return redirect('/formularios');
    }
    public function edit($id){
        $form = Form::findOrFail($id);

        return view('pages.formularios.editar',['form'=> $form]);
    }
    public function update(Request $request){
        //Form::find($request->id)->update($request->all());
        $form = Form::find($request->id);

        $form->titulo = $request->titulo;
        $form->tipo = $request->tipo;
        $form->updated_at = now();
        $form->form = $request->array;

        $form->update();

        return redirect('/formularios');
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
