@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/anemia.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Niños con diagnostico de anemia entre 6 y 11 meses, recuperado</h5>
                        <p class="card-text">Porcentaje de niños con diagnostico de anemia entre 6 y 11 meses, que se han recuperado</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiM2ViNWY5NTQtODdiOC00NjUyLWEzZjQtZTE1MzcyNjI5OTlhIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/paquete_nino.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Niños menores de 18 meses, con paquete integrado preventivo</h5>
                        <p class="card-text">Porcentaje de niños sin dx de anemia, CRED, vacunas, dosaje de homoglobina y suplementacion con hierro</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiM2ZkN2UzMjgtMzQwNC00MWRhLWE0NjYtN2ZiMmY5MzRkNzI4IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/cred.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Porcentaje de recien nacidos con dos controles CRED</h5>
                        <p class="card-text">Porcentaje de recien nacidos con dos controles CRED</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiNTRkZWNhNWMtNjcwYy00MzA1LThjZTgtNDVhMTM5NDZiYzQwIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/vacuna_nacido.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Recien nacidos de parto institucional que reciben vacunas completas</h5>
                        <p class="card-text">Porcentaje de recien nacidos que reciben vacunas completas antes del alta</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiZjNmMWMyYmMtZWY3Zi00NjFhLWI5YTgtYmQ3NGFjZGM5Zjk0IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

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

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/visita_anemia.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Niños de 6 a 11 meses con dx anemia que reciben consejeria a traves de visita domiciliaria o teleorientacion</h5>
                        <p class="card-text">Porcentaje de niños de 6 a 11 meses con dx anemia que reciben consejeria a traves de visita domiciliaria o teleorientacion</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiYjg3MDgxMDktZjM5NC00YThhLTg4NzMtNjJiYmY4NTIyYTc4IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/cuello_uterino.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Mujeres de 25 a 64 años con tamizaje para la deteccion de lesiones premalignas e incipiente de cancer de cuello uterino</h5>
                        <p class="card-text">Porcentaje de mujeres de 25 a 64 años con tamizaje para la deteccion de lesiones premalignas e incipiente de cancer de cuello uterino</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiZTAzNjdiMjctNjExZC00MWQxLTllMTItYjQ5NTA4YWI2ZDk3IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

@endsection
