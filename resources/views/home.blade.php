@extends('layouts.app')

@section('content')
    <div class=" d-flex justify-content-start">
        <ul class="vertical-nav-menu d-flex justify-content-start flex-column bg-light menu-left">
            <li class="app-sidebar__heading"><a href="{{route('home')}}" class="text-info"> Dashboards</a></li>
            <div class="bg-deep-blue ">
                <li class=" dropdown-toggle font-icon-wrapper ml-1"
                    data-toggle="dropdown">
                    Manage User
                </li>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('user.index') }}">List User</a>
                    <a class="dropdown-item" href="{{ route('user.create') }}">Create User</a>
                </div>
            </div>
            <div class="bg-deep-blue">
                <li class=" dropdown-toggle font-icon-wrapper ml-1"
                    data-toggle="dropdown">
                    Manage Role
                </li>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('role.index') }}">List Role</a>
                    <a class="dropdown-item" href="{{ route('role.create') }}">Create Role</a>
                </div>
            </div>
            <div class="bg-deep-blue">
                <li class=" dropdown-toggle font-icon-wrapper ml-1"
                    data-toggle="dropdown">
                    Manage Project
                </li>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('project.index') }}">List Project</a>
                    <a class="dropdown-item" href="{{ route('project.create') }}">Create Project</a>
                </div>
            </div>
            <div class="bg-deep-blue">
                <li class=" dropdown-toggle font-icon-wrapper ml-1"
                    data-toggle="dropdown">
                    Manage Department
                </li>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('department.index') }}">List Department</a>
                    <a class="dropdown-item" href="{{ route('department.create') }}">Create New Department</a>
                </div>
            </div>
            <div class="bg-deep-blue">
                <li class=" dropdown-toggle font-icon-wrapper ml-1"
                    data-toggle="dropdown">
                    Manage Feedback
                </li>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('feedback.index') }}">List Feedback</a>
                    <a class="dropdown-item" href="{{ route('feedback.create') }}">Create New Feedback</a>
                </div>
            </div>
            <div class="bg-deep-blue">
                <li class=" dropdown-toggle font-icon-wrapper ml-1"
                    data-toggle="dropdown">
                    Manage Permission
                </li>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('permission.index') }}">List Permission</a>
                    <a class="dropdown-item" href="{{ route('permission.create') }}">Create New Permission</a>
                </div>
            </div>
            <div class="bg-deep-blue">
                <li class=" dropdown-toggle font-icon-wrapper ml-1"
                    data-toggle="dropdown">
                    Manage Report
                </li>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('report.index') }}">List Report</a>
                    <a class="dropdown-item" href="{{ route('report.create') }}">Create New Report</a>
                </div>
            </div>
            <div class="bg-deep-blue">
                <li class=" dropdown-toggle font-icon-wrapper ml-1"
                    data-toggle="dropdown">
                    Manage Task
                </li>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('task.index') }}">List Task</a>
                    <a class="dropdown-item" href="{{ route('task.create') }}">Create New Task</a>
                </div>
            </div>
        </ul>
        @yield('sidebar')
    </div>
@endsection




