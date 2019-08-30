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
        <form action="{{ route('report.update',$report->id) }}" method="post">
            <div class="container-fluid text-center lin mt-3  text-info font-size-xlg font-weight-light">Edit report</div>
            @csrf
            @method('PUT')
            <div class="row mt-3 mr-5 ml-5">
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>User_ID:</strong>
                        <input type="text" name="user_id" value="{{ $report->user_id }}" class="form-control"
                               placeholder="User_ID">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Note:</strong>
                        <input type="text" name="note" value="{{ $report->note }}" class="form-control"
                               placeholder="Note">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <strong>Task:</strong>
                    <select class="custom-select" multiple="multiple" name="tasks[]">
                        @foreach($tasks as $task)
                            <option
                                    {{ $listTaskOfReport->contains($task->id) ? 'selected' : '' }}
                                    value="{{$task->id}}" class="text-uppercase">
                                {{$task->content}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="container-fluid  button-submit-edit d-flex justify-content-center mt-2">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a class="btn btn-primary" href="{{ route('report.index') }}"> Back</a>
                </div>
            </div>
        </form>
    </div>
@endsection

