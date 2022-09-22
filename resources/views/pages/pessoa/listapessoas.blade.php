@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.cards2')
    
    
    <div class="card-body">
        <div class="card" style="height: 5rem;">
            <div class="card-body">
                <p class="card-text"></p>
                <a href="pessoa/adicionar" class="btn btn-primary"><i class="ni ni-fat-add"></i> Adicionar</a>
                <a href="exportar" class="btn btn-secundary"><i class="ni ni-cloud-download-95"></i> Exportar</a>
            </div>
        </div>
        <div class="table-responsive">
            
            <table class="table align-items-center" style="text-align: center;">
                <thead class="thead-light">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Modificado Em</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="tabela-lista-formularios" style="text-align: center; position: center;">
                        
                    </tbody>
                </table>
                <div>
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
        
    </script>
    <script> 
         
    </script>



@endpush