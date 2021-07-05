@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/prematuro.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>DIT</h5>
                        <p class="card-text">Niños con prematuriedad y/o bajo peso al nacer, que reciben gotas de hierro</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiMDAyMzcxNWYtMmJjYy00ZmJjLThlZDQtMmYyMDg4M2Q1ZmNiIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/inicio_tratamiento.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>DIT</h5>
                        <p class="card-text">Niños y Niñas entre los 110 y 130 dias que reciben hierro en gotas</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiODU0NDBmZTEtZjcxYi00MTI5LTgxNGUtYWJhYTY1NjRhNjJkIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/inicio_tratamiento.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>DIT</h5>
                        <p class="card-text">Niños de 6 a 8 Meses, que inician suplementacion o tratamiento preventivo</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiNjFiMjVjMGQtMTlhMy00YzU4LWE0ZmYtZmM3MTEwNTExYWZmIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9&pageName=ReportSection2193f6f4cb2050b67741" class="btn btn-success">Ver mas</a>
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
