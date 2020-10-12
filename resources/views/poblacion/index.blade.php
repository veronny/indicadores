@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-primary float-right" href="{{ url('web') }}">Volver a Menu</a>
        </div>
    </div>
    <h3>Poblacion por Provincia,Distrito,Red,Microred y Establecimiento de salud</h3>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nro</th>
                <th>Año</th>
                <th>Descripción</th>
                <th width="100px">Detalle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <th>2020</th>
                <th>FUENTE DIRESA JUNIN</th>
                <th>
                    <a href="https://drive.google.com/uc?id=1NOK8p6hOFN51oY6mnabI0A9fH2iKmVU1&export=download">
                        <img src="{{ url('img/excel.png') }}">
                    </a>
                </th>
            </tr>
            <tr>
                <th>2</th>
                <th>2019</th>
                <th>FUENTE DIRESA JUNIN</th>
                <th>
                    <a href="#">
                        <img src="{{ url('img/excel.png') }}">
                    </a>
                </th>
            </tr>
            <tr>
                <th>3</th>
                <th>2018</th>
                <th>FUENTE DIRESA JUNIN</th>
                <th>
                    <a href="https://drive.google.com/uc?id=1GHvE_r8FJxh_2p_IvBtYLCv3hOGjdRMB&export=download">
                        <img src="{{ url('img/excel.png') }}">
                    </a>
                </th>
            </tr>
            <tr>
                <th>4</th>
                <th>2017</th>
                <th>FUENTE DIRESA JUNIN</th>
                <th>
                    <a href="https://drive.google.com/uc?id=1Lvpq1JbcuvlyjrFeNltZ2eymcC2ikPwl&export=download">
                        <img src="{{ url('img/excel.png') }}">
                    </a>
                </th>
            </tr>
            <tr>
                <th>5</th>
                <th>2016</th>
                <th>FUENTE DIRESA JUNIN</th>
                <th>
                    <a href="https://drive.google.com/uc?id=1xLrFw0-zOAwZQ4TYraWkib45GpR6VS8_&export=download">
                        <img src="{{ url('img/excel.png') }}">
                    </a>
                </th>
            </tr>
            <tr>
                <th>6</th>
                <th>2015</th>
                <th>FUENTE DIRESA JUNIN</th>
                <th>
                    <a href="https://drive.google.com/uc?id=1oxm-iJrfJhQEUs1Hn6QDVwNtNkawwTMZ&export=download">
                        <img src="{{ url('img/excel.png') }}">
                    </a>
                </th>
            </tr>
            <tr>
                <th>7</th>
                <th>2014</th>
                <th>FUENTE DIRESA JUNIN</th>
                <th>
                    <a href="https://drive.google.com/uc?id=1fM4AhoplSh5FQu-knqC49DPkxoAzhV5m&export=download">
                        <img src="{{ url('img/excel.png') }}">
                    </a>
                </th>
            </tr>
            <tr>
                <th>8</th>
                <th>2013</th>
                <th>FUENTE DIRESA JUNIN</th>
                <th>
                    <a href="https://drive.google.com/uc?id=1KKHcKEzi_AbNvvsgSF7baiw7LTGSvIoY&export=download">
                        <img src="{{ url('img/excel.png') }}">
                    </a>
                </th>
            </tr>
        </tbody>
    </table>
</div>
@endsection
