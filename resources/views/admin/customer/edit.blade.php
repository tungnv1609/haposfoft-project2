@extends('admin.layout.index')

@section('content')
        <div class="row d-flex justify-content-center m-auto ">
            <div class="container-fluid d-flex justify-content-center">
                <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
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
            <form action="{{ route('customer.update',$customer->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $customer->name }}" class="form-control"
                               placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Number Phone:</strong>
                        <input type="text" name="phone" value="{{ $customer->phone }}" class="form-control"
                               placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="text" name="email" value="{{ $customer->email }}" class="form-control"
                               placeholder="Email">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Address:</strong>
                        <input type="text" name="address" value="{{ $customer->address }}" class="form-control"
                               placeholder="Address">
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
                            <a href="{{ route('user.index') }}">User</a>
                            <a href="{{ route('project.index') }}">Project</a>
                            <a href="{{ route('assign.create') }}">Assign</a>
                            <a href="{{ route('customer.index') }}">Customer</a>
                            <a href="{{ route('report.index') }}">Report</a>
                            <a href="{{ route('task.index') }}">Task</a>
                            <a href="#">Feedback</a>
                        </li>
                        <li>
                            <a href="#">Report-Task</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endsection
