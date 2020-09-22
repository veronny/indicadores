@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/brechas_vacunometro.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>VACUNOMETRO</h5>
                        <p class="card-text">Cierra de brechas Inmunizaciones</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiOGUzOGE3OTgtYWU4ZC00MDM4LTk2NzItOTkzZjExYjRkYTE2IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ingresar</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/brechas_suple.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>PREVENTIVO</h5>
                        <p class="card-text">Cierre de brechas suplemento de hierro</p>
                        <a href="https://datastudio.google.com/s/nhJhfizD-aQ" class="btn btn-success" target="_blank">Ingresar</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/brechas_tratamiento.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>TRATAMIENTO</h5>
                        <p class="card-text">Cierre de brechas tratamiento de anemia</p>
                        <a href="https://datastudio.google.com/s/i7G4rGNtk5w" class="btn btn-success" target="_blank">Ingresar</a>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
