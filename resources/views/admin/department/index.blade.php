@extends('home')

@section('sidebar')
    <div class="container">
        <div class="container-fluid  mt-5 mb-2 d-flex justify-content-center">
            <a class="btn btn-primary mr-2" href="{{ route('department.create') }}"> Create New Department</a>
            <form>
                <div class="">
                    <input id="exampleFormControlInput1" type="email" placeholder="Searching for?"
                           class="form-control form-control-underlined">
                </div>
            </form>
        </div>
        <table class="table table-bordered p-0 ">
            <tr>
                <th class="bg-secondary">ID</th>
                <th class="bg-secondary">Name</th>
                <th class="bg-secondary">Action</th>
            </tr>
            @foreach ($list_department as $department)
                <tr>
                    <td class="bg-light">{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                    <td>
                        <form method="post" class="d-flex justify-content-around"
                              action="{{ route('department.destroy',$department->id) }}">
                            <a class="btn btn-primary " href="{{ route('department.edit',$department->id) }}">Edit</a>
                            @csrf
                            {{ method_field('DELETE') }}
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
            {{ $list_department->links() }}
        </div>
    </div>
@endsection
