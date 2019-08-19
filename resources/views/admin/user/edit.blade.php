@extends('admin.layout.index')

@section('content')
    <div class="row m-auto d-flex justify-content-center show-edit">
        <div class="container-fluid d-flex justify-content-center">
            <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('user.update',$user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                           placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Number Phone:</strong>
                    <input type="text" name="phone" value="{{ $user->phone }}" class="form-control"
                           placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control"
                           placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" value="{{ $user->address }}" class="form-control"
                           placeholder="Address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Avatar:</strong><br>
                    <input type="file" name="avatar" value="{{ $user->avatar }}" class="form-control"
                           placeholder="Choose avatar">
                </div>
            </div>
            <div class="container-fluid  button-submit-edit">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    @endsection