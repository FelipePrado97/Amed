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
            <form id="formrecurso" method="POST">
                <div>
                    <div class="nk-chat-head pb-0 mb-3 flex-column align-items-stretch mt-2 border">
                        
                        <div class="nk-chat-head-info">
                            <div class="col-lg-12">
                                <ul class="nav nav-tabs border-bottom-0 mt-n3">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#informacoes">
                                            <i class="icon ni ni-folder-17  text-blue" ></i>
                                            
                                            <span>Informações</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#aparencia">
                                            <i class="icon ni ni-palette  text-blue" ></i>
                                            <span>Aparência</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#pessoas">
                                            <i class="icon ni ni-circle-08  text-blue" ></i>
                                                <span>Acesso</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#configuracoes">
                                            <i class="icon ni ni-settings-gear-65  text-blue" ></i>
                                            <span>Configurações</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#editor">
                                            <i class="icon ni ni-building text-blue" ></i>
                                            <span>Editor</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--header-->
                    <div class="tab-content">
                        <div id="informacoes" class="tab-pane active">
                            <div class="tab-content">
                                <div id="informacoes" class="tab-pane active">
                                    <div class="card card-bordered card-full">
                                        <div class="col-lg-5 mb-2">
                                            <div class="form-group">
                                                <label class="form-label" for="titulo_interno">Título interno:</label>
                                                <div class="form-control-wrap">
                                                    <input id="titulo_interno" class="form-control" name="titulo_interno" type="text" maxlength="255">
                                                        <small class="text-muted">Utilize este campo para identificar internamente este recurso em todos os
                                                        lugares que ele é listado.</small>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="aparencia" class="tab-pane active">
                            <div class="tab-content">
                                <div id="aparencia" class="tab-pane active">
                                    <div class="card card-bordered card-full">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pessoas" class="tab-pane active">
                            <div class="tab-content">
                                <div id="pessoas" class="tab-pane active">
                                    <div class="card card-bordered card-full">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="configuracoes" class="tab-pane active">
                            <div class="tab-content">
                                <div id="configuracoes" class="tab-pane active">
                                    <div class="card card-bordered card-full">

                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div id="editor" class="tab-pane active">
                            <div class="tab-content">
                                <div id="editor" class="tab-pane active">
                                    <div class="card card-bordered card-full">

                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

    @include('layouts.footers.auth')
@endsection
@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script src="js/scriptformularios.js"></script>
    

@endpush('js')