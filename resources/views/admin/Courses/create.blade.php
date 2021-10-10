@extends('layouts.app')

@include('admin.Courses.components.style')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Cursos</h2>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="{{ route('course.list') }}">Lista de cursos</a>
                    </li>
                    <li class="breadcrumb-item active">Crear curso
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="d-flex justify-content-between">
                    <div class="card-header">
                        <h4 class="card-title">Formulario para la creacion de curso</h4>
                    </div>
                    <a href="{{ route('course.list')}}" class="btn btn-outline-primary mt-4 mr-2"><i
                            class="feather icon-list"></i>&nbsp; Volver a la lista</a>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="number-tab-steps wizard-circle" action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Step 1 -->
                            <h6>Informacion</h6>

                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Titulo del curso</label>
                                            <input type="text" class="form-control" name="name" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Precio del curso</label>
                                            <input type="number" class="form-control" name="price" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Descripcion</label>
                                            <textarea type="text" rows="3" class="form-control" name="description"
                                                required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <select class="custom-select form-control" name="status" required>
                                                <option value="0">Inactivo</option>
                                                <option value="1">Activo</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </fieldset>

                            <!-- Step 2 -->
                            <h6>Imagen</h6>

                            <fieldset>
                                <div class="row mb-2">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <h2 class="font-weight-bold text-white">Imagen para el banner</h2>
                                        </div>
                                    </div>

                                    <div class="media col-sm-12">
                                        <div class="custom-file">
                                            <label class="custom-file-label  border border-primary rounded">Seleccione
                                                la imagen del banner <b>(Se permiten JPG o PNG.
                                                    Tamaño máximo de 1mb)</b></label>
                                            <input type="file" id="banner" class="custom-file-input rounded"
                                                name="banner" onchange="previewFile(this, 'photo_preview')"
                                                accept="image/*" required>
                                        </div>
                                    </div>

                                    <div class="row mb-4 mt-4 d-none col-sm-12" id="photo_preview_wrapper">
                                        <div class="col"></div>
                                        <div class="col-auto">
                                            <img id="photo_preview" class="img-fluid rounded" />
                                        </div>
                                        <div class="col"></div>
                                    </div>

                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('admin.Courses.components.script')
