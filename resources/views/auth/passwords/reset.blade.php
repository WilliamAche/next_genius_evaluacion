@extends('layouts.auth')

@section('content')
<section class="row flexbox-container">
        <div class="col-xl-7 col-10 d-flex justify-content-center">
        <div class="card bg-authentication rounded-0 mb-0 w-100">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center p-0">
                    <img src="{{ asset('img/template/pages/reset-password.png') }}" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 px-2">
                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="mb-0">Restablecer la contraseña</h4>
                            </div>
                        </div>
                        <p class="px-2">Ingrese su nueva contraseña.</p>
                        <div class="card-content">
                            <div class="card-body pt-1">
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                                    <fieldset class="form-label-group">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus placeholder="Correo electronico" readonly required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <label for="user-email">Correo electronico</label>
                                    </fieldset>

                                    <fieldset class="form-label-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Contraseña" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <label for="user-password">Contraseña</label>
                                    </fieldset>

                                    <fieldset class="form-label-group">
                                        <input type="password" class="form-control" id="user-confirm-password" placeholder="Confirmar Contraseña" name="password_confirmation" required autocomplete="new-password">
                                        <label for="user-confirm-password">Confirmar Contraseña</label>
                                    </fieldset>
                                    <div class="row pt-2">
                                        <div class="col-12 col-md-6 mb-1">
                                            <a href="{{ route('login') }}" class="btn btn-outline-primary btn-block px-0">Entrar</a>
                                        </div>
                                        <div class="col-12 col-md-6 mb-1">
                                            <button type="submit" class="btn btn-primary btn-block px-0">Restablecer la contraseña</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
