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
                <select class="form-group" aria-label="form-control form-control-lg" id='selectcadastro' onclick="selected(this.value)">
                    <option selected>Tipo de Cadastro</option>
                    <option value="medico">Médico</option>
                    <option value="paciente">Paciente</option>
                </select>
                <div id="divmedico" style="display: none;">
                    <form id="form" action="/pessoaadicionar" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Título: " id="titulo" name="titulo"></input>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Tipo: " id="tipo" name="tipo"></input>
                        </div>
                    </form>
                </div><!--divmedico-->
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
@endsection
@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script src="js/scriptformularios.js"></script>
    <script>
      
    function selected(value){
    var obj = document.getElementsByClassName('selectcadastro');
        console.log(obj);
    }

    </script>

@endpush('js')