@extends('layouts.app') @section('content')
<div class="container" style="background-color:lightgrey">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-light bg-light table-bordered">
                <form class="form-inline">
                    <div class="col">
                        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            SII-03: Niñas y niños entre 110 y 130 días de las IPRESS del departamento que reciben hierro en gotas.
                        </button>

                        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                            SII-11: Niñas y niños de 8 meses de edad que iniciaron tratamiento con hierro o suplementacion preventiva
                        </button>
                    </div>
                </form>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-success my-2 my-sm-0" href="{{ url('web') }}">Volver a Menu</a>
                </form>
            </nav>

            <div class="collapse multi-collapse" id="collapseExample">
                <div class="card card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://app.powerbi.com/view?r=eyJrIjoiZjRkMGUyZWMtN2UxYS00NTNiLWE2ODUtYjIyYWM3M2MyNDFhIiwidCI6Ijk0OWM4OGY0LWU4NzMtNDg1Ny04YzQxLWVkMDI1ZTI3ZTYyYyJ9" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="collapse multi-collapse" id="collapseExample2">
                <div class="card card-body">
                    Example 2
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
