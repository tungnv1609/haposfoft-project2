@include('admin.layout.header')
<div class="container-fluid  mt-2 mb-2">
    <a class="btn btn-primary" href="{{ route('project.create') }}"> Add Project</a>
</div>
<table class="table table-bordered p-0 ">
    <tr>
        <th class="bg-secondary">ID</th>
        <th class="bg-secondary">Customer_ID</th>
        <th class="bg-secondary">Name</th>
        <th class="bg-secondary">Detail</th>
        <th class="bg-secondary">Action</th>
    </tr>
    @foreach ($list_project as $project)
        <tr>
            <td class="bg-light">{{ $project->id }}</td>
            <td class="text-center">{{ $project->customer_id }}</td>
            <td class="bg-light">{{ $project->name }}</td>
            <td>{{ $project->detail }}</td>
            <td>
                <form class="d-flex justify-content-around" action="{{ route('project.destroy',$project->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('project.show',$project->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('project.edit',$project->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<div class="container-fluid">
    <div class="col-lg-12 mt-3">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin') }}"> Back</a>
        </div>
    </div>
    {{ $list_project->links() }}
</div>
