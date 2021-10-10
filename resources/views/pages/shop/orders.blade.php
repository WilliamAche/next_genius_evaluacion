@extends('layouts.app')

@include('list.components.style')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Ordenes</h2>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item active">Lista de ordenes
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
                <h4 class="card-title">Lista de ordenes</h4>
            </div>
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <p class="card-text">Descargar lista como:</p>
                    <div class="table-responsive">
                        <table class="table table-striped dataex-html5-selectors">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Usuario</th>
                                    <th>Correo electronico</th>
                                    <th>Curso</th>
                                    <th>Precio</th>
                                    <th>N° de factura</th>
                                    <th>Estado</th>
                                    <th>Fecha de creación</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->getUser->name }}</td>
                                    <td>{{ $item->getUser->email }}</td>
                                    <td>{{ $item->getCourse->name }}</td>
                                    <td>{{ $item->getCourse->price }}€</td>
                                    <td>{{ $item->getCourse->id }}</td>

                                    @if ($item->status == 0)
                                    <td>
                                        <div class="chip chip-info">
                                            <div class="chip-body">
                                                <div class="chip-text">En espera</div>
                                            </div>
                                        </div>
                                    </td>
                                    @elseif ($item->status == 1)
                                    <td>
                                        <div class="chip chip-success">
                                            <div class="chip-body">
                                                <div class="chip-text">Aprovada</div>
                                            </div>
                                        </div>
                                    </td>
                                    @else
                                    <td>
                                        <div class="chip chip-danger">
                                            <div class="chip-body">
                                                <div class="chip-text">Rechazada</div>
                                            </div>
                                        </div>
                                    </td>
                                    @endif

                                    <td>{{ date('d-m-Y', strtotime($item->created_at))}}</td>

                                    <td class="product-action row">
                                        <a href="#" title="Aprovar" class="action-approved approved mr-2 col-1"><i class="feather icon-thumbs-up"></i>
                                            <form id="approved" action="{{ route('course.orders.update', ['status' => 'approved', 'id' => $item->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
                                            </form>
                                        </a>

                                        <a href="#" title="Rechazar" class="action-rejected rejected mr-2 col-1"><i class="feather icon-thumbs-down"></i>
                                            <form id="rejected" action="{{ route('course.orders.update', ['status' => 'rejected', 'id' => $item->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
                                            </form>
                                        </a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Usuario</th>
                                    <th>Correo electronico</th>
                                    <th>Curso</th>
                                    <th>Precio</th>
                                    <th>N° de factura</th>
                                    <th>Estado</th>
                                    <th>Fecha de creación</th>
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
