@extends('layouts.app')

@include('pages.shop.components.style')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Tienda</h2>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item active">Tienda
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content-detached content-right">
    <div class="content-body">

        <!-- Ecommerce Search Bar Starts -->
        <section id="ecommerce-searchbar">
            <div class="row mt-1">
                <div class="col-sm-12">
                    <fieldset class="form-group position-relative">
                        <input type="text" class="form-control search-product" id="iconLeft5" placeholder="Buscar un curso en especifico">
                        <div class="form-control-position">
                            <i class="feather icon-search"></i>
                        </div>
                    </fieldset>
                </div>
            </div>
        </section>
        <!-- Ecommerce Search Bar Ends -->

        <!-- Ecommerce Products Starts -->
        @foreach ($course as $item)
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="img-fluid" src="{{asset('storage/course-banner/'.$item->banner)}}" alt="Card image cap" width="100%">
                    <div class="card-body">
                        <form action="{{ route('course.order', $item->id) }}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-between">
                        <h5>{{ $item->name }}</h5>
                        <h5 class="text-primary">{{ $item->price }}€</h5>
                    </div>
                        <p class="card-text  mb-0">{{ $item->description }}</p>
                        <div class="card-btns d-flex justify-content-between mt-2">
                            <button type="submit" class="btn btn-primary text-white waves-effect waves-light">Comprar</button>
                            <a href="{{ route('course.details', $item->id) }}" class="btn btn-outline-primary waves-effect waves-light">Detalles</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>


<div class="sidebar-detached sidebar-left">
    <div class="sidebar">
        <!-- Ecommerce Sidebar Starts -->
        <div class="sidebar-shop" id="ecommerce-sidebar-toggler">

            <div class="row">
                <div class="col-sm-12">
                    <h6 class="filter-heading d-none d-lg-block">Filtros</h6>
                </div>
            </div>
            <span class="sidebar-close-icon d-block d-md-none">
                <i class="feather icon-x"></i>
            </span>
            <div class="card">
                <div class="card-body">
                    <div class="multi-range-price">
                        <div class="multi-range-title pb-75">
                            <h6 class="filter-title mb-0">Precios</h6>
                        </div>
                        <ul class="list-unstyled price-range" id="price-range">
                            <li>
                                <span class="vs-radio-con vs-radio-primary py-25">
                                    <input type="radio" name="price-range" checked value="false">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="ml-50">Todos</span>
                                </span>
                            </li>
                            <li>
                                <span class="vs-radio-con vs-radio-primary py-25">
                                    <input type="radio" name="price-range" value="false">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="ml-50"> menor o igual a $10</span>
                                </span>
                            </li>
                            <li>
                                <span class="vs-radio-con vs-radio-primary py-25">
                                    <input type="radio" name="price-range" value="false">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="ml-50">$10 - $100</span>
                                </span>
                            </li>
                            <li>
                                <span class="vs-radio-con vs-radio-primary py-25">
                                    <input type="radio" name="price-range" value="false">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="ml-50">$100 - $500</span>
                                </span>
                            </li>
                            <li>
                                <span class="vs-radio-con vs-radio-primary py-25">
                                    <input type="radio" name="price-range" value="false">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="ml-50"> mayor o igual a $500</span>
                                </span>
                            </li>

                        </ul>
                    </div>
                    <!-- /Price Filter -->
                    <hr>
                    <!-- Categories Starts -->
                    <div id="product-categories">
                        <div class="product-category-title">
                            <h6 class="filter-title mb-1">Categorias</h6>
                        </div>
                        <ul class="list-unstyled categories-list">
                            <li>
                                <span class="vs-radio-con vs-radio-primary py-25">
                                    <input type="radio" name="category-filter" value="false" checked>
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="ml-50">Todas</span>
                                </span>
                            </li>
                            <li>
                                <span class="vs-radio-con vs-radio-primary py-25">
                                    <input type="radio" name="category-filter" value="false">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="ml-50">Diseño grafico</span>
                                </span>
                            </li>
                            <li>
                                <span class="vs-radio-con vs-radio-primary py-25">
                                    <input type="radio" name="category-filter" value="false">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="ml-50">Desarrollo frontend</span>
                                </span>
                            </li>
                            <li>
                                <span class="vs-radio-con vs-radio-primary py-25">
                                    <input type="radio" name="category-filter" value="false">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="ml-50">Desarrollo backend</span>
                                </span>
                            </li>
                            <li>
                                <span class="vs-radio-con vs-radio-primary py-25">
                                    <input type="radio" name="category-filter" value="false">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="ml-50">Programacion movil</span>
                                </span>
                            </li>
                            <li>
                                <span class="vs-radio-con vs-radio-primary py-25">
                                    <input type="radio" name="category-filter" value="false">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="ml-50">Programacion web</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!-- Categories Ends -->
                    <hr>
                    <!-- Rating section starts -->
                    <div id="ratings">
                        <div class="ratings-title mt-1 pb-75">
                            <h6 class="filter-title mb-0">Calificaciones</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <ul class="unstyled-list list-inline ratings-list mb-0">
                                <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                <li>o más</li>
                            </ul>
                            <div class="stars-received">(160)</div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <ul class="unstyled-list list-inline ratings-list mb-0">
                                <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                <li>o más</li>
                            </ul>
                            <div class="stars-received">(176)</div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <ul class="unstyled-list list-inline ratings-list mb-0">
                                <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                <li>o más</li>
                            </ul>
                            <div class="stars-received">(291)</div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <ul class="unstyled-list list-inline ratings-list mb-0 ">
                                <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                <li>o más</li>
                            </ul>
                            <div class="stars-received">(190)</div>
                        </div>
                    </div>
                    <!-- Rating section Ends -->
                    <hr>
                    <!-- Clear Filters Starts -->
                    <div id="clear-filters">
                        <button class="btn btn-block btn-outline-primary">Borrar filtros</button>
                    </div>
                    <!-- Clear Filters Ends -->
                </div>
            </div>
        </div>
        <!-- Ecommerce Sidebar Ends -->
    </div>
</div>
<!-- END: Content-->
@endsection

@include('pages.shop.components.script')
