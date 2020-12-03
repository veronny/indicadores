@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/operacional.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>REPORTES ETAPA DE VIDA</h5>
                        <p class="card-text">Reportes de etapa de vida del HIS MINSA</p>
                        <a href="{{ route('operacional_etapavida') }}" class="btn btn-success">Ingresar</a>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
