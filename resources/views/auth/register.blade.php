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
<div class="row align-items-center auth-page">
    <div class="col-xl-7 col-lg-6 d-lg-block d-none">
        <div class="auth-content py-md-0  py-8">
            <div class="row">
                <div class="col-xxl-9 col-xl-8 col-lg-11 mx-auto">
                    <div class="text-center">
                        <h3 class="mb-2">High quality Bootstrap template for your next web project.</h3>
                        <p>Start your <mark>14days free</mark> trial.</p>
                    </div>
                    <ul class="list-icon mt-4">
                        <li class="mb-1"><p><i class="ri-check-fill text-success"></i><span>There are many variations of passages of Lorem Ipsum available, in some form, by injected humour</span></p></li>
                        <li class="mb-1"><p><i class="ri-check-fill text-success"></i><span>There are many variations of passages of Lorem Ipsum available, in some form, by injected humour</span></p></li>
                    </ul>

                    {{--  
                    <div class="row gx-3 mt-7">
                        <div class="col-lg-12">
                            <div class="card card-shadow">
                                <img class="card-img-top" src="dist/img/slide3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase">Soporte</h5>
                                    <p class="card-text">This is a wider card with supporting text.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    --}}

                    <p class="mt-5 p-xs credit-text text-center text-light">All illustration are powered by <a href="https://icons8.com/ouch/" target="_blank" class="text-light"><u>OUCH</u></a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-5 col-lg-6 col-md-7 col-sm-10 position-relative mx-auto">
        <div class="auth-content py-md-0 py-8">
            <form class="w-100" method="POST" action="{{ route('register') }}">
                @csrf
                <input type="hidden" name="field1" value="">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h4 class="text-center mb-2">Crea tu cuenta</h4>
                        <p class="text-center mb-4">Comienza de inmediato <mark>completamente gratis</mark></p>
                        {{--  
                        <button class="btn btn-outline-dark btn-rounded btn-block mb-3"><span><span class="icon"><i class="fab fa-google"></i></span><span>Sign Up with Gmail</span></span></button>
                        <button class="btn btn-social btn-social-facebook btn-rounded btn-block"><span><span class="icon"><i class="fab fa-facebook"></i></span><span>Sign Up with Facebook</span></span></button>
                        <div class="title-sm title-wth-divider divider-center my-4"><span>Or</span></div>
                        --}}

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