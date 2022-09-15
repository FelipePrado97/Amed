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
        <div><input class="form-control form-control-lg" placeholder="Título: " id=titulo-formulario></input></div>
        <div class="saveDataWrap">
        <button class="btn btn-primary" id="saveData" type="button">SALVAR</button>
        </div>
        <div id="build-wrap"></div>

        </div>
        <div class="card">
        <div class="table-responsive">
            
            <table class="table align-items-center">
                <thead class="thead-light">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Criado Em</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="tabela-lista-formularios">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
@endsection
@push('js')
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    
    
    <script> 
            jQuery(($) => {
        const fbEditor = document.getElementById("build-wrap");
        const formBuilder = $(fbEditor).formBuilder();

        document.getElementById("saveData").addEventListener("click", () => {
            console.log("Botão de salvar Clicado");
            //conferir se foi dado títutlo
            
            if(document.getElementById('titulo-formulario').value !=""){
                const result = formBuilder.actions.save();
            console.log("result:", result);

            formulario.salvar(result);
            }else{
                alert("Favor, preencha o Título do Formulário")
            }
                        
            //window.location.href = "/formularios";

        });
        });
    </script>
    <script>
        class Formulario {
            
            constructor() {
                this.id = 1;
                this.arrayFormularios = [];
            }

            
            salvar(result){
                var i =0;
               
                for(i=0; i<result.length; i++) {
                    //result['Id'] = i;
                    result['Titulo'] = document.getElementById('titulo-formulario').value;
                    result['Data'] = new Date();   
                }
             let formulario = this.lerDados(result);
             if(this.validaCampos(formulario)){
                this.adicionar(formulario);
                
             }
             this.listaTabela();
             
            }
            listaTabela(){
                console.log("entrou lista tabela"); 
                let tbody = document.getElementById('tabela-lista-formularios');
                tbody.innerText = '';

                for(let i = 0; i< this.arrayFormularios.length; i++){
                    
                    let tr = tbody.insertRow();

                    let td_id = tr.insertCell();
                    let td_titulo = tr.insertCell();
                    let td_tipo = tr.insertCell();
                    let td_data = tr.insertCell();
                    let td_acao = tr.insertCell();
                    
                    td_id.innerText = this.arrayFormularios[i].id;
                    td_titulo.innerText = this.arrayFormularios[i].titulo;
                    td_tipo.innerText = 'Resposta / Devolutiva';
                    td_data.innerText = this.arrayFormularios[i].data;

                    let imgEdit = document.createElement('img');
                    imgEdit.src = "../assets/img/brand/editar.svg" ;
                    td_acao.appendChild(imgEdit);
                    //imgEdit.src = "img/excluir.png" ;
                    //td_acao.appendChild(imgEdit);
                   // imgEdit.src = "img/duplicar.png" ;
                   // td_acao.appendChild(imgEdit);

                }
            }

            adicionar(formulario){
                console.log("entrou adicionar");
                this.arrayFormularios.push(formulario);
                this.id++;  
               

                //TENHO QUE FAZER O LINK DO JASON NA TABELA
            }

            
            lerDados(result) {
                console.log("ler dados");
                let formulario = {}

                formulario.id = this.id;
                formulario.titulo = result.Titulo;
                formulario.data = result.Data;
                formulario.dados = result;
                return formulario;
            }

            validaCampos(formulario){
                console.log("entrou valida campos");
                let msg = "";
                if(formulario.titulo == ""){
                    msg += " - Informe o nome do Formulário \n"
                }
                if(msg != ''){
                    alert(msg);
                    return false;
                }
                return true;
            }

            
        }

        var formulario = new Formulario();
    </script>
@endpush('js')