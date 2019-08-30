@extends('home')

@section('sidebar')
    <div class="container">
        <div class="container-fluid  mt-5 mb-2 d-flex justify-content-center">
            <a class="btn btn-primary mr-2" href="{{ route('project.create') }}"> Create New Project</a>
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
                <th class="bg-secondary">User_ID</th>
                <th class="bg-secondary">Name</th>
                <th class="bg-secondary">Detail</th>
                <th class="bg-secondary">Action</th>
            </tr>
            @foreach ($list_project as $project)
                <tr>
                    <td class="bg-light">{{ $project->id }}</td>
                    <td>{{ $project->user_id }}</td>
                    <td class="bg-light">{{ $project->name }}</td>
                    <td>{{ $project->detail }}</td>
                    <td>
                        <form method="post" class="d-flex justify-content-around"
                              action="{{ route('project.destroy',$project->id) }}">
                            <a class="btn btn-primary " href="{{ route('project.edit',$project->id) }}">Edit</a>
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
            {{ $list_project->links() }}
        </div>
    </div>
@endsection
