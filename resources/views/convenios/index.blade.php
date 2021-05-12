@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/convenio_apendis.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>AP ENDIS</h5>
                        <p class="card-text">Cuenta con los indicadores de seguimiento clinico y ejecuccion presupuestal en el contexto del COVID</p>
                        <a href="{{ route('apendis') }}" class="btn btn-success">Ingresar</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/convenio_fed.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>FED</h5>
                        <p class="card-text">Compromisos vinculados al Desarrollo Infantil Temprano DIT, seguimiento en el contexto COVID y violencia con la mujer</p>
                        <a href="{{ route('fed') }}" class="btn btn-success" target="_blank">Ingresar</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/convenio_gestion.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>CONVENIOS DE GESTION - MINSA</h5>
                        <p class="card-text">Indicadores de desempeño y de compromisos de mejora en los servicios de salud, en la Region Junin</p>
                        <a href="{{ route('convenios_gestion') }}" class="btn btn-success" target="_blank">Ingresar</a>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
