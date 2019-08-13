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
    <base href="{{ asset(' ') }}">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
@include('admin.layout.header')

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

<form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid text-center lin mt-3 font-weight-bold text-info">Create New User</div>
    <div class="row mt-3 mr-5 ml-5">
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Number Phone:</strong>
                <input type="text" name="phone" class="form-control" placeholder="Number Phone">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address" class="form-control" placeholder="Address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Avatar:</strong>
                <input type="file" name="avatar" class="form-control" placeholder="Choose avatar">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Level:</strong>
                <input type="number" name="level" class="form-control" placeholder="Level">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
            <div class="form-group">
                <strong>Create_by:</strong>
                <input type="text" name="created_by" class="form-control" placeholder="Create_by">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center bg-light">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
<script type="text/javascript" href="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" href="js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>