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

    <form action="{{ route('role.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid text-center lin mt-3 font-weight-bold text-info">Create New Role</div>
        <div class="row mt-3 mr-5 ml-5">
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Note:</strong>
                    <input type="text" name="note" class="form-control" placeholder="Note">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light example">
                @foreach($permissions as $permission)
                    <div class="form-check ">
                        <input type="checkbox" class="form-check-input "
                               value="{{ $permission->id }}" name="permission[] ">
                        <label class="form-check-label">{{ $permission->note }}</label>
                    </div>
                @endforeach
                <hr>
                    <div>
                        <input type="checkbox" name="selectall-demo" id="selectall" class="all" value="1">
                        <label for="selectall">Select all</label>
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center bg-light d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-primary" href="{{ route('role.index') }}"> Back</a>
            </div>
        </div>

    </form>
    </div>
@endsection
