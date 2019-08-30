@extends('admin.layout.index')

@section('content')
        <div class="row d-flex justify-content-center m-auto ">
            <div class="container-fluid d-flex justify-content-center">
                <a class="btn btn-primary" href="{{ route('project.index') }}"> Back</a>
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
            <form action="{{ route('project.update',$project->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Customer_ID:</strong>
                        <input type="text" name="customer_id" value="{{ $project->customer_id }}" class="form-control"
                               placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $project->name }}" class="form-control"
                               placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <input type="text" name="email" value="{{ $project->detail }}" class="form-control"
                               placeholder="Email">
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
                            <a href="{{ route('project.index') }}">User</a>
                            <a href="{{ route('project.index') }}">Customer</a>
                            <a href="{{ route('project.index') }}">Project</a>
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
        @endsection
