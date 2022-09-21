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
        <form id="form" action="/formulariosadicionar" method="POST">
            @csrf
            
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" placeholder="Título: " id="titulo" name="titulo"></input>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" placeholder="Tipo: " id="tipo" name="tipo"></input>
            </div>
            <!--<input type="submit" class="btn btn-primary" value="Salvar">-->
        
        <div class="saveDataWrap">
        <button class="btn btn-primary" id="saveData" type="button">SALVAR</button>
        </div>
        </div>
        <div id="build-wrap"></div>
        </form>
        </div>
        
        <div class="card">
        <div class="table-responsive">
            
            <table class="table align-items-center">
                <thead class="thead-light">
                        <tr class="table-light">
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
            
            if(document.getElementById('titulo').value !=""){
                const result = formBuilder.actions.save();
                var input = document.createElement("input");
                input.type = "text";
                input.name = "array";
                input.value = JSON.stringify(result);   
                form.appendChild(input);
                form.submit();
            console.log("result:", result);
            
            formulario.salvar(result);
            }else{
                alert("Favor, preencha o Título do Formulário")
            }
                        
           

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
                    imgEdit.setAttribute("onclick","formulario.editar("+ this.arrayFormularios[i].id +")");
                    td_acao.appendChild(imgEdit);

                    let imgDup = document.createElement('img');
                    imgDup.src = "../assets/img/brand/duplicar.svg" ;
                    imgDup.setAttribute("onclick","formulario.duplicar("+ this.arrayFormularios[i].id +")");                  
                    td_acao.appendChild(imgDup);

                    let imgExcl = document.createElement('img');
                    imgExcl.src = "../assets/img/brand/excluir.svg" ;
                    imgExcl.setAttribute("onclick","formulario.excluir("+ this.arrayFormularios[i].id +")");
                    td_acao.appendChild(imgExcl);
                    
                    //imgEdit.src = "img/excluir.png" ;
                    //td_acao.appendChild(imgEdit);
                   // imgEdit.src = "img/duplicar.png" ;
                   // td_acao.appendChild(imgEdit);
                    //criar funçao para limar depois de enviar

                    
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
            editar(){
                alert("editar");
            }
            duplicar(){
                alert("duplicar");
            }
            excluir(id){
                if(confirm('Deseja realmente deletar o produto do ID'+ id   )){
                    let tbody = document.getElementById('tabela-lista-formularios');

                    for(let i = 0 ; i < this.arrayFormularios.length; i++){
                        if(this.arrayFormularios[i].id == id){
                            this.arrayFormularios.splice(i,1);
                            tbody.deleteRow(i);
                        }
                    }
                }
                
            }

            

            
        }

        var formulario = new Formulario();
    </script>
@endpush('js')