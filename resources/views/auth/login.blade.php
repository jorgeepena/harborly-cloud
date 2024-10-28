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
        <div class="auth-content py-md-0 py-8">
            <div class="row">
                <div class="col-xxl-9 col-xl-8 col-lg-11 text-center mx-auto">
                    <img src="dist/img/macaroni-logged-out.png"  class="img-fluid w-sm-40 w-50 mb-3" alt="login"/>
                    <h3 class="mb-2">Dig into festive savings, Go Premium</h3>
                    <p class="w-xxl-65 w-100 mx-auto">Save 20% on the premium membership plan by using the promo code "JAMPACK20"</p>
                    <a href="#" class="btn btn-sm btn-primary btn-uppercase mt-4">Upgrade Now</a>
                    <p class="p-xs mt-5 text-light">All illustration are powered by <a href="https://icons8.com/ouch/" target="_blank" class="text-light"><u>Icons8</u></a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-5 col-lg-6 col-md-7 col-sm-10 position-relative mx-auto">
        <div class="auth-content py-md-0 py-8">
            <form method="POST" class="w-100" action="{{ route('login') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h4 class="mb-4">Inicia sesión en tu cuenta</h4>
                        <div class="row gx-3">
                            <div class="form-group col-lg-12">
                                <div class="form-label-group">
                                    <label>Correo Electrónico</label>
                                </div>
                                <input class="form-control" placeholder="Ingresa con tu correo" value="" name="email" type="email">
                            </div>
                            <div class="form-group col-lg-12">
                                <div class="form-label-group">
                                    <label>Contraseña</label>
                                    <a href="{{ route('password.request') }}" class="fs-7 fw-medium">¿Olvidaste tu contraseña?</a>
                                </div>
                                <div class="input-group password-check">
                                    <span class="input-affix-wrapper">
                                        <input class="form-control" placeholder="Ingresa tu contraseña" value="" name="password" type="password">
                                        <a href="javascript:void(0)" class="input-suffix text-muted">
                                            <span class="feather-icon"><i class="form-icon" data-feather="eye"></i></span>
                                            <span class="feather-icon d-none"><i class="form-icon" data-feather="eye-off"></i></span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="form-check form-check-sm mb-3">
                                <input type="checkbox" class="form-check-input" id="logged_in" checked>
                                <label class="form-check-label text-muted fs-7" for="logged_in">Mantener sesión iniciada</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-uppercase btn-block">Acceder</button>

                        <p class="p-xs mt-2 text-center">¿Nuevo en dipters? <a href="{{ route('register') }}"><u>Crea una nueva cuenta</u></a></p>	
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
<form method="POST" class="form-horizontal auth-form my-4" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <label for="username">Correo Electrónico</label>
        <div class="input-group mb-3 d-flex align-items-center">
            <span class="auth-form-icon">
                <ion-icon name="mail-outline"></ion-icon>
            </span>
                                                                                
            <input type="email" class="form-control" id="username" name="email" placeholder="Ingresa tu correo">
        </div>                                    
    </div>

    <div class="form-group">
        <label for="userpassword">Contraseña</label>                                            
        <div class="input-group mb-3 d-flex align-items-center"> 
            <span class="auth-form-icon">
                <ion-icon name="person-outline"></ion-icon> 
            </span>            

            <input type="password" class="form-control" id="userpassword" name="password" autocomplete="current-password" placeholder="Ingresa tu contraseña">
        </div>                               
    </div>

    <div class="form-group row mt-4">
        <div class="col-sm-6">
            <div class="custom-control custom-switch switch-success">
                <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                <label class="custom-control-label text-muted" for="customSwitchSuccess">Recordar Cuenta</label>
            </div>
        </div> 
        @if (Route::has('password.request'))
        <div class="col-sm-6 text-right">
            <a href="{{ route('password.request') }}" class="text-muted font-13"><ion-icon name="person-outline"></ion-icon> ¿Olvidaste la contraseña?</a>                                    
        </div>
        @endif
    </div>

    <div class="form-group mb-0 row mt-4">
        <div class="col-12 mt-2">
            <button class="btn-custom-bg" type="submit">Iniciar Sesión <i class="fas fa-sign-in-alt ml-1"></i></button>
        </div>
    </div>                        
</form>
--}}