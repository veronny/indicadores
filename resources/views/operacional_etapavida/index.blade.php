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
                            <th>Etapa de Vida</th>
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
                            <th>NIÑO</th>
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
                            <th>ADOLESCENTE</th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1sg6zjE5qA2PRqaG1PO4PNY4dXeMue14b&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1oNoQY-_RjiCmpVOybe2NaTuq22bZBGfn&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1pT1g5i4uNUfZE13ge4cIbsF7f0qEu3_D&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1iehMQBpCrxkh0tq7PLWqaI4t4sFcAMF5&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1v587SLJOnVS9YfTUoDOjaxIz4L8XSgfH&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=143lliwdWCdexbv4F5GzAuAQEZ5HcSF__&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1JvzDp-Hqn0pxHm8t8eUPROvOZgEbHbGb&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1z7fS6o4dM5BHjzZfEMifvsvLZD4zuFWx&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1xstJ0wRooMA7kEOfunYxEdr8vgOhniA2&export=download">
                                   <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=191kHJwzsh-ZEwy_G3R6mhiXPxmTLUUSy&export=download">
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
                            <th>JOVEN</th>
                            <th>
                                <a href="https://drive.google.com/uc?id=18YWbziqR2ldSC2p1nymo4JKe2zyw3OEt&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1poLc5io2RqR85Pwygj0_WjdX86edMVSF&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=17jrY0HwdmwoN2M2Z81VIL-GRriVkbCIM&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1Q0FpBIe28D2RvsIwMAPdx1XOY6QmuKgf&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1IOUkEh7ge3DaBDKoJh_A52jTHwCtR7Tv&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1e3K0Pz7-XCFzXCcEYqQ-_moZGN-GZ_VK&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1LiqAeHiQIheP_nK6IMinOfSwgg0I6wh2&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=11kcdxLcOW_A_G7icK8lcDYmkYiEKnSop&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1kejeuRkcgO4Cpg71X95UUdCPHXXR9j78&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1Q8WvzO_a7REDoJZ-c4cWstjhZJhJWyhj&export=download">
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
                            <th>ADULTO</th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1VWS5bpjuXEa8g6KkdotUJamlun29BsXh&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1dUcyQizGbhPZMz1GrFZA65gqm7wr2wfo&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1GatxV8MzHrdKPVeV2EiqqUQXdTRm1v6Z&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1FHWx724TCmY5V74YqPk3m0gBjN01tweL&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1dm-oUdU13VPAWW1Uw_3ra-wlGTy_bNMN&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1AEW5JtFMbxCG-Dh1_yJqZue5H-cF6vtv&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1eOykJDCfX4oAWmpOaularnIbHN7B9Y0h&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1aYRdhZ4ZhhvRdrU4ZxigUSMWu6lRrbBN&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1cGFwMdLb70bKoYxw193tQCRgl0DodC3b&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1pYznPyNP3ye04KNpb-qiHaQE77ZlpEMG&export=download">
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
                            <th>ADULTO MAYOR</th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1gQeGuWFoAEzshC8V9uNlWbwerQ_F1zba&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1zKFVbgPEc9v86fduLUwNIJBSThJdpe9I&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1vIA81pDL7Gm-qRPRJoBxXfBYy9Dz76sM&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=18Eu6-ElXQ5mKJldLOuM6X2h0JMI1IjjX&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1FfnqzMcYsu57M0a0cOPyQhgQHENd5Q8R&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=15VUvGE6_9HlqDZcfEQwkUQvPS0EF8vQR&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=17zKdfoRttB95V97Zyx3NrWDLNtNOpL2P&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1hY4ijqj36NX8EMAZbJCgg9j1BMa3VvhJ&export=download">
                                    <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=1qL4MOYQZ1Ayt_xJzYSSTlLrr1t5jdgMz&export=download">
                                   <img src="{{ url('img/excel.png') }}">
                                </a>
                            </th>
                            <th>
                                <a href="https://drive.google.com/uc?id=16x_wc99G_uq148Tn-yKEfWHRKeftjctw&export=download">
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
