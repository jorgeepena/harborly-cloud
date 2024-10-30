@extends('layouts.app')

@push('seo')
@endpush

@push('stylesheets')
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <form method="POST" action="{{ route('brands.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">Project Name<span class="text-danger tx-12">*</span></label>
                                <input type="text" name="name" class="form-control" required="" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">Description <span class="text-info tx-12">(Optional)</span></label>
                                <input type="text" name="name" class="form-control" required="" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">Project Owner <span class="text-danger tx-12">*</span></label>
                                <input type="text" name="name" class="form-control" required="" autocomplete="off">
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">Sync to a client <span class="text-success tx-12">Recommended</span></label>
                                <input type="text" name="name" class="form-control" required="" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Project</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush