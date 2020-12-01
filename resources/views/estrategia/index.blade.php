@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/paquete_gestante.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>SALUD SEXUAL Y REPRODUCTIVA</h5>
                        <p class="card-text">Paquete preventivo priorizado en la gestante</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiMzVlYmI2YzYtZjhjMy00MjU3LWI3MGItMGU4N2U2YWZhYTQyIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ingresar</a>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
