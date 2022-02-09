@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/padron_nominal.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>PADRON NOMINAL</h5>
                        <p class="card-text">Permite diagnosticar adecuadamente el estado de las variables de los registros en línea de niños y niñas menores de 6 años.</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiYTgyMGMzMTUtZTlkZC00YmUxLTliYjAtOWZjYjE3ZDU2YmRmIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/paquete_gestante.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>PAQUETE 01</h5>
                        <p class="card-text">Mujeres con parto intitucional, que durante su gestancion recibieron el paquete integrado de servicios</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiNDM2ODYxNDMtZmRhNy00YjY2LWEyMzAtODFlOThhZTA5YWQ0IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>
 
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/paquete_nino.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>PAQUETE 02</h5>
                        <p class="card-text">Niños con CRED, vacunacion completa, entrega de hierro y dosaje de hemglobina y cuentan con DNI</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiZDVhMWJlODgtMWE5Yi00NjQwLWI3ZGItMTFhN2I0ZDhmMDE3IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>





@endsection
