@extends('layouts.profile')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/template/pages/users.css') }}">
@endpush

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Mi Perfil</h2>
            </div>
        </div>
    </div>
</div>

<div class="content-body">
    <div id="user-profile">
        <div class="row">
            <div class="col-12">
                <div class="profile-header mb-2">
                    <div class="relative">
                        <div class="vh-50">
                            @if (Auth::user()->banner == NULL)
                                <img class="bg-cover rounded-0" src="{{ asset('img/next-genius/banner.png') }}" alt="User Profile Image" width="100%" height="450px">
                            @else
                                <img class="bg-cover rounded-0" src="{{ asset('storage/photo-banner/'.Auth::user()->banner) }}" alt="User Profile Image" width="100%" height="450px">
                            @endif
                        </div>
                        @if (Auth::user()->photo == NULL)
                            <div class="profile-img-container d-flex align-items-center justify-content-between">
                                <img src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->name }}" class="rounded-circle img-border box-shadow-1" alt="Card image">
                            </div>
                        @else
                            <div class="profile-img-container d-flex align-items-center justify-content-between">
                                <img src="{{ asset('storage/photo-profile/'.Auth::user()->photo) }}" class="rounded-circle img-border box-shadow-1" alt="Card image">
                            </div>
                        @endif
                    </div>
                    <div class="d-flex justify-content-end align-items-center profile-header-nav">
                        <nav class="navbar navbar-expand-sm w-100 pr-0">
                            <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"><i class="feather icon-align-justify"></i></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav justify-content-around w-75 ml-sm-auto">
                                    <li class="nav-item px-sm-0">
                                        <a href="#" class="nav-link font-small-3">Sobre mi</a>
                                    </li>
                                    <li class="nav-item px-sm-0">
                                        <a href="#" class="nav-link font-small-3">Billetera</a>
                                    </li>
                                    <li class="nav-item px-sm-0">
                                        <a href="#" class="nav-link font-small-3">Cursos</a>
                                    </li>
                                    <li class="nav-item px-sm-0">
                                        <a href="#" class="nav-link font-small-3">Facturas</a>
                                    </li>
                                    <li class="nav-item px-sm-0">
                                        <a href="#" class="nav-link font-small-3">Calendario</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section id="profile-info">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Actualizar informacion</h4>
                        </div>
                        <form action="{{ route('profile.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="card-body">
                                <h6 class="mb-0">Nombre de usuario:</h6>
                                <div class="form-group">
                                    <div class="controls">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" placeholder="Nombre" value="{{ $user->name }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <h6 class="mb-0">Correo Electronico:</h6>
                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                id="email" name="email" placeholder="Email" value="{{ $user->email }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <h6 class="mb-0">Foto de Perfil:</h6>
                                    <div class="media">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="photo"><b>(Solo JPG o PNG.Tamaño máximo de 1mb)</b></label>
                                            <input type="file" id="photo" class="custom-file-input" name="photo" onchange="previewFile(this, 'photo_preview')" accept="image/*">
                                        </div>
                                    </div>

                                    <div class="row mb-4 mt-4 d-none col-12" id="photo_preview_wrapper">
                                        <div class="col-12">
                                            <p class="text-center">Previsualización de la Foto de Perfil</p>
                                        </div>

                                        <div class="col"></div>
                                        <div class="col-auto">
                                            <img id="photo_preview" class="img-fluid rounded" />
                                        </div>
                                        <div class="col"></div>
                                    </div>
                                </div>

                                <div class="mt-1">
                                    <h6 class="mb-0">Foto del banner:</h6>
                                    <div class="media">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="banner"><b>(Solo JPG o PNG.Tamaño máximo de 1mb)</b></label>
                                            <input type="file" id="banner" class="custom-file-input" name="banner" onchange="previewFile(this, 'banner_preview')" accept="image/*">
                                        </div>
                                    </div>

                                    <div class="row mb-4 mt-4 d-none col-12" id="photo_preview_wrapper">
                                        <div class="col-12">
                                            <p class="text-center">Previsualización de la Foto de Banner</p>
                                        </div>
                                        <div class="col"></div>
                                        <div class="col-auto">
                                            <img id="banner_preview" class="img-fluid rounded"/>
                                        </div>
                                        <div class="col"></div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-primary mt-1">
                                        Actualiza información
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    @include('auth.passwords.change')
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@push('js')
<script>
    // $(document).ready(function() {
    //     @if($user->photo != NULL)
    //         previewPersistedFile("{{asset('storage/photo-profile/'.$user->photo)}}", 'photo_preview');
    //     @endif

    //     @if($user->banner != NULL)
    //         previewPersistedFile("{{asset('storage/photo-banner/'.$user->banner)}}", 'banner_preview');
    //     @endif
    // });
    
    function previewFile(input, preview_id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#" + preview_id).attr('src', e.target.result);
                $("#" + preview_id).css('height', '100px');
                $("#" + preview_id).parent().parent().removeClass('d-none');
            }
            $("label[for='" + $(input).attr('id') + "']").text(input.files[0].name);
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    function previewPersistedFile(url, preview_id) {
        $("#" + preview_id).attr('src', url);
        $("#" + preview_id).css('height', '100px');
        $("#" + preview_id).parent().parent().removeClass('d-none');
    }
    </script>
@endpush