@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-primary float-right" href="{{ url('web') }}">Volver a Menu</a>
        </div>
    </div>
    <h3>Reporte Operacionales HIS MINSA</h3>
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
                            <th>Estrategia</th>
                            <th width="100px">Ene</th>
                            <th width="100px">Feb</th>
                            <th width="100px">Mar</th>
                            <th width="100px">Abr</th>
                            <th width="100px">May</th>
                            <th width="100px">Jun</th>
                            <th width="100px">Jul</th>
                            <th width="100px">Ago</th>
                            <th width="100px">Set</th>
                            <th width="100px">Oct</th>
                            <th width="100px">Nov</th>
                            <th width="100px">Dic</th>
                            <th width="100px">Anual</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>CANCER</th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1tXtwqxbbUuHGhYppOkxPaG3LM3seuspA&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1XXuzxsRovtFWQAuocwmSy8cPMsfoeoo6&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1-w9MPmk-sluGccOG-4p_-SDfn1tE4RVv&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1nOkP6IljMw6f_C22_twhWRaMxit8EYGZ&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1Bcd6bsA8K3Vde-8HUjaQ22BHyFtuRoNU&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1iYg9C_vRd6qEEqmbYynSTW4lPE6fyNdH&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1b4s5Tcsk8OCyoIFagmWLI3ccugE1goBZ&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1RZMy40R5Y8YI6KRcPgvviO9__sOcjVqU&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1kPW48Idw7C6YjKjdmDHYk6anG-jKFM6E">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1oKrjqHLn2qieEJZwGgu34Kv6GvmK4SKw">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="">
                                <!--    <img src="{{ url('img/excel.png') }}"> --!>
                                </a>
                            </th>
                            <th>
                                <a href="">
                                <!--    <img src="{{ url('img/excel.png') }}"> --!>
                                </a>
                            </th>
                            <th>
                                <a href="">
                                <!--    <img src="{{ url('img/excel.png') }}"> --!>
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>CRED</th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1K78JpnIf_jP0f-09zCVCA30S1-hRqCvs&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1aRXo7WOmMdm3tgPPgra-y4WNDIl3WOm8&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1QflSYYDLtGKSMHDKAVpnQ8OrnhZVZh2f&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1rw2tvwTJcT9h9h8CnP1wHr3vIXun4eI1&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1S1Nr8y515cla8nLRPtv9RySTkW1PGThr&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1rD_7wJuDXs8DwjS-sk2gwSQR-iQiYlX3&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=11JwVuHsu6zV5BS6pk4pqnKR1bqOFEY1P&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1uL3Zy95-5d2T0F7EyjczkpLXsylwNzPa&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1zRr7jYA0Z_iw7bSaI89WtH0nnSTUPCiz">
                                   <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=10K8gHesw3Jf84rOOnsk9bvKUFTGq-yHQ">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--    <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--    <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--    <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>INMUNIZACIONES</th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1I-BRvCQXOaTDMkkmcHZKyxm2kMT0I5sR&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  2  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  3  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  4  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=14VFGTAXptjraLX52K4okEUc3FHj6h3J1&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=12ElY7bbbf4Y2vda3O6qtme7JuaGEYiM4&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1PYOF-_OSIb6yc-bLzTMiU8dL6_kEVQ-k&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1P7M6NwJ1ZEj3rgWsE39t_F57H25jRNiI&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1ZoZt7eqSGu5Rc2SH71ALGBsaXuToM_XJ">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  10  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  11  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  12  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  t  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>ITS - VIH</th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1c-sHPFCJfVUrFE3cwXGcJaf3RAuQ7M3r&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1IhFyvo678YMDxC01sHe7GSCerLq5pk4q&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1zkJ5ZNv6G_v6axMfLqtkCSMJFFd2J03Z&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=18Xn7XzcUbjsvQz5EtYSxy1iIR3eLv236&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1M9TWY0G3xJX12MmJpYLzr5pLe61twU5N&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1laB8XGa969hLv3PXcKzGkiTd5WtY_UEq&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1I7RXUfe_5QiuM30jG1KX8BEcbp8Tx-kC&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1WDCMY-K7WVlntAY1rPfKqQU25fogtTBt&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1XdlnV7tz4nExA0PFKnWR0-nMYNJzzGDx">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1-bHW_xNKMjbrMKkCQaLoz72O3tjaHs_c">
                                     <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  11  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  12  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  t  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>METAXENICAS</th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1VTyzdPH4CVaM_bEu_oj4-Ssv9pHs7Ts9&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1VULTJqkZAhhSLL-Z767n7aNN_SftsDBo&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1X5Y4BoGEN3V6zxtq1ei5sV6-WRLgj6Y2&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1PWOWuZJCf1CiYwtGzCPrkDhMFIaazzZf&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1AB3ZZo6mK9-nKHu-y4JiYUrygCcW-OGN&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=13iCVo8HsOypQ3bJ7VEkfMrraaZAhCHt2&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=16ABucArsYW4_5YHr7CYDU4OWhz5IgpLl&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1TM3diwpY2QxzhX8_N8EwTdebNUspMHzX&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=10r5YLCycsYWO5rkShASkIO9xwFI0ERie">
                                   <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1khCKiT1tae0H4TQ_QNgVpWMJEIVY7CAT">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  11  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  12  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  t  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>NO TRANSMISIBLES</th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1Czen5H3ufAfI3w3fCKfzHbQxDR9bSzTT&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1xDvaJu9PiTgs3Zmp8Ohq303egxphCccF&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1hGyfc0ufmuLJmPmYnIzWkli0tuq2YJUu&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1ntk67YPaJO4t0qqSBgEG4wxECU1zvNWp&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1I79VEpxfnDORbpetQCfszkz5vYC-xGfc&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1hlrCzUfJX5P59SjJ4lEl3CiTTmOrO1NS&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1iGrY47azwnQw_9i-iUqxHDvhMgdO_DKQ&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1bUbKnG7ZODNa15DZNPJuLnVDn_uB_pEG&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1C-OkjshjgjX7qtoT9Ua-9I-aABPXRYDQ">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1oQTmUb3scfVEeOrg8u7K2MzDhls73l0w">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  11  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  12  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  t  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>PLANIFICACION FAMILIAR</th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1bUOwazhE_eV056rlU68G3yL0R4_P_2BE&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1uYydQF2HyH6hJjztE7-W-tP-ycvMBQrM&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1XfGb0sKRlKuprJoW0IoykGb8ndRds-ES&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=12ST-1wNJnanIGvwgMO0J0Gkam6G-g_K5&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1O9QtvMIyN3mQxhfTEjswZIbKhGlmbGr5&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1yh71ZtMkNnTXc4LGw9nNBOFwIpbJ6mDW&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=19-3ogjw41twk71zyf1Jf2nbnk8ThRow4&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1JY622jT4gBNLE9A_Wdl5ty7hO3jjJNay&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1M7pWeditUI4muEgFMh5dI1QBbM9_ZomR">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/file/d/1A02Q1DeXvYvDoB01esTuXKbFh1fYnwI6/view?usp=sharing">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  11  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  12  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  t  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>SALUD BUCAL</th>
                            <th>
                                <a href="https://drive.google.com/uc?id=18Lk8-at2EzgPFAfRSvPDgGQZB1w36znI&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1P_S99Zik53BBbgJhRsZlkQDiYkD5KVRI&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1Oaouv9HKOyWDEsHvRs2s5jhzxsZmYWuV&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1oENHoPXwafbN32_J_j4N43bxHV-yyYGv&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=186AZbq6xy6UYQnPM0BmHLzdNuX7X6Pyf&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1dbeLhWMP2TBsPFOR6oe2HNv0kJabOB_h&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1u-1s-dJ1RmKhfeIo_IFiycHLc9UADREG&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1mDNKHUbRICDlxyY6XgNiSKgbDceVMr4-&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=14XTow_Ho4n3boBw0yH-ed0yBEIkTUKjb">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1-0350v74LOdE8u2ffkIJz6Jp_o3gsCDq">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  11  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  12  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  t  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>SALUD FAMILIAR</th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1x22gp1JmpVgW0oBfbnSz7MLx9MCYbnz4&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1jvGVHfAtehFTgjssHfuRAAIP065H9F4Y&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1BXeNL_wF5fml_1iTZaEQsXCmDu-JmcAh&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1ClgKXOcLLzsguGImt6P830sBjjfY_14M&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=18vrNfu4_m1tvpOgly8cQWr454Al9S273&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1TvXzYUC4XrbyU9APnZULAfFIV1Sm4cbA&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1be9MOwM9I3x7S3zbKhO_quNKW3L2KJUp&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1Oj_Maf1R57ejy8_gcstedw7PQBGaTV9r&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=15bnlRv9uhuovhk20850kIsF6pl8ujKO0">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1codSyE-VOCtION8YhYxWf0x8TdTcFVCU">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  11  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  12  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  t  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>SALUD MATERNO</th>
                            <th>
                                <a href="https://drive.google.com/uc?id=162GuzgOI-es3OowQBRFLV2kqUkzbd7v5&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1kbtWeM5075h7f39ZAVR40xsl7-f1z1WC&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1G7gHHkwmas3JAI6Zc1GFgNjkQw4BDm28&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1X7gIv1BL6Z8d8plc9zAHQQGixHOv6U1H&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1a_qEDUgDxqX5dio2iteI_fi8OsrSzBk7&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1i8ZlhIK-GSHLGB7yQZ4TGPQOgnTA9Q7s&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1goG7NeL8PaiBlcfPI4GtqBzmzDzEQlA-&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1AV5jPWoTlJqrJdET8zGg6QeA_X2e7qzV&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1UDDtqjjMjv-OyNt16Wh7Dah63h9FDiqC">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1jNNbW_Dkg5P0lQwDjOk8RT3Ro7HP5wjH">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  11  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  12  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  t  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>SALUD MENTAL</th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1HbdulSxhqd71CHUKhnCAs9QTFZ-91uOr&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1r9JeScFkO25r3kcAqlbIaTITG3fvxXl2&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1VS-K0wY4rDumt5DhA8nJ8MI6dOZGv-_0&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1hMv_EDUsLxKih5WoVm6Z1eCxyHklN7jB&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1AX3p4_yeMhTbkDOllgUliXuUYIbzUblN&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1rECFtgPRp9rUOppNC8vSU6CkbRwePXSf&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1K-R825UiOZYTp19-wDICpajjP1kV1hDZ&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=12vOWwDjHrpohwrJ-8qA4DplcD9ILakP4&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=11uu1WYQ7q1lJcrklFesufud9m-lSTqiK">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1hK9WSjfcCVwAUVyDIKXx7NkOfo9YOdEZ">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  11  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  12  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  t  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>SALUD OCULAR</th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1mpWe7tmy3uGPoEh5RDgqgPY9j3K71BZ1">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1mN3KpH5S3etv2eRiAlX8oAORto8-DMRr">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1sgn3x8xtNjdlQuKXGoH6safdY41bYDZ3">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1pFjYEc-W4VS593Nd0aTV9hqX9YlXLucd">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1ElymBDN1ip6_tOyHQLG9ztDgPqd6n5Ye">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1dYasIVg5-pzwFFhlABTjySzscgG1Mooi">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=12TVCdxMz59U_L52KIP3RLApEM87BGFMk">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1sx5ivHStvh7IK_rwDEdCd7-hA6JrV0KS">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1edKlwuKqDMG5Tq_RcQLlgghvS5LhiDpG">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/file/d/1R9ZF-wF6SWUHuHwHqcMHE3VcNWNlFbTw/view?usp=sharing">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  11  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  12  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  t  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>TBC</th>
                            <th>
                                <a href="">
                                    <!--  9  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  9  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  9  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  9  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  9  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  9  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  9  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  9  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  9  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  10  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  11  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="">
                                    <!--  12  <img src="{{ url('img/excel.png') }}"> -->
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?export=download&id=1J7zN3-LVXPXLxpTt04FATkbrB66w5An9">
                                    <img src="{{ url('img/excel.png') }}">
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
