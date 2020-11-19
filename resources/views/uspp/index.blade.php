@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/IPRESS.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>IPRESS JUNIN</h5>
                        <p class="card-text">Reportes de las ipress acitivas e inactivas de la Region Junin</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiYmJkZGYwNjgtMWM2ZS00ZDlhLTkxNmItODc4Mjk3YTNkMmJiIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/POBLACION_SIS.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>AFILIADOS AL SIS</h5>
                        <p class="card-text">Reportes de Afiliados al SIS - Region Junin</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiOGE5NWVjNTUtYTQzZC00M2Y5LThmM2ItYzBkYjEyY2Y1OTY1IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/PROFESIONAL_SALUD.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>PRODUCCIÓN DEL PERSONAL DE SALUD</h5>
                        <p class="card-text">Reportes de la produccion de FUAS de profesionales de Salud</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiODI1MGY0YjYtMzM5NC00Y2VjLTg4NGItNjk2YzhkYjdlYWEwIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/DIGITADORES.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>PRODUCCIÓN DE DIGITADORES</h5>
                        <p class="card-text">Reportes de la digitacion de FUAS</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiMDdjNTEwMTItMzhiZi00MWNmLWEwN2ItNjM1NjI4YzliNWE1IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/GESTANTE_FPP.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>FPP DE GESTANTES</h5>
                        <p class="card-text">Reportes de gestantes con Fecha Probable de parto y Plan de seguro de Salud</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiOGEyN2NiNzAtMWIwNS00OWZjLWJlZmItNjE2ODY4YjVmMDVhIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>
@endsection
