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
                        
                    </div>
                    <div class="tab-pane fade" id="anamnese" role="tabpanel" aria-labelledby="anamnese-tab">Conteúdo sobre anamnese</div>
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