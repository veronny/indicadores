@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/paquete_gestante.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Gestantes con paquete preventivo completo</h5>
                        <p class="card-text">Porcentaje de gestantes con paquete preventivo completo</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiMzVlYmI2YzYtZjhjMy00MjU3LWI3MGItMGU4N2U2YWZhYTQyIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/planificacion.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Mujeres acceden a metodos de planificacion familiar</h5>
                        <p class="card-text">Porcentaje de mujeres que acceden a metodos de planificacion familiar post parto institucion</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiNDBjMzdkYzUtMmJjYy00MjQ2LTgzMmYtOTg3MDZlNGQ4Mjg1IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>


@endsection
