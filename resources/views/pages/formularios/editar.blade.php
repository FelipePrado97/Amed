@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.cards2')

    <div class="card-body">
        <div class="card" style="height: 5rem;">
            <div class="card-body">
                <p class="card-text"></p>
            </div>
        </div>
        <div class="card">
        <div>
        <form id="form" action="/formularios/update/{{$form->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" placeholder="Título: " id="titulo" name="titulo" value="{{$form->titulo}}"></input>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" placeholder="Tipo: " id="tipo" name="tipo" value="{{$form->tipo}}"></input>
            </div>
            <!--<input type="submit" class="btn btn-primary" value="Salvar">-->
        
        <div class="saveDataWrap">
        <button class="btn btn-primary" id="saveData" type="button">SALVAR</button>
        </div>
        </div>
        <div id="build-wrap"></div>
        </form>
        </div>

    @include('layouts.footers.auth')
@endsection
@push('js')
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    
    
    <script>
        var texto = '{{$form->form}}';
            var objeto = JSON.parse(texto.replace(/&quot;/g,'"'));;
            console.log(objeto);
        jQuery(function($) {
            var fbTemplate = document.getElementById('build-wrap'),
                options = {
                    dataType: 'json',
                    formData: objeto
                };
            const formBuilder = $(fbTemplate).formBuilder(options);
            
        
            document.getElementById("saveData").addEventListener("click", () => {
                console.log("Botão de salvar Clicado");
                const result = formBuilder.actions.save();
                var input = document.createElement("input");
                input.type = "text";
                input.name = "array";
                input.value = JSON.stringify(result);   
                form.appendChild(input);
                form.submit();
            });
        });
        
            
            
    </script>
    
@endpush('js')