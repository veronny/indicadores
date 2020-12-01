@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/padron_nominal.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>PADRON NOMINAL</h5>
                        <p class="card-text">Permite diagnosticar adecuadamente el estado de las variables de los registros en línea de niños y niñas menores de 6 años.</p>
                        <a href="{{ route('PadronNominal') }}" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/convenios.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>CONVENIOS EN SALUD</h5>
                        <p class="card-text">Compromisos vinculados al servicio de Salud, AP-ENDIS Y Fondo de estimulo al desempeño y logro de resultados FED</p>
                        <a href="{{ route('convenios') }}" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/SISCOVID.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>INFORMACION SISCOVID</h5>
                        <p class="card-text">Reportes y seguimientos de las Fichas 100 Prueba rapida, F200 investigacion epidemiologica y F300 Seguimiento Clinico</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiNjUwZWZmMWEtMzE0Zi00MzI0LThkOGYtMjU1MmViMzI0ZmIxIiwidCI6Ijk0OWM4OGY0LWU4NzMtNDg1Ny04YzQxLWVkMDI1ZTI3ZTYyYyJ9&pageName=ReportSection" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/cierre_brechas.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>CIERRE DE BRECHAS</h5>
                        <p class="card-text">Inmunizaciones y suplementacion de anemia</p>
                        <a href="{{ route('brechas') }}" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/vacunometro.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>VACUNOMETRO REGIONAL</h5>
                        <p class="card-text">Vacunometro Regional Junin</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiZjgxNzAwMzgtYjkxNy00YmMxLTkxNDktMTYyZjY1MmE3ZDE3IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>
        <!--  HECHOS VITALES -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/hechos_vitales.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>HECHOS VITALES</h5>
                        <p class="card-text">CNV en Linea y SINADEF</p>
                        <a href="https://sinadefjunin.bitrix24.site/" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>
        <!--  POBLACION -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/poblacion.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>POBLACION</h5>
                        <p class="card-text">Poblacion proyectada de la region Junin</p>
                        <a href="{{ route('poblacion') }}" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>
        <!--  ATENDIDOS Y ATENCIONES -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/atendidos.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>ATENDIDOS Y ATENCIONES</h5>
                        <p class="card-text">Atendidos y atenciones</p>
                        <a href="{{ route('atendidos') }}" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>
        <!--  MORBILIDAD -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/moribilidad.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>MORBILIDAD</h5>
                        <p class="card-text">CNV en Linea y SINADEF</p>
                        <a href="#" class="btn btn-light">Ver mas</a>
                    </div>
            </div>
        </div>
        <!--  ESTRATEGIAS SANITARIAS -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/estrategias_salud.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>ESTRATEGIAS SANITARIAS</h5>
                        <p class="card-text">ESTRATEGIAS SANITARIAS</p>
                        <a href="#" class="btn btn-light" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>
        <!--  ETAPAS DE VIDA-->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/etapas_vida.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>ETAPAS DE VIDA</h5>
                        <p class="card-text">ETAPAS DE VIDA</p>
                        <a href="#" class="btn btn-light" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>
        <!--  PROMOCION DE LA SALUD -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/promsa.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>PROMOCION DE LA SALUD</h5>
                        <p class="card-text">PROMOCION DE LA SALUD</p>
                        <a href="#" class="btn btn-light" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>
        <!--  SIS -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/USPP.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>UNIDAD DE SEGUROS</h5>
                        <p class="card-text">Reportes y Seguimientos de afiliados, producción , indicadores y seguimientos con Base de Datos SIS</p>
                        <a href="{{ route('uspp') }}" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>



    </div>
</div>
@endsection
