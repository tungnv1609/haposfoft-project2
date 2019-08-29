@extends('admin.layout.index')

@section('content')
        <div class="row mt-3  d-flex justify-content-center m-auto">
            <div class="card mr-2  ">
                <div class="card-header">Info customer</div>
                <div class="card-body">
                    <div class="col-xs-12 col-sm-12 col-md-12 bg-light text-info">
                        <div class="form-group">
                            <h1>Name:{{$customer->name}}</h1>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                        <div class="form-group">
                            <strong>ID:</strong>
                            {{ $customer->id }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $customer->phone }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $customer->email }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $customer->address }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid d-flex justify-content-center mt-3 mb-4">
                <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
            </div>
        </div>
        <div class="app-sidebar sidebar-shadow">
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading"> <a href="{{ route('admin') }}" class="text-info font-size-lg">Dashboards</a></li>
                        <li>
                            <a href="{{ route('customer.index') }}">User</a>
                            <a href="{{ route('customer.index') }}">Customer</a>
                            <a href="#">Project</a>
                            <a href="admin/report/list/report">Report</a>
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
        @endsection
