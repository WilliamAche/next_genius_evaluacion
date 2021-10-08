@extends('layouts.auth.register')

@section('content')
<section class="row flexbox-container">
    <div class="col-xl-8 col-12 d-flex justify-content-center">
        <div class="card bg-authentication rounded-0 mb-0">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                    <img src="{{ asset('img/template/pages/register.jpg') }}" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 p-2">
                        <div class="card-header pt-50 pb-1">
                            <div class="card-title">
                                <h4 class="mb-0">Crear una cuenta</h4>
                            </div>
                        </div>
                        <p class="px-2">Complete el siguiente formulario para crear una nueva cuenta.</p>
                        <div class="card-content">
                            <div class="card-body pt-0">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-label-group">
                                        <input type="text" id="inputName" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Nombre y Apellido" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <label for="inputName">Nombre y Apellido</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Correo Electronico" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <label for="inputEmail">Correo Electronico</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <label for="inputPassword">Contraseña</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="password" id="inputConfPassword" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña" required>
                                        <label for="inputConfPassword">Confirmar Contraseña</label>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <fieldset class="checkbox">
                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" required>
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class=""> Acepto los términos y condiciones.</span>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <a href="{{ route('login') }}" class="btn btn-outline-primary float-left btn-inline mb-50">Entrar</a>
                                    <button type="submit" class="btn btn-primary float-right btn-inline mb-50">Registrarme</a>
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
