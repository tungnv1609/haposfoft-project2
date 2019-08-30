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

    <form action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid text-center lin mt-3 font-weight-bold text-info">Create New Feedback</div>
        <div class="row mt-3 mr-5 ml-5">
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Content:</strong>
                    <input type="text" name="content" class="form-control" placeholder="Content">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center bg-light">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('feedback.index') }}"> Back</a>
            </div>
        </div>

    </form>
    </div>
@endsection
