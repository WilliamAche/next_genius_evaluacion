@extends('layouts.app')

@include('list.components.style')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Cursos</h2>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item active">Cursos
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
                    <h4 class="card-title">Lista de cursos</h4>
                </div>
                <a href="{{ route('course.create')}}" class="btn btn-outline-primary mt-4 mr-2"><i
                        class="feather icon-plus"></i>&nbsp; Crear curso</a>
            </div>
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <p class="card-text">Descargar lista como:</p>
                    <div class="table-responsive">
                        <table class="table table-striped dataex-html5-selectors">
                            <thead>
                                <tr>
                                    <th>Id del curso</th>
                                    <th>Nombre del curso</th>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                    <th>Estado</th>
                                    <th>Fecha de Creacion</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($course as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->price }}€</td>

                                    @if ($item->status == 0)
                                    <td>
                                        <div class="chip chip-danger">
                                            <div class="chip-body">
                                                <div class="chip-text">Inactivo</div>
                                            </div>
                                        </div>
                                    </td>
                                    @else
                                    <td>
                                        <div class="chip chip-success">
                                            <div class="chip-body">
                                                <div class="chip-text">Activo</div>
                                            </div>
                                        </div>
                                    </td>
                                    @endif

                                    <td>{{ date('d-m-Y', strtotime($item->created_at))}}</td>

                                    <td class="product-action row">
                                        <a href="{{ route('course.edit', $item->id) }}"
                                            class="action-edit mr-1 col-1"><i class="feather icon-edit"></i></a>
                                        <a href="#" class="action-delete delete ml-1 col-1"><i class="feather icon-trash"></i>
                                            <form id="delete" action="{{ route('course.destroy', $item->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id del curso</th>
                                    <th>Nombre del curso</th>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                    <th>Estado</th>
                                    <th>Fecha de Creacion</th>
                                    <th>Accion</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@include('list.components.script')
