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
        <form method="POST" class="w-100" action="{{ route('login') }}">
            @csrf
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h4 class="mb-4">Sign In to your account</h4>
                    <div class="row gx-3">
                        <div class="form-group col-lg-12">
                            <div class="form-label-group">
                                <label>Email</label>
                            </div>
                            <input class="form-control" placeholder="Your email" value="" name="email" type="email">
                        </div>
                        <div class="form-group col-lg-12">
                            <div class="form-label-group">
                                <label>Password</label>
                                <a href="{{ route('password.request') }}" class="fs-7 fw-medium">Forgot your password?</a>
                            </div>
                            
                            <div class="input-group password-check">
                                <span class="input-affix-wrapper">
                                    <input class="form-control" placeholder="Password" value="" name="password" type="password">
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
                            <label class="form-check-label text-muted fs-7" for="logged_in">Keep signed-in</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-uppercase btn-block">Begin docking</button>

                    <p class="p-xs mt-2 text-center">New to Harborly? <a href="{{ route('register') }}"><u>Create a new account</u></a></p>	
                </div>
            </div>
        </form>
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