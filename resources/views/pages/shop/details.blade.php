@extends('layouts.app')

@include('pages.shop.components.style')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Detalles</h2>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('shop.list') }}">Tienda</a>
                    </li>
                    <li class="breadcrumb-item active">Detalles
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('course.order', $course->id) }}" method="POST">
        @csrf
        <div class="row mb-5 mt-2">
            <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                <div class="d-flex align-items-center justify-content-center">
                    <img src="{{asset('storage/course-banner/'.$course->banner)}}" class="img-fluid" alt="product image">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h5>{{ $course->name }}</h5>
                <div class="ecommerce-details-price d-flex flex-wrap">
                    <p class="text-primary font-medium-3 mr-1 mb-0">{{ $course->price }}€</p>
                    <span class="pl-1 font-medium-3 border-left">
                        <i class="feather icon-star text-warning"></i>
                        <i class="feather icon-star text-warning"></i>
                        <i class="feather icon-star text-warning"></i>
                        <i class="feather icon-star text-warning"></i>
                        <i class="feather icon-star text-secondary"></i>
                    </span>
                    <span class="ml-50 text-dark font-medium-1">424 calificaciones</span>
                </div>
                <hr>
                <p>{{ $course->description }}</p>
                <hr>
                <p>Disponible - <span class="text-success">En stock</span></p>

                <div class="d-flex flex-column flex-sm-row">
                    <button type="submit" class="btn btn-outline-primary mr-0 mr-sm-1 mb-1 mb-sm-0"><i class="feather icon-shopping-cart mr-25"></i>Comprar curso</button>
                    <button class="btn btn-outline-danger"><i class="feather icon-heart mr-25"></i>Favoritos</button>
                </div>
                <hr>
                <p>Compartir curso en:</p>
                <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-facebook"></i></button>
                <button type="button" class="btn btn-icon rounded-circle btn-outline-info mr-1 mb-1"><i class="feather icon-twitter"></i></button>
                <button type="button" class="btn btn-icon rounded-circle btn-outline-danger mr-1 mb-1"><i class="feather icon-youtube"></i></button>
                <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-instagram"></i></button>
            </div>
        </div>
        </form>
    </div>
    <div class="item-features py-5">
        <div class="row text-center pt-2">
            <div class="col-12 col-md-4 mb-4 mb-md-0 ">
                <div class="w-75 mx-auto">
                    <i class="feather icon-award text-primary font-large-2"></i>
                    <h5 class="mt-2 font-weight-bold">100% Original</h5>
                    <p>Curso original de NextGenius.es</p>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <div class="w-75 mx-auto">
                    <i class="feather icon-clock text-primary font-large-2"></i>
                    <h5 class="mt-2 font-weight-bold">1 mes de garantia</h5>
                    <p>Los primeros 10 cursos comprados tendran garantia durante 1 mes</p>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <div class="w-75 mx-auto">
                    <i class="feather icon-shield text-primary font-large-2"></i>
                    <h5 class="mt-2 font-weight-bold">100% seguro</h5>
                    <p>Con profesores y profesionales calificados en cada curso</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@include('pages.shop.components.script')
