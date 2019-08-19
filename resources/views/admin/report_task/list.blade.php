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
{{--<div class="container-fluid  mt-2 mb-2">--}}
{{--    <a class="btn btn-primary" href="{{ route('user.create') }}"> Create New User</a>--}}
{{--</div>--}}
<table class="table table-bordered p-0 ">
    <tr>
        <th class="bg-secondary">Report_ID</th>
        <th class="bg-secondary">Task_ID</th>
        <th class="bg-secondary">Action</th>
    </tr>
        <tr>
            @foreach ($list_report as $report)
            <td class="bg-light">{{ $report->id }}</td>
            @endforeach
                @foreach ($list_task as $task)
            <td class="bg-light">{{ $task->id }}</td>
            @endforeach
            <td>
                <form  class="d-flex justify-content-around" action="{{ route('report.task.destroy',$user->id) }}" method="POST">
                    <a class="btn btn-info " href="{{ route('report.task.show',$user->id) }}">Show</a>
                    <a class="btn btn-primary " href="{{ route('report.task.edit',$user->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger ">Delete</button>
                </form>
            </td>
        </tr>
</table>
<div class="container-fluid">
    <div class="col-lg-12 mt-3">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin') }}"> Back</a>
        </div>
    </div>
    {{ $list_user->links() }}
</div>
<script type="text/javascript" href="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" href="js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>