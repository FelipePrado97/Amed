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
                        <form action="/anamnese" id="formanamnese" method="POST">
                            @csrf
                            @method('POST')
                            <div class="d-flex flex-column bd-highlight mb-3"> <!--vertical-->
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label for="">Queixa do Paciênte: </label>
                                        <textarea rows="" cols="" name="queixa" id="queixa">   </textarea>                                    
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label for="">Peso: </label>
                                        <input type="text" id='peso' name='peso'>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Altura: </label>
                                        <input type="text" id='altura' name='altura'>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Etnia: </label>
                                        <input type="text" id='etnia' name='etnia'>
                                    </div>

                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label for="">Fumante?: </label>
                                        <input type="text" id='fumante' name='fumante'>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Filhos?: </label>
                                        <input type="text" id='altura' name='altura'>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Quantos filhos?: </label>
                                        <input type="text" id='qtd_filhos' name='qtd_filhos'>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label for="">Antecedente Histórico?: </label>
                                        <input type="text" id='antecedentehistorico' name='antecedentehistorico'>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Antecedente Alérgico?: </label>
                                        <input type="text" id='antecedentealergico' name='antecedentealergico'>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Idade em que foi constatado o problema?: </label>
                                        <input type="text" id='idade_constatado_problema' name='idade_constatado_problema'>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                            <label for="">Tempo dos sintomas? </label>
                                            <input type="text" id='tempo_sintomas' name='tempo_sintomas'>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Providencias Tomadas? </label>
                                            <input type="text" id='providencias_tomadas' name='providencias_tomadas'>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cirurgias Realizadas? </label>
                                            <input type="text" id='cirurgias_realizadas' name='cirurgias_realizadas'>
                                        </div>
                                    </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                            <label for="">Fez Radioterapia? </label>
                                            <input type="text" id='fez_radioterapia' name='fez_radioterapia'>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Quantas Sessões? </label>
                                            <input type="text" id='qtd_sessoes_radioterapia' name='qtd_sessoes_radioterapia'>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Teve perda de Cabelo? </label>
                                            <input type="text" id='perda_de_cabelo' name='perda_de_cabelo'>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                            <label for="">Fez Quimioterapia? </label>
                                            <input type="text" id='fez_quimioterapia' name='fez_quimioterapia'>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Quantas Sessões? </label>
                                            <input type="text" id='qtd_sessoes_quimioterapia' name='qtd_sessoes_quimioterapia'>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Fez transfusão de sangue? </label>
                                            <input type="text" id='transfusao_de_sangue' name='transfusao_de_sangue'>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                            <label for="">Usou medicações? </label>
                                            <input type="text" id='uso_de_medicacoes' name='uso_de_medicacoes'>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Como Reagiu? </label>
                                            <input type="text" id='como_reagiu' name='como_reagiu'>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Que mudanças tiveram na sua vida? </label>
                                            <input type="text" id='oque_mudou_na_vida' name='oque_mudou_na_vida'>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                            <label for="">Como está seu sono e repouso? </label>
                                            <input type="text" id='sono_e_repouso' name='sono_e_repouso'>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pratica atividade física? </label>
                                            <input type="text" id='pratica_atividade_fisica' name='pratica_atividade_fisica'>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Qual o seu lazer? </label>
                                            <input type="text" id='atividades_lazer' name='atividades_lazer'>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                            <label for="">Possui uma alimentação balanceada? </label>
                                            <input type="text" id='alimentacao_balanceada' name='alimentacao_balanceada'>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Quais alimentos? </label>
                                            <input type="text" id='alimentacao_quais' name='alimentacao_quais'>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Toma Água? </label>
                                            <input type="text" id='toma_agua' name='toma_agua'>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3"> <!--horizontal-->
                                    <div class="form-group">
                                        <label> Exames Realizados: </label>
                                        <input type="file" class="form-control form-control-lg" placeholder="Assinatura: " id="anexar_exames" name="anexar_exames" accept=" .doc, .docx, .pdf, .png, .jpg, .jpeg"></input>
                                    </div>        
                                </div>
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

    
@endpush