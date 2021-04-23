@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/vacunometro_covid.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Vacunometro Regional</h5>
                        <p class="card-text">Vacunometro</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiYmRiMTBmMjgtNDJhMi00ODI0LTlhOGEtMGVjZjVmZTg2NWZhIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9&pageName=ReportSection" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/vacuna_covid_seg.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Seguimiento de DOSIS</h5>
                        <p class="card-text";>Seguimiento de DOSIS</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiMTZlYWEwNDAtOGUzOC00YjNmLTk3ZDgtNmJjMThjMjYzN2VmIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>


@endsection
