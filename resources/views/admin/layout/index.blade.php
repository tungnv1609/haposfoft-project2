<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="app-container app-theme-white fixed-sidebar fixed-header">
    @include('admin.layout.header')
    <div class="app-main ">
        @yield('content')
        <div class="app-sidebar sidebar-shadow">
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading"> <a href="{{ route('admin') }}" class="text-info font-size-lg">Dashboards</a></li>
                            <li>
                                <a href="{{ route('user.index') }}">User</a>
                                <a href="{{ route('project.index') }}">Project</a>
                                <a href="{{ route('assign.create') }}">Assign</a>
                                <a href="{{ route('customer.index') }}">Customer</a>
                                <a href="{{ route('report.index') }}">Report</a>
                                <a href="{{ route('task.index') }}">Task</a>
                                <a href="{{ route('feedback.index') }}">Feedback</a>
                            </li>
                            <li>
                                <a href="#">Report-Task</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
    @include('admin.layout.footer')
</div>
<script type="text/javascript" href="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" href="js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>