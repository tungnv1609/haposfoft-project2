@extends('admin.layout.index')

@section('content')
    <div class="row mt-3  d-flex justify-content-center show-data m-auto">
        <div class="card mr-2  ">
            <div class="card-header">Info data</div>
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light text-info">
                    <div class="form-group">
                        <h1>Name:{{$user->name}}</h1>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>ID:</strong>
                        {{ $user->id }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Phone:</strong>
                        {{ $user->phone }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $user->email }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Address:</strong>
                        {{ $user->address }}
                    </div>
                </div>
            </div>
        </div>
        <div class="data-avatar container-avatar">
            <img src="{{$url_avatar}}" alt="img avatar">
        </div>
        <div class="container-fluid d-flex justify-content-center mt-3 mb-4">
            <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
        </div>
    </div>
    @endsection