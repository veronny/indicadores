@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-primary float-right" href="{{ url('web') }}">Volver a Menu</a>
        </div>
    </div>


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Indicador S1: Pacientes positivos COVID-19 con 4 seg telef. y 2 seg domi</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Indicador S2: Ejecucion presupuestal Prevencion, Control, Dx y Tto de Coronavirus</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://app.powerbi.com/view?r=eyJrIjoiNWM5MWJjZDUtZTNhYi00YjU4LThmMDgtM2ZhZjFmOWQ0MDM3IiwidCI6Ijk0OWM4OGY0LWU4NzMtNDg1Ny04YzQxLWVkMDI1ZTI3ZTYyYyJ9" allowFullScreen></iframe>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://app.powerbi.com/view?r=eyJrIjoiYWI1YjcwMWUtOTNjZi00Y2U2LTg5NWEtOWJhNDVkOTQzZTI5IiwidCI6ImQ0NDUyNmQzLTQxNDMtNDU5YS1hNjFhLTcxYWE3YWZkMjIwMiJ9&pageName=ReportSection9e13e4de0ac1d043f4d0" allowFullScreen></iframe>

            </div>
        </div>
    </div>
</div>

@endsection
