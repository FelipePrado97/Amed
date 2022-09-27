@extends('layouts.app', ['class' => 'bg-default'])
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"></head>
@section('content')
    @include('layouts.headers.cards2')
    
    <div class="container-fluid mt--7">
        <div class="card-body">
            <div class="card">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="cid-tab" data-toggle="tab" href="#cid" role="tab" aria-controls="cid" aria-selected="true">CID</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="plano-tab" data-toggle="tab" href="#plano" role="tab" aria-controls="plano" aria-selected="false">PLANO TERAPÊUTICO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="protocolos-tab" data-toggle="tab" href="#protocolos" role="tab" aria-controls="protocolos" aria-selected="false">PROTOCOLOS</a>
                    </li>
                </ul>
                
                <form action="/cadastrarCID" method='POST' id='formCadastraCID'>
                        @csrf
                        @method('POST') 
                <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="cid" role="tabpanel" aria-labelledby="cid-tab"> 
                            <div class='form-group'>
                                <label>COD CID:<label><input type="text" name="cod_cid" id="cod_cid" class="form-control form-control-lg">
                            </div>
                            <div class='form-group'>
                                <label>Descrição:<label><input type="text" name="descricao" id="descricao" class="form-control form-control-lg">
                            </div>
                            <div class='form-group'>
                                <label>Variáveis:<label><textarea rows="" cols="" type="text" name="variaveis" id="variaveis" class="form-control form-control-lg"></textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="plano" role="tabpanel" aria-labelledby="plano-tab">
                            <div class="d-flex flex-row bd-highlight mb-3">
                                <div class='p-2 bd-highlight'>
                                    <label>Cod Estadiamento: <label>
                                    <input type="text" name="cod_estadiamento" id="codigoestadiamento" class="form-control form-control-lg">
                                </div>
                                <div class='p-2 bd-highlight'>
                                    <label>Estagio: <label>
                                    <input type="text" name="estagio" id="estagio" class="form-control form-control-lg">
                                </div>
                                <div class='p-2 bd-highlight'>
                                    <label>Upstaging: <label>
                                    <input type="text" name="upstaging" id="upstaging" class="form-control form-control-lg"> 
                                </div>
                                <div class='p-2 bd-highlight'>
                                    <label>Downtaging: <label>
                                    <input type="text" name="downtaging" id="downtaging" class="form-control form-control-lg"> 
                                </div>
                                <div class='p-2 bd-highlight'>
                                    <label>Nomigration: <label>
                                    <input type="text" name="nomigration" id="nomigration" class="form-control form-control-lg"> 
                                </div>
                            </div>
                            <div class="d-flex flex-column bd-highlight mb-3">
                                <div class='p-2 bd-highlight'>
                                    <label>Exames Recomendados: <label>
                                    <textarea rows="" cols="60" type="text" name="exames_recomendados" id="exames_recomendados" class="form-control form-control-lg"></textarea>
                                </div>
                                <div class='p-2 bd-highlight'>
                                    <label>Tratamentos Recomendados: <label>
                                    <textarea rows="" cols="60" type="text" name="tratamentos_recomendados" id="tratamento" class="form-control form-control-lg"></textarea>
                                </div>
                                <div class='p-2 bd-highlight'>
                                    <label>Medicamentos Recomendados: <label>
                                    <textarea rows="" cols="60" type="text" name="medicamentos_recomendados" id="medicamentos" class="form-control form-control-lg"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="protocolos" role="tabpanel" aria-labelledby="protocolos-tab">
                            <div class="d-flex flex-column bd-highlight mb-3">
                                <div class='p-2 bd-highlight'>
                                    <label>PROTOCOLOS: <label>
                                    <input type="file" name="protocolo" value="protocolo" class="form-control form-control-lg">
                                </div>
                            </div>
                        </div>     
                    </form>
                </div>
            </div>
        </div> 
        <div class="container-fluid">
            <div class="form-group">
                <div class="card">
                    <button class="btn btn-primary" id="enviar" onclick="enviar()" type="button">Enviar</button>
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
        function enviar(){
            document.getElementById('formCadastraCID').submit(); 
        }
    </script>

@endpush