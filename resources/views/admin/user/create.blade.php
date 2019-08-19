@extends('admin.layout.header')

@section('header')
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

<form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid text-center lin mt-3 font-weight-bold text-info">Create New User</div>
    <div class="row mt-3 mr-5 ml-5">
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Department_ID:</strong>
                <input type="number" name="department_id" class="form-control" placeholder="Department_ID">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Number Phone:</strong>
                <input type="text" name="phone" class="form-control" placeholder="Number Phone">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address" class="form-control" placeholder="Address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Avatar:</strong>
                <input type="file" name="avatar" class="form-control-file @error('avatar') is-invalid @enderror" placeholder="Choose avatar"   >
                @error('avatar')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Level:</strong>
                <input type="number" name="level" class="form-control" placeholder="Level">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Create_by:</strong>
                <input type="text" name="created_by" class="form-control" placeholder="Create_by">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center bg-light">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
