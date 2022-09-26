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
                <select class="form-group" aria-label="form-control form-control-lg" id='selectcadastro' onclick="selecionado()">
                    <option selected>Tipo de Cadastro</option>
                    <option value="medico">Médico</option>
                    <option value="paciente">Paciente</option>
                </select>

                <div id="divmedico" style="display: none;">
                    <form id="formmedico" action="/pessoaadicionarmedico" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Nome do Médico: " id="nomemedico" name="nomemedico"></input>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="E-mail: " id="emailmedico" name="emailmedico"></input>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="CPF: " id="cpfmedico" name="cpfmedico"></input>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Telefone: " id="telefonemedico" name="telefonemedico"></input>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="CRM: " id="crmmedico" name="crmmedico"></input>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="RQE: " id="rqemedico" name="rqemedico"></input>
                        </div>
                        <div class="form-group">
                            <label> Currículo: </label>
                            <input type="file" class="form-control form-control-lg" placeholder="Currículo: " id="curriculo" name="curriculo" accept=" .doc, .docx, .pdf"></input>
                        </div>
                        <div class="form-group">
                        <label> Diploma: </label>
                            <input type="file" class="form-control form-control-lg" placeholder="Diploma: " id="diploma" name="diploma" accept=" .doc, .docx, .pdf"></input>
                        </div>
                        <div class="form-group">
                        <label> Assinatura: </label>
                            <input type="file" class="form-control form-control-lg" placeholder="Assinatura: " id="assinatura" name="assinatura" accept=" .doc, .docx, .pdf, .png, .jpg, .jpeg"></input>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" id="saveData" type="button" onclick="checarDados()">Adicionar</button>    
                        </div>
                    </form>
                </div><!--divmedico-->
                <div id="divpaciente" style="display: none;">
                    <form id="formpaciente" action="/pessoaadicionar" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Nome do Paciente: " id="titulo" name="titulo"></input>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Data de Nascimento: " id="tipo" name="tipo"></input>
                        </div>
                    </form>
                </div><!--divpaciente-->
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
@endsection
@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    
    <script>
      
    function selecionado() {
        
    var select = document.getElementById('selectcadastro');
        var opcaoValor =  select.options[select.selectedIndex].value;
                  

        console.log(opcaoValor);

        if(opcaoValor == "medico"){
            document.getElementById('divpaciente').style.display = "none";
            document.getElementById('divmedico').style.display = "block";
            
        }else if(opcaoValor == "paciente"){
            document.getElementById('divmedico').style.display = "none";
            document.getElementById('divpaciente').style.display = "block";
        }      
    }
    function checarDados() {
        
        console.log("Botão de salvar medico Clicado");
        var msg = "";
        if(document.getElementById('nomemedico').value ==""){
            msg = msg +" NOME não pode ser Vazio! \n";
        }
        if(document.getElementById('cpfmedico').value ==""){
            msg = msg +" CPF não pode ser Vazio! \n";
        }
        if(document.getElementById('emailmedico').value ==""){
            msg = msg +" EMAIL não pode ser Vazio! \n";
        }
        if(document.getElementById('crmmedico').value ==""){
            msg = msg +" CRM não pode ser Vazio! \n";
        }
        if(document.getElementById('telefonemedico').value ==""){
            msg = msg +" TELEFONE não pode ser Vazio! \n";
        }
        if(msg == ''){
            console.log('Deu certo');
            //enviar formulario
            document.getElementById('formmedico').submit();
            //  formmedico.submit();

        }else{
            alert(msg);
            msg = '';
        }
        
    }

    </script>

@endpush('js')