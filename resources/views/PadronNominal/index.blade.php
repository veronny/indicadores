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
                    <img src="{{ url('img/padron_nominal.png') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#063d9b";>Tablero</h5>
                            <p class="card-text">Sello Municipal, variables priorizados DIRESA, niños visitados</p>
                            <a href="https://app.powerbi.com/view?r=eyJrIjoiYTgyMGMzMTUtZTlkZC00YmUxLTliYjAtOWZjYjE3ZDU2YmRmIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                        </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm text-center">
                    <img src="{{ url('img/padron_nominal.png') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#063d9b";>Directorio Responsable Salud</h5>
                            <p class="card-text">Responsables del Personal de salud por establecimientos de salud</p>
                            <a href="https://airtable.com/embed/shrOO5ndVmc8cdzZa?backgroundColor=red&viewControls=on" class="btn btn-success" target="_blank">Ver mas</a>
                        </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm text-center">
                    <img src="{{ url('img/padron_nominal.png') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#063d9b";>Directorio Responsable Municipio</h5>
                            <p class="card-text">Responsables del Personal del municipio a nivel distrital</p>
                            <a href="https://airtable.com/embed/shrpaNGYbsjjXuM1U?backgroundColor=purple&viewControls=on" class="btn btn-success" target="_blank">Ver mas</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
