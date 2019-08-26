@extends('layouts.app')

@section('content')
    <div class="container-fluid  mt-2 mb-2">
        <a class="btn btn-primary" href="{{ route('role.create') }}"> Create New Role</a>
    </div>
    <table class="table table-bordered p-0 ">
        <tr>
            <th class="bg-secondary">ID</th>
            <th class="bg-secondary">Name</th>
            <th class="bg-secondary">Note</th>
            <th class="bg-secondary">Action</th>
        </tr>
        @foreach ($list_role as $role)
            <tr>
                <td class="bg-light">{{ $role->id }}</td>
                <td >{{ $role->name }}</td>
                <td class="bg-light">{{ $role->note }}</td>
                <td >
                    <form  class="d-flex justify-content-around" action="{{ route('role.destroy',$role->id) }}" >
                        <a class="btn btn-primary " href="{{ route('role.edit',$role->id) }}">Edit</a>
                        @csrf
                        <button type="submit" class="btn btn-danger ">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="container-fluid">
        <div class="col-lg-12 mt-3">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
            </div>
        </div>
        {{ $list_role->links() }}
    </div>

@endsection
