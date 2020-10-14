@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/inicio_tratamiento.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>DIT</h5>
                        <p class="card-text">Indicadores correspondiente al Desarollo Infantil Temprano SIII-01 , SIII-02, SIII-03</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiYjJlOWM3NGItMTViMS00MWM4LWFiZmYtMDE2ZjZiMGMwMmYwIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9&pageName=ReportSection2193f6f4cb2050b67741" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/SISCOVID.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>COVID</h5>
                        <p class="card-text">Indicadores relacionados al COVID SIII-05 Y SII-06</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiNDcxMTllODItYjc1Yi00ZTQ1LTk4OWUtNmM5NWZjZDljNDQ0IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9&pageName=ReportSection2193f6f4cb2050b67741" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/gestante.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>VIOLENCIA</h5>
                        <p class="card-text">Gestantes con deteccion positiva de violencia contra la mujer en IPRESS</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiOGJkMWE3YmUtZTEyMS00ODZkLWEzZGItZmQ0MTI1ZDg0ZDAyIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9&pageName=ReportSection2193f6f4cb2050b67741" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>
@endsection
