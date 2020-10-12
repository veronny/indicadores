@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-primary float-right" href="{{ url('web') }}">Volver a Menu</a>
        </div>
    </div>


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tablero</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Directorio Responsable Salud</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Directorio Responsable Municipio</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#padron" role="tab" aria-controls="padron" aria-selected="false">Padron Nominal por meses</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://app.powerbi.com/view?r=eyJrIjoiYmM1NjY1YjUtOWQyMi00MDdiLWIxZGItOGY4YTczNTFkMmQyIiwidCI6Ijk0OWM4OGY0LWU4NzMtNDg1Ny04YzQxLWVkMDI1ZTI3ZTYyYyJ9&pageName=ReportSection" allowFullScreen></iframe>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="airtable-embed" src="https://airtable.com/embed/shrOO5ndVmc8cdzZa?backgroundColor=red&viewControls=on" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <iframe class="airtable-embed" src="https://airtable.com/embed/shrpaNGYbsjjXuM1U?backgroundColor=purple&viewControls=on" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>
        </div>
        <div class="tab-pane fade" id="padron" role="tabpanel" aria-labelledby="contact-tab">
            <iframe width="1024" height="1060" src="https://app.powerbi.com/view?r=eyJrIjoiMDIzYTA5ZGUtOWQ3Yy00M2QwLWFjNDMtZDY4OTg4NzEzYzBjIiwidCI6ImQxYzM1MDFkLWE2MWUtNGJiYi04NDdhLWQ5NDRiZmFlOGRiMCIsImMiOjR9&pageName=ReportSection" frameborder="0" allowFullScreen="true"></iframe>
        </div>
    </div>
</div>

@endsection
