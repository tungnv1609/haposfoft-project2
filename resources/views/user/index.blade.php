@extends('home')

@section('sidebar')
    {{--<div class="container-fluid  mt-5 mb-2 d-flex justify-content-center">--}}
    {{--   --}}
    {{--</div>--}}
    <div class="container m-auto">
        <a class="btn btn-primary mr-5" href="{{ route('user.create') }}"> Create New User</a>
        <form class="mb-5 d-inline-block">
            <div class="">
                <input id="exampleFormControlInput1" type="email" placeholder="Searching for?"
                       class="form-control form-control-underlined">
            </div>
        </form>
        <table class="table table-bordered p-0 mr-5">
            <tr>
                <th class="bg-secondary">ID</th>
                <th class="bg-secondary">Department_ID</th>
                <th class="bg-secondary">Name</th>
                <th class="bg-secondary">Number Phone</th>
                <th class="bg-secondary">Email</th>
                <th class="bg-secondary">Address</th>
                <th class="bg-secondary">Action</th>
            </tr>
            @foreach ($list_user as $user)
                <tr>
                    <td class="bg-light">{{ $user->id }}</td>
                    <td>{{ $user->department_id }}</td>
                    <td class="bg-light">{{ $user->name }}</td>
                    <td>{{ $user->phone }}</td>
                    <td class="bg-light">{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                    <td>
                        <form method="post" class="d-flex justify-content-around"
                              action="{{ route('user.destroy',$user->id) }}">
                            <a class="btn btn-info " href="{{ route('user.show',$user->id) }}">Show</a>
                            <a class="btn btn-primary " href="{{ route('user.edit',$user->id) }}">Edit</a>
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
            {{ $list_user->links() }}
        </div>
    </div>
    {{--    <div class="container">--}}
    {{--        <div class="col-lg-12 mt-3">--}}
    {{--            <div class="pull-right">--}}
    {{--                <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        {{ $list_user->links() }}--}}
    {{--    </div>--}}

@endsection
