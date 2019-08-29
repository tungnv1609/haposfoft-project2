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

<form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid text-center lin mt-3 font-weight-bold text-info font-size-xlg">Create New Project</div>
    <div class="row mt-3 mr-5 ml-5">
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Customer_ID:</strong>
                <input type="number" name="customer_id" class="form-control" placeholder="Customer_ID">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name Project">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Detail:</strong>
                <input type="text" name="detail" class="form-control" placeholder="Detail">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center bg-light">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection
