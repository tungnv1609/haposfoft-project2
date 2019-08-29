@extends('admin.layout.index')

@section('content')
        <div class="row d-flex justify-content-center m-auto ">
            <div class="container-fluid d-flex justify-content-center">
                <a class="btn btn-primary" href="{{ route('report.index') }}"> Back</a>
            </div>
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
            <form action="{{ route('report.update',$report->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>ID:</strong>
                        <input type="text" name="id" value="{{ $report->id }}" class="form-control"
                               placeholder="ID">
                    </div>
                </div>
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
                <div class="container-fluid  button-submit-edit">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div class="app-sidebar sidebar-shadow">
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading"><a href="{{ route('admin') }}"
                                                            class="text-info font-size-lg">Dashboards</a></li>
                        <li>
                            <a href="{{ route('report.index') }}">User</a>
                            <a href="{{ route('report.index') }}">Customer</a>
                            <a href="{{ route('report.index') }}">report</a>
                            <a href="{{ route('report.index') }}">Report</a>
                            <a href="#">Task</a>
                            <a href="#">Feedback</a>
                        </li>
                        <li>
                            <a href="#">Report-Task</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@yield('content')
{{--@include('layout.footer')--}}
@endsection