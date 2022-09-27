@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.cards2')
    
    
    <div class="card-body">
        <div class="card">
            <form action="/Estadiamento" method="post">
                @csrf
                @method('POST')
            <div class="form-group">
            <label>Selecione Paciente: </label>
                <select name="listarpacientes" id="listarpacientes" class="form-group" aria-label="form-control form-control-lg">
                @foreach($selectPaciente as $selectPaciente)
                    <option value="{{$selectPaciente->id}}">{{$selectPaciente->nome}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
            <label>Selecione o CID: </label> 
            <select name="listarcid" id="listarcid" class="form-group" aria-label="form-control form-control-lg">
               
                @foreach($selectCid as $selectCid)
                    <option value="{{$selectCid->id}}">{{$formCID->nome_cid}}</option>
                @endforeach
                </select>
            </div>
            
            <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
   
    @include('layouts.footers.auth')
@endsection
@push('js')
    
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>
        
    </script>

@endpush