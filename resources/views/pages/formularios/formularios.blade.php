@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.cards2')
    
    
    <div class="card-body">
        <div class="card" style="height: 5rem;">
            <div class="card-body">
                <p class="card-text"></p>
                <a href="formularios/adicionar" class="btn btn-primary"><i class="ni ni-fat-add"></i> Adicionar</a>
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
                        @foreach($forms as $form)
                            <tr class="table">
                                <td><a>{{$form->id}}</a></td>
                                <td><a>{{$form->titulo}}</a></td>
                                <td><a>{{$form->tipo}}</a></td>
                                <td><a>{{$form->updated_at}}</a></td>
                                <td class="text-right">
                                <div style="display: inline; text-align: center;">
                                    <form action="/formularioseditar/{{$form->id}}" method="POST" style="display: inherit;">
                                        @csrf 
                                        @method('GET')
                                        <button type="submit" class="btn btn-primary delete-btn"><ion-icon name="trash-outline"></ion-icon>Editar</button>
                                    </form>
                                    <form action="/formulariosdeletar/{{$form->id}}" method="POST"style="display: inherit;">
                                        @csrf 
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                                    </form>
                                    <form action="/formulariosduplicar/{{$form->id}}" method="POST" style="display: inherit;">
                                        @csrf 
                                        @method('GET')
                                        <button type="submit" class="btn btn-secundary delete-btn"><ion-icon name="trash-outline"></ion-icon>Duplicar</button>
                                    </form>
                                </div>
                            </td>
                            </tr>
                        @endforeach
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





@endpush