@extends('home')

@section('sidebar')
    <div class="row mt-3 show-data mt-5 d-flex justify-content-center">
        <div class="card show-user   ">
            <div class="card-header">Info data</div>
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light text-info">
                    <div class="form-group">
                        <h1>Name:{{$user->name}}</h1>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light text-info">
                    <div class="form-group">
                        <strong>Department_ID:</strong>
                        {{ $user->department_id }}
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
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
        </div>
    </div>

@endsection

