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
    <div class="app-main">
        <div class="row mt-3  d-flex justify-content-center show-user m-auto">
            <div class="card mr-2  ">
                <div class="card-header">Info User</div>
                <div class="card-body">
                    <div class="col-xs-12 col-sm-12 col-md-12 bg-light text-info">
                        <div class="form-group">
                            <h1>Name:{{$user->name}}</h1>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                        <div class="form-group">
                            <strong>ID:</strong>
                            {{ $user->id }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $user->phone }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $user->address }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-avatar container-avatar">
                <img src="{{$url_avatar}}" alt="img avatar">
            </div>
            <div class="container-fluid d-flex justify-content-center mt-3 mb-4">
                <a class="btn btn-primary" href="{{ route('web.index') }}"> Back</a>
            </div>
        </div>
        <div class="app-sidebar sidebar-shadow">
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading"> <a href="{{ route('home') }}" class="text-info font-size-lg">Dashboards</a></li>
                        <li>
                            <a href="{{ route('web.index') }}">User</a>
                            <a href="#">Project</a>
                            <a href="#">Feedback</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</div>
@yield('content')
{{--@include('layout.footer')--}}
<script type="text/javascript" href="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" href="js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>