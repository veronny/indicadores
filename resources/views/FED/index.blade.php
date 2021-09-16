@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/prematuro.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>DIT</h5>
                        <p class="card-text">Niños con prematuriedad y/o bajo peso al nacer, que reciben gotas de hierro</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiMDAyMzcxNWYtMmJjYy00ZmJjLThlZDQtMmYyMDg4M2Q1ZmNiIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/tamizaje.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>TAMIZAJE NEONATAL</h5>
                        <p class="card-text">Recién nacidos,cuentan con tamizaje neonatal (metabólico) al mes de vida</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiZmIyNDViZjUtZWJkOS00MWQzLTg2MTYtM2FkNTRmYWNlMWJiIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9&pageName=ReportSection2193f6f4cb2050b67741" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/inicio_tratamiento.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>DIT</h5>
                        <p class="card-text">Niños y Niñas entre los 110 y 130 dias que reciben hierro en gotas</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiODU0NDBmZTEtZjcxYi00MTI5LTgxNGUtYWJhYTY1NjRhNjJkIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/dit.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>DIT</h5>
                        <p class="card-text">Niños de 6 a 8 Meses, que inician suplementacion o tratamiento preventivo</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiNjFiMjVjMGQtMTlhMy00YzU4LWE0ZmYtZmM3MTEwNTExYWZmIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9&pageName=ReportSection2193f6f4cb2050b67741" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/cred.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>CONTROLES CRED</h5>
                        <p class="card-text">Niños menores de 12 meses de edad, que cuentan con controles CRED presenciales</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiNzdiNmJjOWUtYjBlMy00Y2VjLWFkZWUtNGNjYmViYzM0ZDQ5IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9&pageName=ReportSection2193f6f4cb2050b67741" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/SISCOVID.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>COVID</h5>
                        <p class="card-text">Indicadores relacionados al COVID SIII-05 Y SII-06</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiNDcxMTllODItYjc1Yi00ZTQ1LTk4OWUtNmM5NWZjZDljNDQ0IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9&pageName=ReportSection2193f6f4cb2050b67741" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/examen.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>GESTANTE CON 4 EXAMENES</h5>
                        <p class="card-text">Gestantes atendidas en IPRESS , que reciben 4 exámenes auxiliares en el primer trimestre del embarazo</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiZDk5MmExMzgtMTZmZS00N2ViLWE2NjQtYzk0MDJkNjcwNDcyIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9&pageName=ReportSection2193f6f4cb2050b67741" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/planificacion.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>PLANIFICACION FAMILIAR</h5>
                        <p class="card-text">Usuarias nuevas en el servicio de planificacion familiar con deteccion de violencia contra la mujer tamizaje</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiNTQyODk5MTAtNWVmYS00NmZkLWJmMTgtYWY1ZTk5MGM3YmI4IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9&pageName=ReportSection2193f6f4cb2050b67741" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/gestante.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>GESTANTE INICIAN TRATAMIENTO</h5>
                        <p class="card-text">Gestantes cuentan con diagnostico e inician tratamiento, realizadas en IPRESS del primer nivel de atencion de salud</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiN2NjZWE1ODgtZTBmNC00M2Y1LTliNWEtYjY3NTdiYzI4NmZiIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9&pageName=ReportSection0a4138561842cd17b6c6" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>

                <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/paquete_nino.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>PAQUETE NIÑO MENORES 12 MESES</h5>
                        <p class="card-text">Niños con CRED, vacunacion completa, entrega de hierro y dosaje de hemglobina y cuentan con DNI</p>
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiZDVhMWJlODgtMWE5Yi00NjQwLWI3ZGItMTFhN2I0ZDhmMDE3IiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9" class="btn btn-success" target="_blank">Ver mas</a>
                    </div>
            </div>
        </div>


@endsection
