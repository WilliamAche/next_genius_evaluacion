@extends('layouts.app')

@include('admin.Courses.components.style')

@section('content')

<section id="number-tabs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Formulario para la creacion de curso</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="number-tab-steps wizard-circle" action="{{route('course.store')}}" method="POST">
                             @csrf
                            <!-- Step 1 -->
                            <h6>Informacion</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email de contacto</label>
                                            <input type="email" id="email" class="form-control" name="email">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Whatsapp de contacto</label>
                                            <input type="text" id="whatsapp" class="form-control" name="whatsapp">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Asunto del Ticket</label>
                                            <input type="text" id="issue" class="form-control" name="issue">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="location1">City</label>
                                            <select class="custom-select form-control" id="location1" name="location">
                                                <option value="new-york">New York</option>
                                                <option value="chicago">Chicago</option>
                                                <option value="san-francisco">San Francisco</option>
                                                <option value="boston">Boston</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 2 -->
                            <h6>Imagen</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Especifique la situacion</label>
                                            <textarea type="text" rows="5" id="description" class="form-control" name="description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Especifique la situacion</label>
                                            <textarea type="text" rows="5" id="description" class="form-control" name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Especifique la situacion</label>
                                            <textarea type="text" rows="5" id="description" class="form-control" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@include('admin.Courses.components.script')