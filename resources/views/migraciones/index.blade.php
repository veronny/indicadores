@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/migraciones.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Modulo de Inmunizaciones</h5>
                        <p class="card-text">Migracion de Eqhali a HIS MINSA</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiYzFlMmYxYjYtN2Y0My00NzY4LWFiYWQtNWMxZjQ3ZTBkZmI5IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/migraciones.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Modulo CRED</h5>
                        <p class="card-text";>Migracion de Eqhali a HIS MINSA</p>
                        <a href="#" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/migraciones.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Modulo WAWARED</h5>
                        <p class="card-text";>Migracion de Eqhali a HIS MINSA</p>
                        <a href="https://datastudio.google.com/reporting/0dd17102-809e-4314-8cf0-0de0b086db17" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

@endsection
