<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <h4 class="card-title">Cursos Obtenidos</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="mis cursos" alt="First slide">
                                <div class="carousel-caption">
                                    <h3>Mis cursos</h3>
                                    <p></p>
                                </div>
                            </div>
                            @foreach ($order as $item)
                            <div class="carousel-item">
                                <img class="img-fluid" src="{{asset('storage/course-banner/'.$item->getCourse->banner)}}"
                                    alt="Second slide">
                                <div class="carousel-caption">
                                    <h3>{{ $item->getCourse->name }}</h3>
                                    <p></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        {{-- <a class="carousel-control-prev" href="#carousel-example-caption" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-caption" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <h4 class="card-title">Nuevos cursos disponibles</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="mis cursos" alt="First slide">
                                <div class="carousel-caption">
                                    <h3>Nuevos Cursos</h3>
                                    <p></p>
                                </div>
                            </div>
                            @foreach ($course as $item)
                            <div class="carousel-item">
                                <img class="img-fluid" src="{{asset('storage/course-banner/'.$item->banner)}}"
                                    alt="Second slide">
                                <div class="carousel-caption">
                                    <h3>{{ $item->name }}</h3>
                                    <p></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        {{-- <a class="carousel-control-prev" href="#carousel-example-caption" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-caption" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
