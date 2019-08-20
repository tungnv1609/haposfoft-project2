@extends('layouts.app')

@section('content')
        <div class="app-main bg-focus">
            <div class="app-sidebar sidebar-shadow">
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Dashboards</li>
                            <li>
                                <a href="{{ route('web.index') }}">User</a>
                                <a href="{{ route('project.index') }}">Project</a>
                                <a href="{{ route('feedback.index') }}">Feedback</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection


