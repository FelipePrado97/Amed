@extends('layouts.app', ['class' => 'bg-default'])
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"></head>
@section('content')
    @include('layouts.headers.cards2')
    
    <div class="container-fluid mt--7">
        <div class="card-body">
            <div class="card" style="height: 10rem;">
                <div class="d-flex p-2 bd-highlight">
                    <label>Foto do Paciente</label>
                    <div class="d-flex flex-column bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <h1>{{$paciente->nome}}</h1>
                        </div>
                    <div class="p-2 bd-highlight">
                        <h3>Data de Nascimento: {{$paciente->datadenascimento}}</h3>
                    </div>
                    <div class="p-2 bd-highlight">
                        <h3>CID: {{$paciente->cid}}</h3>
                    </div>
                </div>
            </div> <!--Final card infos-->
            <div class="card">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="cid-tab" data-toggle="tab" href="#cid" role="tab" aria-controls="cid" aria-selected="true">CID</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="anamnese-tab" data-toggle="tab" href="#anamnese" role="tab" aria-controls="anamnese" aria-selected="false">ANAMNESE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="plano-tab" data-toggle="tab" href="#plano" role="tab" aria-controls="plano" aria-selected="false">PLANO TERAPÊUTICO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="prescricao-tab" data-toggle="tab" href="#prescricao" role="tab" aria-controls="prescricao" aria-selected="false">PRESCRIÇÕES</a>
                    </li>
                </ul>
                
                
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="cid" role="tabpanel" aria-labelledby="cid-tab">
                        Conteúdo sobre cid do paciente
                    </div>
                    <div class="tab-pane fade" id="anamnese" role="tabpanel" aria-labelledby="anamnese-tab">
                        <h1>Anamnese do Paciente</h1>
                        <form action="/anamnese" id="formAnamnese" method="POST">
                            @csrf
                            @method('POST')
                            <div class="d-flex flex-column bd-highlight mb-3"> <!--vertical-->
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label for="">Queixa do Paciênte: </label>
                                        <textarea class="form-control form-control-lg" rows="4" cols="50" name="queixa" id="queixa" placeholder="{{$paciente->queixa}}"></textarea>                                    
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label for="">Peso: </label>
                                        <input class="form-control form-control-lg" type="text" id='peso' name='peso' placeholder="{{$paciente->peso}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Altura: </label>
                                        <input  class="form-control form-control-lg" type="text" id='altura' name='altura' placeholder="{{$paciente->altura}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Etnia: </label>
                                        <input class="form-control form-control-lg" type="text" id='etnia' name='etnia' placeholder="{{$paciente->etnia}}">
                                    </div>

                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label for="">Fumante? </label>
                                        <input class="form-control form-control-lg" type="text" id='fumante' name='fumante' placeholder="{{$paciente->fumante}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Filhos? </label>
                                        <input class="form-control form-control-lg" type="text" id='altura' name='altura' placeholder="{{$paciente->altura}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Quantos filhos? </label>
                                        <input class="form-control form-control-lg" type="text" id='qtd_filhos' name='qtd_filhos' placeholder="{{$paciente->qtd_filhos}}">
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label for="">Antecedente Histórico? </label>
                                        <input class="form-control form-control-lg" type="text" id='antecedentehistorico' name='antecedentehistorico' placeholder="{{$paciente->antecedentehistorico}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Antecedente Alérgico? </label>
                                        <input class="form-control form-control-lg" type="text" id='antecedentealergico' name='antecedentealergico' placeholder="{{$paciente->antecedentealergico}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Idade em que foi constatado o problema? </label>
                                        <input class="form-control form-control-lg" type="text" id='idade_constatado_problema' name='idade_constatado_problema' placeholder="{{$paciente->idade_constatado_problema}}">
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label for="">Tempo dos sintomas? </label>
                                        <input class="form-control form-control-lg" type="text" id='tempo_sintomas' name='tempo_sintomas' placeholder="{{$paciente->tempo_sintomas}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Providencias Tomadas? </label>
                                        <input class="form-control form-control-lg" type="text" id='providencias_tomadas' name='providencias_tomadas' placeholder="{{$paciente->providencias_tomadas}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Cirurgias Realizadas? </label>
                                        <input class="form-control form-control-lg" type="text" id='cirurgias_realizadas' name='cirurgias_realizadas' placeholder="{{$paciente->cirurgias_realizadas}}">
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label for="">Fez Radioterapia? </label>
                                        <input class="form-control form-control-lg" type="text" id='fez_radioterapia' name='fez_radioterapia' placeholder="{{$paciente->fez_radioterapia}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Quantas Sessões? </label>
                                        <input class="form-control form-control-lg" type="text" id='qtd_sessoes_radioterapia' name='qtd_sessoes_radioterapia' placeholder="{{$paciente->qtd_sessoes_radioterapia}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Teve perda de Cabelo? </label>
                                        <input class="form-control form-control-lg" type="text" id='perda_de_cabelo' name='perda_de_cabelo' placeholder="{{$paciente->perda_de_cabelo}}">
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label for="">Fez Quimioterapia? </label>
                                        <input class="form-control form-control-lg" type="text" id='fez_quimioterapia' name='fez_quimioterapia' placeholder="{{$paciente->fez_quimioterapia}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Quantas Sessões? </label>
                                        <input class="form-control form-control-lg" type="text" id='qtd_sessoes_quimioterapia' name='qtd_sessoes_quimioterapia' placeholder="{{$paciente->qtd_sessoes_quimioterapia}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fez transfusão de sangue? </label>
                                        <input class="form-control form-control-lg" type="text" id='transfusao_de_sangue' name='transfusao_de_sangue' placeholder="{{$paciente->transfusao_de_sangue}}">
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label for="">Usou medicações? </label>
                                        <input class="form-control form-control-lg" type="text" id='uso_de_medicacoes' name='uso_de_medicacoes' placeholder="{{$paciente->uso_de_medicacoes}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Como Reagiu? </label>
                                        <input class="form-control form-control-lg" type="text" id='como_reagiu' name='como_reagiu' placeholder="{{$paciente->como_reagiu}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Que mudanças tiveram na sua vida? </label>
                                        <input class="form-control form-control-lg" type="text" id='oque_mudou_na_vida' name='oque_mudou_na_vida' placeholder="{{$paciente->oque_mudou_na_vida}}">
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label for="">Como está seu sono e repouso? </label>
                                        <input class="form-control form-control-lg" type="text" id='sono_e_repouso' name='sono_e_repouso' placeholder="{{$paciente->sono_e_repouso}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Pratica atividade física? </label>
                                        <input class="form-control form-control-lg" type="text" id='pratica_atividade_fisica' name='pratica_atividade_fisica' placeholder="{{$paciente->pratica_atividade_fisica}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Qual o seu lazer? </label>
                                        <input class="form-control form-control-lg" type="text" id='atividades_lazer' name='atividades_lazer' placeholder="{{$paciente->atividades_lazer}}">
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label for="">Possui uma alimentação balanceada? </label>
                                        <input class="form-control form-control-lg" type="text" id='alimentacao_balanceada' name='alimentacao_balanceada' placeholder="{{$paciente->alimentacao_balanceada}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Quais alimentos? </label>
                                        <input class="form-control form-control-lg" type="text" id='alimentacao_quais' name='alimentacao_quais' placeholder="{{$paciente->alimentacao_quais}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Toma Água? </label>
                                        <input class="form-control form-control-lg" type="text" id='toma_agua' name='toma_agua' placeholder="{{$paciente->toma_agua}}">
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label> Exames Realizados: </label>
                                        <input class="form-control form-control-lg" type="file" class="form-control form-control-lg" placeholder="{{$paciente->anexar_exames}}" id="anexar_exames" name="anexar_exames" accept=" .doc, .docx, .pdf, .png, .jpg, .jpeg"></input>
                                    </div>        
                                </div>
                            </div>
                            <div class="saveDataWrap">
                                <button class="btn btn-primary" onclick='enviarAnamnese()' id="saveData" type="button">SALVAR</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="plano" role="tabpanel" aria-labelledby="plano-tab">Conteúdo sobre planoterapeutico</div>
                    <div class="tab-pane fade" id="prescricao" role="tabpanel" aria-labelledby="prescricao-tab">Conteúdo sobre prescricoes</div>
                </div>

            </div> 

            
        </div>
     
   </div>
    
@endsection
@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script>
        function enviarAnamnese(){
            var input = document.createElement("input");
                input.type = "text";
                input.name = "id";
                input.value = '{{$paciente->id}}';
                document.getElementById('formAnamnese').appendChild(input);
                document.getElementById('formAnamnese').submit();
        }
    </script>
@endpush