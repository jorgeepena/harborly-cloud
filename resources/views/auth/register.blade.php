@extends('layouts.app')

@push('seo')
@endpush

@push('stylesheets')
<style>
    .auth-page{
        padding-top: 120px;
    }
</style>
@endpush

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <form class="w-100" method="POST" action="{{ route('register') }}">
            @csrf
            <input type="hidden" name="field1" value="">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h4 class="text-center mb-2">Create your account</h4>
                    <div class="row gx-3">
                        <div class="form-group col-lg-12">
                            <label class="form-label">Nombre / Usuario</label>
                            <input placeholder="Ingresa tu nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{--  
                        <div class="form-group col-lg-6">
                            <label class="form-label">Nombre de Usuario</label>
                            <input class="form-control" placeholder="Inventa un nombre único" value="" type="text">
                        </div>
                        --}}
                        <div class="form-group col-lg-12">
                            <label class="form-label">Correo Electrónico</label>
                            <input placeholder="Ingresa tu correo" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-lg-12">
                            <label class="form-label">Contraseña</label>
                            <div class="input-group password-check">
                                <span class="input-affix-wrapper affix-wth-text">
                                    <input type="password" placeholder="Mínimo 6 letras y números" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="none">
                                    <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                                        <span>Mostrar</span>
                                        <span class="d-none">Ocultar</span>
                                    </a>
                                </span>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-lg-12">
                            <label class="form-label">Confirmar Contraseña</label>
                            <div class="input-group password-check">
                                <span class="input-affix-wrapper affix-wth-text">
                                    <input type="password" placeholder="Por seguridad confirma tu contraseña" class="form-control" name="password_confirmation" required autocomplete="none">
                                    <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                                        <span>Mostrar</span>
                                        <span class="d-none">Ocultar</span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-check form-check-sm mb-3">
                        <input type="checkbox" class="form-check-input" id="logged_in" checked>
                        <label class="form-check-label text-muted fs-8" for="logged_in">By creating an account you specify that you have read and agree with our <a href="#">Tearms of use</a> and <a href="#">Privacy policy</a>. We may keep you inform about latest updates through our default <a href="#">notification settings</a></label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-rounded btn-uppercase btn-block">Crea tu cuenta</button>
                    <p class="p-xs mt-2 text-center">¿Ya eres usuario? <a href="{{ route('login') }}"><u>Inicia Sesión</u></a></p>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
@endpush

{{--  
<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="field1" style="display:none !important" tabindex="-1" autocomplete="off" value="">

    <div class="row">
        <div class="form-group col-md-6">
            <label for="name">Nombre <span class="text-danger">*</span></label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group col-md-6">
            <label for="last_name">Apellido <span class="text-danger">*</span></label>
            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
            @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group col-md-12 mt-3">
            <label for="email">Correo Electrónico <span class="text-danger">*</span></label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group col-md-6 mt-3">
            <label for="password">Contraseña <span class="text-danger">*</span></label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        <div class="form-group col-md-6 mt-3 mb-3">
            <label for="password-confirm">Confirmar Contraseña <span class="text-danger">*</span></label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="form-group mb-0 mt-4">
        <button type="submit" class="btn-custom-bg">
            Registrar tu Cuenta
        </button>
    </div>
</form>
--}}