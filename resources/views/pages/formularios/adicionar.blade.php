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

        <div class="saveDataWrap">
        <button id="saveData" type="button">SALVAR</button>
        </div>
        <div id="build-wrap"></div>

        </div>

        <div class="table-responsive">
            
            <table class="table align-items-center">
                <thead class="thead-light">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Criado Em</th>
                        </tr>
                    </thead>
                    <tbody id="tabela-lista-formularios">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">Editar</a>
                                        <a class="dropdown-item" href="#">Criar Cópia</a>
                                        <a class="dropdown-item" href="#">Excluir</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
            console.log("external save clicked");
            const result = formBuilder.actions.save();
            console.log("result:", result);

            formulario.salvar(result);
            
            //window.location.href = "/formularios";

        });
        });
    </script>
    <script>
        class Formulario{

            constructor(){
                this.id = 1;
                this.arrayFormularios = [];
            }

            salvar(result){
                var i =0;
                var j =0;
                console.log("Tamanho: ", result.length);
                var tipos = result[0].type
                console.log("Tipo ", tipos);
                for(i=0; i<result.length; i++){
                    result[i]['id'] = i;   
                }
                
                console.log("depois de ter adicionado o id", result);
                //console.log("entrou no salvar",result.filter(type => result == 'button'));  
                //arrayFormularios= formBuilder.actions.getData();
               // console.log("array do formulario",arrayFormularios);
                //let formulario = this.lerDados();
            }

            listatabela() {
            let tabela = document.getElementById('tabela-lista-formularios');
            for(i=0; i< this.result.length;i++){
                let tr = tabela.insertRow();
                
                let td_id = tr.insertCell();
                let td_titulo = tr.insertCell();
                let td_tipo = tr.insertCell();
                let td_criado_em = tr.insertCell();
                let td_acoes = tr.insertCell();

                td_id.innerText = this.result
                }
            }

            adicionar(result){
                this.arrayFormularios.push(result);
                this.id++;
                console.log(this.arrayFormularios)
            }   

            lerDados(){
                let formulario = {}

                formulario.id = this.id;
                //formulario.titulo = 
            }
            validaCampos(){

            }

        }

        var formulario = new Formulario();
    </script>
@endpush('js')