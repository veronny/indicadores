@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-primary float-right" href="{{ url('web') }}">Volver a Menu</a>
        </div>
    </div>
    <h3>Atendidos y atenciones</h3>


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">2020</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">2019</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">2018</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">2017</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">2016</a>
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
                            <th>ATENDIDOS Y ATENCIONES</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=14KzFZcmW3DkVphuk-ocvwk1GuHQTH_xd">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th>FEBRERO</th>
                            <th>ATENDIDOS Y ATENCIONES</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1gt7FM59biwT4PVyv3fdSPOCKdfJl9Imn">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th>MARZO</th>
                            <th>ATENDIDOS Y ATENCIONES</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1nl-TrYhdxnzUz13zPOebJiZXdmNImgG4">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>4</th>
                            <th>ABRIL</th>
                            <th>ATENDIDOS Y ATENCIONES</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1zsO1gRS24RdMZ_konRvLg82-5rQLH_gC">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>5</th>
                            <th>MAYO</th>
                            <th>ATENDIDOS Y ATENCIONES</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1sKGIP6FLzRe_FmK6cTKh3KbnyIJcuP-n">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>6</th>
                            <th>JUNIO</th>
                            <th>ATENDIDOS Y ATENCIONES</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=104mNu84DoFb608eZy6RIZ5xxVMA6kg4v">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>7</th>
                            <th>JULIO</th>
                            <th>ATENDIDOS Y ATENCIONES</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=19rcec3ASsuCZxj5cEWei4RNVbCsYAiaJ">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>8</th>
                            <th>AGOSTO</th>
                            <th>ATENDIDOS Y ATENCIONES</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1x6l2N91G8NenPiyeTC_tul85wyLEYWWK">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>9</th>
                            <th>SETIEMBRE</th>
                            <th>ATENDIDOS Y ATENCIONES</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1cQ0ZTNeXyvBkWnRyGkzAsO7spLVyLLpU">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>10</th>
                            <th>OCTUBRE</th>
                            <th>ATENDIDOS Y ATENCIONES</th>
                            <th>
                                <a href="">
                                    <!--  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>11</th>
                            <th>NOVIEMBRE</th>
                            <th>ATENDIDOS Y ATENCIONES</th>
                            <th>
                                <a href="#">
                                   <!-- <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>12</th>
                            <th>DICIEMBRE</th>
                            <th>ATENDIDOS Y ATENCIONES</th>
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
