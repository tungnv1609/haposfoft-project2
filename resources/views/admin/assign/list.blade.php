@extends('admin.layout.header')

@section('header')
    <table class="table table-bordered p-0 ">
        <tr>
            <th class="bg-secondary">Project_ID</th>
            <th class="bg-secondary">User_ID</th>
            <th class="bg-secondary">Start_Date</th>
            <th class="bg-secondary">End_Date</th>
        </tr>
        @foreach ($list_assign as $assign)
            <tr>
                <td class="bg-light">{{ $assign->project_id }}</td>
                <td class="text-center">{{ $assign->user_id }}</td>
                <td class="bg-light">{{ $assign->start_date}}</td>
                <td>{{ $assign->end_date }}</td>
            </tr>
        @endforeach
    </table>
    <div class="container-fluid">
        <div class="col-lg-12 mt-3">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin') }}"> Back</a>
            </div>
        </div>
        {{ $list_assign->links() }}
    </div>

@endsection