@extends('layouts.app')

@include('list.components.style')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Facturas</h2>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item active">Lista de facturas
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Lista de facturas</h4>
            </div>
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <p class="card-text">Descargar lista como:</p>
                    <div class="table-responsive">
                        <table class="table table-striped dataex-html5-selectors">
                            <thead>
                                <tr>
                                    <th>Id del usuario</th>
                                    <th>Nombre de usuario</th>
                                    <th>Correo electronico</th>
                                    <th>Tipo de usuario</th>
                                    <th>Estado</th>
                                    <th>Fecha de creación</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($users as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>

                                    @if ($item->admin == 0)
                                    <td>Normal</td>
                                    @else
                                    <td>Administrador</td>
                                    @endif

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
                                </tr>
                                @endforeach --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id del usuario</th>
                                    <th>Nombre de usuario</th>
                                    <th>Correo electronico</th>
                                    <th>Tipo de usuario</th>
                                    <th>Estado</th>
                                    <th>Fecha de creación</th>
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