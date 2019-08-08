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
<div class="app-container app-theme-white fixed-sidebar fixed-header">
    @include('admin.layout.header')

    <div class="app-main ml-2 mr-2">
        <table class="table table-bordered p-0 ">
            <tr>
                <th class="bg-secondary">ID</th>
                <th class="bg-secondary">Name</th>
                <th class="bg-secondary">Number Phone</th>
                <th class="bg-secondary">Email</th>
                <th class="bg-secondary">Address</th>
                <th class="bg-secondary">Action</th>
            </tr>
            @foreach ($list_user as $user)
                <tr>
                    <td class="bg-light">{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td class="bg-light">{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="bg-light">{{ $user->address }}</td>
                    <td>
{{--                        <form action="{{ route('user.destroy',$user->id) }}" method="POST">--}}
                            <form action="" method="POST">
{{--                                <a class="btn btn-info" href="{{ route('user.show',$user->id) }}">Show</a>--}}
                                                            <a class="btn btn-info" href="">Show</a>
{{--                                <a class="btn btn-primary" href="{{ route('admin.user.edit.user',$user->id) }}">Edit</a>--}}
                                                            <a class="btn btn-primary" href="">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="container-fluid">
        <div class="col-lg-12 mt-3">
            <div class="pull-right">
                <a class="btn btn-light"> Back</a>
{{--                <a class="btn btn-light" href="{{ route('admin/index') }}"> Back</a>--}}
            </div>
        </div>
        {{ $list_user->links() }}
    </div>
</div>
<script type="text/javascript" href="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" href="js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>