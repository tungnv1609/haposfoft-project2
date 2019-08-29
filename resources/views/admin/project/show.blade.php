@extends('admin.layout.index')

@section('content')
<div class="row mt-3  d-flex justify-content-center  m-auto">
    <div class="card  show-project">
        <div class="card-header">Info project</div>
        <div class="card-body mr-10">
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light text-info">
                <div class="form-group">
                    <h1>Name:{{$project->name}}</h1>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>ID:</strong>
                    {{ $project->id }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Customer_ID:</strong>
                    {{ $project->customer_id }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $project->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Detail:</strong>
                    {{ $project->detail }}
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center mt-3 mb-4">
        <a class="btn btn-primary" href="{{ route('project.index') }}"> Back</a>
    </div>
</div>
    @endsection