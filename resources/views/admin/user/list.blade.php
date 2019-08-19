@include('admin.layout.header')
    <div class="container-fluid  mt-2 mb-2">
        <a class="btn btn-primary" href="{{ route('user.create') }}"> Create New User</a>
    </div>
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
                <form  class="d-flex justify-content-around" action="{{ route('user.destroy',$user->id) }}" method="POST">
                    <a class="btn btn-info " href="{{ route('user.show',$user->id) }}">Show</a>
                    <a class="btn btn-primary " href="{{ route('user.edit',$user->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger ">Delete</button>
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
    {{ $list_user->links() }}
</div>
