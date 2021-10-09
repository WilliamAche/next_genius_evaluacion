@extends('layouts.auth')

@section('content')
<section class="row flexbox-container">
    <div class="col-xl-8 col-12 d-flex justify-content-center">
        <div class="card bg-authentication rounded-0 mb-0">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                    <img src="{{ asset('img/template/pages/login.png') }}" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 px-2">
                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="mb-0">Acceso</h4>
                            </div>
                        </div>
                        <p class="px-2">Bienvenido de nuevo, inicie sesión en su cuenta.</p>
                        <div class="card-content">
                            <div class="card-body pt-1">
                                <form method="POST" action="{{ route('login') }}">
                                @csrf
                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="user-name" placeholder="Correo Electronico" value="{{ old('email') }}" name="email" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <div class="form-control-position">
                                            <i class="feather icon-mail"></i>
                                        </div>
                                        <label for="user-name">Email</label>
                                    </fieldset>
                                    <fieldset class="form-label-group position-relative has-icon-left">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="user-password" placeholder="Contraseña" name="password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <div class="form-control-position">
                                            <i class="feather icon-lock"></i>
                                        </div>
                                        <label for="user-password">Contraseña</label>
                                    </fieldset>
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <div class="text-left">
                                            <fieldset class="checkbox">
                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Recuérdame</span>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="text-right">                                        
                                            @if (Route::has('password.request'))
                                            <a class="card-link" href="{{ route('password.request') }}">
                                                ¿Olvidaste tu contraseña?
                                            </a>
                                        @endif
                                    </div>
                                    </div>
                                    <a href="{{ route('register') }}" class="btn btn-outline-primary float-left btn-inline">Registrarse</a>
                                    <button type="submit" class="btn btn-primary float-right btn-inline">Iniciar sesion</button>
                                </form>
                            </div>
                        </div>
                        <div class="login-footer">
                            <div class="divider">
                                <div class="divider-text">Iniciar sesión con</div>
                            </div>
                            <div class="footer-btn d-inline d-flex justify-content-center">
                                <a href="#" class="btn btn-facebook"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="btn btn-twitter white"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="btn btn-google"><span class="fa fa-google"></span></a>
                                <a href="#" class="btn btn-github"><span class="fa fa-github-alt"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
