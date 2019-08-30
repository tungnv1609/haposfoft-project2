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
        <form action="{{ route('permission.update',$permission->id) }}" method="POST">
            @csrf
            <div class="container-fluid text-center lin mt-3  text-info font-size-xlg font-weight-light">Edit
                permission
            </div>
            @method('PUT')
            <div class="row mt-3 mr-5 ml-5">
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Permission Name:</strong>
                        <input type="text" name="name" value="{{ $permission->name }}" class="form-control"
                               placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Note:</strong>
                        <input type="text" name="note" value="{{ $permission->note }}" class="form-control"
                               placeholder="Note">
                    </div>
                </div>
                <div class="container-fluid  button-submit-edit d-flex justify-content-start d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a class="btn btn-primary" href="{{ route('permission.index') }}"> Back</a>
                </div>
            </div>
        </form>
    </div>
@endsection

