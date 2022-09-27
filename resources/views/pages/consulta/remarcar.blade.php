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
            <h1>REMARCAR CONSULTA</h1>
            <form id="formConsulta" action="/remarcar/update/{{$form->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    
                <label>Nome do Médico:</label>
                <select  class="form-group" aria-label="form-control form-control-lg" id='id_medico' name="id_medico">
                @foreach($formsM as $formM)
                    <option value="{{$formM->id}}">{{$formM->nome}}</option>
                @endforeach
                </select>
                </div>
                <div class="form-group" aria-label="form-control form-control-lg">
                <label>Nome do Paciênte:</label>
        <select  class="form-group" aria-label="form-control form-control-lg" id='selectpaciente' name="id_paciente">
                @foreach($formsP as $formP)
                    <option value="{{$formP->id}}">{{$formP->nome}}</option>
                @endforeach
                </select>
                </div>
                <div class="form-group" aria-label="form-control form-control-lg">
                <label>Data:</label><input type="date" value="{{$form->data}}" name="data">
                </div>
                <div class="form-group"aria-label="form-control form-control-lg">
                <label>Hora:</label><input type="time" value="{{$form->hora}}" name="hora">
                </div>
                <input type="submit" value="">
            </form>
        </div>
    </div>

    @include('layouts.footers.auth')
@endsection
@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
   

@endpush('js')