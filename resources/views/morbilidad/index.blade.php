@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-primary float-right" href="{{ url('web') }}">Volver a Menu</a>
        </div>
    </div>
    <h3>Morbilidad</h3>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Año 2020</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Año 2019</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Año 2018</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Año 2017</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Año 2016</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nro</th>
                            <th>Mes</th>
                            <th>Descripción</th>
                            <th width="100px">Detalle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>ENERO</th>
                            <th>MORBILIDAD</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1XECNhmMB-s5DIdQKLXOmyd5fCt0iAe1E">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th>FEBRERO</th>
                            <th>MORBILIDAD</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1ExMXpHuFOnBtCOgobtENGXtNOfEhZNUQ">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th>MARZO</th>
                            <th>MORBILIDAD</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1LZYsuoDsKBu6UgVRHz90gnUPZahzEn2a">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>4</th>
                            <th>ABRIL</th>
                            <th>MORBILIDAD</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1OLoLwRG2exYsaRpAcL92ZiqhoRUCrPIe">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>5</th>
                            <th>MAYO</th>
                            <th>MORBILIDAD</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=10cnipJlgsY_hPFgWKv5LxvjQnF_DBf1Q">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>6</th>
                            <th>JUNIO</th>
                            <th>MORBILIDAD</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1bRTrQ1g4G0hmhR88lB3rpJwiDIbX6ul_">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>7</th>
                            <th>JULIO</th>
                            <th>MORBILIDAD</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1HDtfxoYnVjkSCCPPof7oj3ownCaPxyxz">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>8</th>
                            <th>AGOSTO</th>
                            <th>MORBILIDAD</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1UP8O1hu2U99g924YL48x3vTECfwHQ16h">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>9</th>
                            <th>SETIEMBRE</th>
                            <th>MORBILIDAD</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1arSzhTTxSO8sDXqxiZQuMvAuV6gev6Go">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>10</th>
                            <th>OCTUBRE</th>
                            <th>MORBILIDAD</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1mC2yh7mo43bH-OV0PJmoxTyb8zzvKKV2">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>11</th>
                            <th>NOVIEMBRE</th>
                            <th>MORBILIDAD</th>
                            <th>
                                <a href="#">
                                   <!-- <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>12</th>
                            <th>DICIEMBRE</th>
                            <th>MORBILIDAD</th>
                            <th>
                                <a href="#">
                                    <!-- <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                        </tr>
                    </tbody>
                </table>
        </div>

        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

        </div>
    </div>
</div>
@endsection
