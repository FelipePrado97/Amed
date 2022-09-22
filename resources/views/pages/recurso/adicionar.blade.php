@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.cards2')

    <div class="card-body">
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
                    <div class="card-body">
                        <div class="tab-content">
                            <div id="informacoes" class="tab-pane active">
                                <div class="col-lg-8 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="titulo_interno">Título interno:</label>
                                        <div class="form-control-wrap">
                                            <input id="titulo_interno" class="form-control" name="titulo_interno" type="text" maxlength="255">
                                            <small class="text-muted">Utilize este campo para identificar internamente este recurso em todos os lugares que ele é listado.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-2"><span class="overline-title">Header:</span></div>
                                <div class="col-lg-6"><div class="form-group"><label class="form-label" for="titulo">Título:</label><div class="form-control-wrap"><input id="titulo" class="form-control" name="titulo" type="text"></div></div></div>
                                <div class="col-lg-6"><div class="form-group"><label class="form-label" for="subtitulo">Subtítulo:</label><div class="form-control-wrap"><input id="subtitulo" class="form-control" name="subtitulo" type="text"></div></div></div>
                                <div class="col-lg-12 mt-2"><div class="custom-control custom-control-sm custom-checkbox mr-2"><input name="exibir_header" type="hidden" value="0"><input id="exibir_header" class="custom-control-input" name="exibir_header" type="checkbox" value="1"><label class="custom-control-label" for="exibir_header">Exibir header</label></div><div class="custom-control custom-control-sm custom-checkbox"><input name="exibir_icone" type="hidden" value="0"><input id="exibir_icone" class="custom-control-input" name="exibir_icone" type="checkbox" value="1"><label class="custom-control-label" for="exibir_icone">Exibir ícone</label></div></div>
                                <div class="col-lg-12 mt-3 mb-1"><hr class="border-light"></div>
                                <div class="col-lg-12 mb-2"><span class="overline-title">Corpo:</span></div>
                                <div class="col-lg-6"><div class="form-group"><label class="form-label" for="titulo_destaque">Título destaque*:</label><div class="form-control-wrap"><input id="titulo_destaque" class="form-control" name="titulo_destaque" required="" type="text"></div></div></div>
                                <div class="col-lg-6"><div class="form-group"><label class="form-label" for="titulo_secundario">Título secundário:</label><div class="form-control-wrap"><input id="titulo_secundario" class="form-control" name="titulo_secundario" type="text"></div></div></div>
                                <div class="col-sm-8 mt-3"><div class="form-group"><label class="form-label" for="descricao_breve">Descrição breve:</label><div class="form-control-wrap"><input id="descricao_breve" class="form-control" name="descricao_breve" type="text"></div></div></div>
                                <div class="col-sm-4 mt-3">
                                    <div class="form-group mb-1">
                                        <label class="form-label" for="descricao_breve">Alinhamento do corpo:</label>
                                        <div class="form-control-wrap mt-1">
                                            <ul class="nav nav-switch-s2 nav-tabs bg-white">
                                                <li class="active nav-item" title="Esquerda">
                                                    <a class="nav-link" href="#">
                                                        <i class=" ni ni-align-left-2"></i>
                                                    </a>
                                                </li><!--
                                                <li class="nav-item" title="Justificado">
                                                    <a class="nav-link" href="#">
                                                        <i class="icon ni ni-justify"></i>
                                                    </a>
                                                </li>-->
                                                <li class="nav-item" title="Centralizado">
                                                    <a class="nav-link" href="#">
                                                        <i class=" ni ni-align-center"></i>
                                                    </a>
                                                </li>
                                                <!--
                                                <li class="nav-item" title="Direita">
                                                    <a class="nav-link" href="#">
                                                        <i class="icon ni ni-align-right"></i>
                                                    </a>
                                                </li>
                                                -->
                                            </ul>
                                            <input name="corpo_alinhamento" type="hidden" value="left">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 mt-3 mb-1"><hr class="border-light"></div>
                                <div class="col-lg-12 mb-2"><span class="overline-title">Rodapé:</span></div>
                                <div class="col-lg-4 mb-2"><div class="form-group"><label class="form-label" for="acao_texto">Texto da ação:</label><div class="form-control-wrap"><input id="acao_texto" class="form-control" name="acao_texto" type="text"></div></div></div>
                                <div class="col-md-12 col-sm-12"><div class="form-group"><label class="form-label" for="descricao">Mais informações:</label><div class="form-control-wrap"><textarea id="descricao" class="form-control" cols="30" name="descricao" rows="5"></textarea></div></div></div>
                            </div>
                            <div id="aparencia" class="tab-pane active">
                                <div class="col-lg-12"><div class="card card-bordered card-full"><div class="card-inner"><div class="card-title-group"><div class="card-title"><h6 class="title"><span class="mr-2">Cores e ícone</span></h6></div></div></div><div class="card-inner pt-3 border-top"><div class="row"><div class="col-lg-12 d-flex justify-content-between align-items-center"><p class="fs-15px m-0">Cor de <strong>fundo</strong></p><div style="width: 42px; height: 42px; border-radius: 10px; border: 1px solid rgb(204, 204, 204); cursor: pointer;"><!----><input name="cor_fundo" type="hidden"></div></div><div class="col-lg-12"><hr class="mt-1 mb-1"></div><div class="col-lg-12 d-flex justify-content-between align-items-center"><p class="fs-15px m-0">Cor do <strong>texto</strong></p><div style="width: 42px; height: 42px; border-radius: 10px; border: 1px solid rgb(204, 204, 204); cursor: pointer;"><!----><input name="cor_texto" type="hidden"></div></div><div class="col-lg-12"><hr class="mt-1 mb-1"></div><div class="col-lg-12 d-flex justify-content-between align-items-center"><p class="fs-15px m-0">Cor do <strong>ícone</strong></p><div style="width: 42px; height: 42px; border-radius: 10px; border: 1px solid rgb(204, 204, 204); background-color: rgb(0, 0, 0); cursor: pointer;"><!----><input name="cor" type="hidden" value="#000000"></div></div><div class="col-lg-12"><hr class="mt-1 mb-1"></div><div class="col-lg-12 d-flex justify-content-between align-items-center"><p class="fs-15px m-0">Ícone</p><a class="d-flex justify-content-center align-items-center" href="#" style="color: rgb(0, 0, 0); width: 42px; height: 42px;"><em class="ni icon ni-cards" style="font-size: 34px;"></em></a><input name="icone_id" type="hidden"></div></div></div></div></div>
                                <div class="col-lg-12 mt-3 mb-3"><div class="card card-bordered card-full"><div class="card-inner"><div class="card-title-group"><div class="card-title"><h6 class="title"><span class="mr-2">Imagem de destaque</span></h6></div></div></div><div class="card-inner pt-3 border-top"><div class="form-group"><div class="row" data-v-b76cb05a=""><div class="col-lg-12" data-v-b76cb05a=""><div class="filepond--wrapper" data-v-b76cb05a=""><div class="filepond--root __unset__ filepond--hopper" id="__unset__" data-style-button-remove-item-position="left" data-style-button-process-item-position="right" data-style-load-indicator-position="right" data-style-progress-indicator-position="right" data-style-button-remove-item-align="false" style="height: 76px;"><input class="filepond--browser" type="file" id="filepond--browser-rzdmd8575" name="imagem" aria-controls="filepond--assistant-rzdmd8575" aria-labelledby="filepond--drop-label-rzdmd8575" accept="image/jpeg,image/png" capture="__unset__"><div class="filepond--drop-label" style="transform: translate3d(0px, 0px, 0px); opacity: 1;"><label for="filepond--browser-rzdmd8575" id="filepond--drop-label-rzdmd8575" aria-hidden="true">Clique para selecionar uma imagem destaque</label></div><div class="filepond--list-scroller" style="transform: translate3d(0px, 0px, 0px);"><ul class="filepond--list" role="list"></ul></div><div class="filepond--panel filepond--panel-root" data-scalable="true"><div class="filepond--panel-top filepond--panel-root"></div><div class="filepond--panel-center filepond--panel-root" style="transform: translate3d(0px, 8px, 0px) scale3d(1, 0.6, 1);"></div><div class="filepond--panel-bottom filepond--panel-root" style="transform: translate3d(0px, 68px, 0px);"></div></div><span class="filepond--assistant" id="filepond--assistant-rzdmd8575" role="status" aria-live="polite" aria-relevant="additions"></span><div class="filepond--drip"></div><fieldset class="filepond--data"></fieldset></div></div></div></div></div></div></div></div>

                            </div>
                                
                            <div id="pessoas" class="tab-pane active"></div>
                        
                            <div id="configuracoes" class="tab-pane active"></div>
                                <div class="col-lg-12"><div class="card card-bordered card-full"><div class="card-inner"><div class="card-title-group"><div class="card-title"><h6 class="title"><span class="mr-2">Período de disponibilidade</span></h6></div></div></div><div class="card-inner pt-3 border-top"><div class="row"><div class="col-lg-4"><label class="form-label mb-1">Início:</label><div class="form-group"><div><div class="form-control-wrap"><div class="form-icon form-icon-right" style="cursor: pointer; display: none;"><em class="icon ni ni-cross"></em></div><input name="inicio" placeholder="Selecione uma data..." autocomplete="off" class="form-control"></div><div class="vc-popover-content-wrapper" placement="bottom-start"><!----></div></div></div></div><div class="col-lg-4"><label class="form-label mb-1">Fim:</label><div class="form-group"><div><div class="form-control-wrap"><div class="form-icon form-icon-right" style="cursor: pointer; display: none;"><em class="icon ni ni-cross"></em></div><input name="fim" placeholder="Selecione uma data..." autocomplete="off" class="form-control"></div><div class="vc-popover-content-wrapper" placement="bottom-start"><!----></div></div></div></div></div></div></div></div>
                                <div class="col-lg-12 mt-3"><div class="card card-bordered card-full"><div class="card-inner"><div class="card-title-group"><div class="card-title"><h6 class="title"><span class="mr-2">Compartilhar externamente</span></h6></div></div></div><div class="card-inner pt-3 border-top"><p>Permite que usuários não logados no sistema visualizem este recurso utilizando um link compartilhado.</p><div class="g"><div class="custom-control custom-checkbox"><input name="publico" type="hidden" value="0"><input id="publico" class="custom-control-input" name="publico" type="checkbox" value="1"><label class="custom-control-label" for="publico">Compartilhar recurso</label></div></div><!----></div></div></div>
                                <div class="col-lg-12 mt-3"><div class="card card-bordered card-full"><div class="card-inner"><div class="card-title-group"><div class="card-title"><h6 class="title"><span class="mr-2">Redirecionamento</span></h6></div></div></div><div class="card-inner pt-3 border-top"><div class="g"><div class="custom-control custom-radio"><input id="redirecionar-url" class="custom-control-input" name="redirecionar" type="radio" value="url"><label class="custom-control-label" for="redirecionar-url"> Redirecionar para uma URL externa </label></div><div class="custom-control custom-radio ml-3"><input id="redirecionar-sistema" class="custom-control-input" name="redirecionar" type="radio" value="sistema"><label class="custom-control-label" for="redirecionar-sistema"> Redirecionar para uma página do sistema </label></div><div class="custom-control custom-radio ml-3"><input id="redirecionar-nada" class="custom-control-input" type="radio"><label class="custom-control-label" for="redirecionar-nada"> Não redirecionar </label></div></div><!----><!----></div></div></div>
                                <div class="col-lg-12 mt-3"><div class="card card-bordered card-full"><div class="card-inner"><div class="card-title-group"><div class="card-title"><h6 class="title"><span class="mr-2">Outras configurações</span></h6></div></div></div><div class="card-inner pt-3 border-top"><div class="g"><div class="custom-control custom-checkbox"><input name="exibir_pagina_inicial" type="hidden" value="0"><input id="exibir_pagina_inicial" class="custom-control-input" name="exibir_pagina_inicial" type="checkbox" value="1"><label class="custom-control-label" for="exibir_pagina_inicial">Exibir na página inicial</label></div><small class="ml-2 text-primary">Indica se o card será exibido na página inicial dos usuários.</small></div><div class="g mt-2"><div class="custom-control custom-checkbox"><input name="abrir_nova_aba" type="hidden" value="0"><input id="abrir_nova_aba" class="custom-control-input" name="abrir_nova_aba" type="checkbox" value="1"><label class="custom-control-label" for="abrir_nova_aba">Abrir em uma nova aba</label></div><small class="ml-2 text-primary">Marque para que o recurso seja aberto em uma nova aba do navegador.</small></div><div class="g mt-2"><div class="custom-control custom-checkbox"><input name="abrir_modal" type="hidden" value="0"><input id="abrir_modal" class="custom-control-input" name="abrir_modal" type="checkbox" value="1"><label class="custom-control-label" for="abrir_modal">Abrir em uma modal</label></div><small class="ml-2 text-primary">Marque para exibir o conteúdo deste card em uma modal, caso contrário será aberta na mesma página.</small></div></div></div></div>

                            <div id="editor" class="tab-pane active"></div>
                        
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