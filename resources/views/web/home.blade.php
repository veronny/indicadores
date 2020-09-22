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
                        <h5 class="card-title" style="color:#063d9b";>VACUMETRO REGIONAL</h5>
                        <p class="card-text">Vacunometro Regional Junin</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiZDE4MGNiOGItYWM2MC00YjMxLTkwYmYtYTBmMTJkNjVjNTNjIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/hechos_vitales.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>HECHOS VITALES</h5>
                        <p class="card-text">CNV en Linea y SINADEF</p>
                        <a href="https://datastudio.google.com/reporting/68171423-af1a-4580-b48b-3287ec4759a7/page/Hq2LB?s=j5yUplEIEGQ" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>


    </div>
</div>
@endsection
