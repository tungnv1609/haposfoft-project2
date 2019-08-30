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
            <div class="container text-center lin mt-3 font-weight-bold text-info">Create New Task</div>
            <div class="row mt-3 mr-5 ml-5">
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <strong>Project Name:</strong>
                    <select class="custom-select" name="department_id">
                        @foreach($projects as $project)
                            <option value="{{$project->id}}" class="text-uppercase">{{$project->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <strong>User Name:</strong>
                    <select class="custom-select" name="department_id">
                        @foreach($users as $user)
                            <option value="{{$user->id}}" class="text-uppercase">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Task Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Task Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Start:</strong>
                        <input type="datetime-local" name="Created_at" class="form-control" placeholder="Start">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Done:</strong>
                        <input type="datetime-local" name="time" class="form-control" placeholder="Time">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center bg-light mt-2 d-flex justify-content-center ">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a class="btn btn-primary" href="{{ route('task.index') }}"> Back</a>
                </div>
            </div>

        </form>
    </div>
@endsection
