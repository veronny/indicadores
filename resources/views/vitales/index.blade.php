@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/hechos_vitales.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Nacimientos</h5>
                        <p class="card-text">Informacion de Nacimientos - CNV EN LINEA</p>
                        <a href="https://cnvjunin.bitrix24.site/" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm text-center">
                <img src="{{ url('img/hechos_vitales.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#063d9b";>Defunciones</h5>
                        <p class="card-text";>Informacion de Defunciones - SINADEF</p>
                        <a href="https://sinadefjunin.bitrix24.site/" class="btn btn-success">Ver mas</a>
                    </div>
            </div>
        </div>


@endsection
