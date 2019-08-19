@include('admin.layout.header')
<div class="container-fluid">

</div>
<table class="table table-bordered p-0 ">
    <tr>
        <th class="bg-secondary">ID</th>
        <th class="bg-secondary">Project_ID</th>
        <th class="bg-secondary">User_ID</th>
        <th class="bg-secondary text-center">Content</th>
        <th class="bg-secondary">Time</th>
        <th class="bg-secondary text-center">Action</th>
    </tr>
    @foreach ($list_task as $task)
        <tr>
            <td class="bg-light">{{ $task->id }}</td>
            <td class="text-center">{{ $task->project_id }}</td>
            <td class="bg-light ">{{ $task->user_id }}</td>
            <td >{{ $task->content }}</td>
            <td class="bg-light">{{ $task->time }}</td>
            <td>
                <form class="d-flex justify-content-around" action="{{ route('task.destroy',$task->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('task.show',$task->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('task.edit',$task->id) }}">Edit</a>
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
    {{ $list_task->links() }}
</div>
