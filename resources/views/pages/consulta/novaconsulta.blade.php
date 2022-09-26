@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.cards2')
    
    
    <div class="card-body">
        <div class="card">
            <form id="buscapaciente" method="POST" action="/buscarpaciente">
                @csrf
                @method('POST')
                <div class="col-md-4">
                    <label>Buscar Paciente: </label>
                    <input type="text" name="cpf" id="cpf"cpf class="form-control form-control-lg" placeholder="Digite o CPF...">
                    <button class="btn btn-primary" id="buscar" onclick="buscarcpf()" type="button">Buscar</button>
                    <label>{{$msg}}</label>
                </div>
            </form>
        </div>
    </div>
   
    @include('layouts.footers.auth')
@endsection
@push('js')
    
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>
        function buscarcpf(){
            document.getElementById('buscapaciente').submit();
        }
    </script>

@endpush