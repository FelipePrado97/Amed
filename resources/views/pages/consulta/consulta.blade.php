@extends('layouts.app', ['class' => 'bg-default'])
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"></head>
@section('content')
    @include('layouts.headers.cards2')
    
    <div class="container-fluid mt--7">
        <div class="card-body">
            <div class="card" style="height: 10rem;">                
                
            </div> 
        </div>
   </div>
    
@endsection
@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script>
        function enviarAnamnese(){
            var input = document.createElement("input");
                input.type = "text";
                input.name = "id";
                input.value = '{{$paciente->id}}';
                document.getElementById('formAnamnese').appendChild(input);
                document.getElementById('formAnamnese').submit();
        }
        function buscardados(){

        }
    </script>
@endpush