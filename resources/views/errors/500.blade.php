@extends('layouts.app')

@push('seo')
@endpush

@push('stylesheets')
@endpush

@section('content')
<div class="row">
    <div class="col-xl-7 col-lg-6 d-lg-block d-none">
        <div class="auth-content py-md-0 py-8">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <img src="dist/img/macaroni-fatal-error.png"  class="img-fluid w-sm-80 w-50" alt="login"/>
                    <p class="p-xs mt-5 text-light">Illustrations powered by <a href="https://icons8.com/ouch/" target="_blank" class="text-light"><u>Icons8</u></a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-5 col-lg-6 col-md-7 col-sm-10">
        <div class="auth-content py-md-0 py-8">
            <div class="w-100">
                <div class="row">
                    <div class="col-xxl-9 col-xl-8 col-lg-11">
                        <h1 class="display-4 fw-bold mb-2">500</h1>
                        <p class="p-lg">Sorry, the requested page cannot be found. Try finding with another name.</p>
                        <a href="index.html" class="btn btn-primary mt-4">Return to app</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush