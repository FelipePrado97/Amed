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

        <div class="saveDataWrap">
        <button id="saveData" type="button">SALVAR</button>
        </div>
        <div id="build-wrap"></div>

        </div>
    </div>

    @include('layouts.footers.auth')
@endsection
@push('js')
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    
    
    <script> 
            jQuery(($) => {
        const fbEditor = document.getElementById("build-wrap");
        const formBuilder = $(fbEditor).formBuilder();

        document.getElementById("saveData").addEventListener("click", () => {
            console.log("external save clicked");
            const result = formBuilder.actions.save();
            console.log("result:", result);
            window.location.href = "/formularios";
        });
        });
    </script>
@endpush('js')