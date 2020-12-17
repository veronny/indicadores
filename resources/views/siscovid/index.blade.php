@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/SISCOVID.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Tamizaje Virtual</h5>
                        <p class="card-text">Tamizaje Virtual del COVID-19</p>
                        <a href="http://epi.saludjunin.site/formulario/create" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/SISCOVID.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Mapa de Riesgo</h5>
                        <p class="card-text";>Casos positivos geo-referenciadas de 15 dias</p>
                        <a href="http://mapa.saludjunin.site/" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/SISCOVID.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Estadisticas SISCOVID</h5>
                        <p class="card-text">Estadisticas del sistema SISCOVID</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiNjUwZWZmMWEtMzE0Zi00MzI0LThkOGYtMjU1MmViMzI0ZmIxIiwidCI6Ijk0OWM4OGY0LWU4NzMtNDg1Ny04YzQxLWVkMDI1ZTI3ZTYyYyJ9&pageName=ReportSection" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/SISCOVID.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Produccion de Personal</h5>
                        <p class="card-text">Produccion de las fichas F100, F300</p>
                        <a href="#" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

@endsection
