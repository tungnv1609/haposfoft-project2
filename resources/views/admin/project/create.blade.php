@extends('home')

@section('sidebar')
    <div class="container">
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

    <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="container-fluid text-center lin mt-3 font-weight-bold text-info">Create New project</div>
        <div class="row mt-3 mr-5 ml-5">
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Project Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Note:</strong>
                    <input type="text" name="detail" class="form-control" placeholder="Detail">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Created_by:</strong>
                    <input type="text" name="created_by" class="form-control" placeholder="Created_by">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Deleted_at:</strong>
                    <input type="date" name="deleted_at" class="form-control" placeholder="Deleted_at">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Created_at:</strong>
                    <input type="date" name="created_at" class="form-control" placeholder="Created_at">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light example">
                @foreach($users as $user)
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input"
                               value="{{ $user->id }}" {{ $user->department_id == 1 ? 'disable' : ''}} name="user[]">
                        <label class="form-check-label">{{ $user->name }}</label>
                    </div>
                @endforeach
                <hr>
                <label><input type="checkbox" class="all"> All</label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center bg-light d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-primary" href="{{ route('project.index') }}"> Back</a>
            </div>
        </div>
    </form>
    </div>
@endsection
