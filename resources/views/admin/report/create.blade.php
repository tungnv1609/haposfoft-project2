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
        <form action="{{ route('report.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container text-center lin mt-3 font-weight-bold text-info">Create New Report</div>
            <div class="row mt-3 mr-5 ml-5">
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <strong>User:</strong>
                    <select class="custom-select" name="user_id">
                        @foreach($users as $user)
                            <option value="{{$user->id}}" class="text-uppercase">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Note:</strong>
                        <input type="text" name="note" class="form-control" placeholder="Note">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <strong>Task:</strong>
                    <select class="custom-select" multiple="multiple" name="task[]">
                        @foreach($tasks as $task)
                            <option value="{{$task->id}}" class="text-uppercase">{{$task->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center bg-light mt-2 d-flex justify-content-center ">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a class="btn btn-primary" href="{{ route('report.index') }}"> Back</a>
                </div>
            </div>

        </form>
    </div>
@endsection
