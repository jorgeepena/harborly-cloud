@extends('layouts.app')

@push('seo')
@endpush

@push('stylesheets')
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col">
            <h1>Bienvenido, {{ Auth::user()->name ?? Auth::user()->email }}.</h1>
            @if(Auth::user()->company == null)
            <div class="alert alert-warning">You haven't completed your company information. Do it now <a href="{{ route('account.configuration.company') }}">Here</a></div>
            @endif
        </div>
        <div class="col">
            <div class="d-flex justify-content-end">
                <a href="{{ route('projects.create') }}" class="btn btn-primary">Dock a Project</a>
            </div>
        </div>        
    </div>
    
    <hr>

    <div class="row">
        @if($projects->count() == 0)
            <h3>You've still havent docked a project in your harbor. Dock a project <a href="">here</a></h3>
        @else
            @foreach($projects as $project)
            <div class="col-md-4">
                <div class="card card-body">
                    <h4>Projects</h4>
                    <hr>
                    akshjdoas
                </div>
            </div>
            @endforeach
        @endif
    </div>
</div>
@endsection

@push('scripts')
@endpush