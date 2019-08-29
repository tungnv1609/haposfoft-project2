@extends('layouts.app')

@section('content')
    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading"> <a href="{{route('home')}}" class="text-info"> Dashboards</a></li>
                        <li>
                            <div class="dropdown">
                                <button type="button" class="btn btn-light dropdown-toggle font-icon-wrapper ml-1"
                                        data-toggle="dropdown">
                                    Manage User
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('user.index') }}">List User</a>
                                    <a class="dropdown-item" href="{{ route('user.create') }}">Create User</a>
                                    <a class="dropdown-item" href="{{ route('user.edit') }}">Edit Info User</a>
                                    <a class="dropdown-item" href="{{ route('user.show') }}">Show Info User</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-light dropdown-toggle font-icon-wrapper ml-1"
                                        data-toggle="dropdown">
                                    Manage Role
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('user.index') }}">List User</a>
                                    <a class="dropdown-item" href="{{ route('user.create') }}">Create User</a>
                                    <a class="dropdown-item" href="{{ route('user.edit') }}">Edit Info User</a>
                                    <a class="dropdown-item" href="{{ route('user.show') }}">Show Info User</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-light dropdown-toggle font-icon-wrapper ml-1"
                                        data-toggle="dropdown">
                                    Manage Project
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('user.index') }}">List User</a>
                                    <a class="dropdown-item" href="{{ route('user.create') }}">Create User</a>
                                    <a class="dropdown-item" href="{{ route('user.edit') }}">Edit Info User</a>
                                    <a class="dropdown-item" href="{{ route('user.show') }}">Show Info User</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-light dropdown-toggle font-icon-wrapper ml-1"
                                        data-toggle="dropdown">
                                    Manage Department
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('user.index') }}">List User</a>
                                    <a class="dropdown-item" href="{{ route('user.create') }}">Create User</a>
                                    <a class="dropdown-item" href="{{ route('user.edit') }}">Edit Info User</a>
                                    <a class="dropdown-item" href="{{ route('user.show') }}">Show Info User</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection


