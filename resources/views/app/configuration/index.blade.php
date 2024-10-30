@extends('layouts.app')

@push('seo')
@endpush

@push('stylesheets')

@endpush

@section('content')
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col">
            <h1>Configuration</h1>
        </div>  
    </div>
    
    <hr>

    <div class="row">
        <div class="card card-body">
            <h4>Your Company: {{ $companies->first()->name ?? 'Not Configured' }}</h4>

            <form method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label class="form-label" for="name">Company Name<span class="text-danger tx-12">*</span></label>
                            <input type="text" name="name" value="{{ $companies->first()->name ?? '' }}" class="form-control" required="" autocomplete="off">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Create Company</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush