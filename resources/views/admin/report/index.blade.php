@extends('home')

@section('sidebar')
    <div class="container ">
        <div class="container-fluid  mt-5 mb-2 d-flex justify-content-center">
            <a class="btn btn-primary mr-2" href="{{ route('report.create') }}"> Create New Report</a>
            <form>
                <div class="">
                    <input id="exampleFormControlInput1" type="email" placeholder="Searching for?"
                           class="form-control form-control-underlined">
                </div>
            </form>
        </div>
        <table class="table table-bordered p-0 mr-5">
            <tr>
                <th class="bg-secondary">ID</th>
                <th class="bg-secondary">User_ID</th>
                <th class="bg-secondary">Note</th>
                <th class="bg-secondary">Action</th>
            </tr>
            @foreach ($list_report as $report)
                <tr>
                    <td class="bg-light">{{ $report->id }}</td>
                    <td>{{ $report->user_id }}</td>
                    <td class="bg-light">{{ $report->note }}</td>
                    <td>
                        <form method="post" class="d-flex justify-content-around"
                              action="{{ route('report.destroy',$report->id) }}">
                            <a class="btn btn-primary " href="{{ route('report.edit',$report->id) }}">Edit</a>
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger ">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="container">
            <div class="col-lg-12 mt-3">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
                </div>
            </div>
            {{ $list_report->links() }}
        </div>
    </div>

@endsection
