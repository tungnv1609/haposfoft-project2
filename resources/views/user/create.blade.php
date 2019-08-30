@extends('home')

@section('sidebar')

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
        <div class="container m-auto">
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container text-center lin mt-3 font-weight-bold text-info">Create New User</div>
            <div class="row mt-3 mr-5 ml-5">
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <strong>Department:</strong>
                    <select class="custom-select" name="department_id">
                        @foreach($departments as $department)
                            <option value="{{$department->id}}" class="text-uppercase">{{$department->name}}</option>
                        @endforeach
                    </select>
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
                        <input type="email" name="email" class="form-control" placeholder="Email">
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
                        <strong>Create_by:</strong>
                        <input type="text" name="created_by" class="form-control" placeholder="Create_by">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <strong>Role:</strong>
                    <select class="custom-select" multiple="multiple" name="role[]">
                        @foreach($roles as $role)
                            <option value="{{$role->id}}" class="text-uppercase">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center bg-light mt-2 d-flex justify-content-center ">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
                </div>
            </div>

        </form>
    </div>
@endsection
