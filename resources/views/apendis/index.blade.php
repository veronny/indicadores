@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-primary float-right" href="{{ url('web') }}">Volver a Menu</a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm text-center">
                    <img src="{{ url('img/SISCOVID.png') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#063d9b";>Indicador S1</h5>
                            <p class="card-text">Pacientes positivos COVID-19 con 4 seguimientos telefonicos y 2 seguiminetos domiciliarios</p>
                            <a href="https://app.powerbi.com/view?r=eyJrIjoiNzE4MzZiODYtODg4MC00N2E1LTk3NzgtNTM2YjcxMzYxMDc0IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                        </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm text-center">
                    <img src="{{ url('img/SISCOVID.png') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#063d9b";>Indicador S2</h5>
                            <p class="card-text">Ejecucion presupuestal Prevencion, Control, Diagnostico y Tratamiento de Coronavirus (Presupuesto Covid-19)</p>
                            <a href="https://app.powerbi.com/view?r=eyJrIjoiYWI1YjcwMWUtOTNjZi00Y2U2LTg5NWEtOWJhNDVkOTQzZTI5IiwidCI6ImQ0NDUyNmQzLTQxNDMtNDU5YS1hNjFhLTcxYWE3YWZkMjIwMiJ9&pageName=ReportSection9e13e4de0ac1d043f4d0" class="btn btn-success" target="_blank">Ver mas</a>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
