@include('admin.layout.header')

<div class="container-fluid  mt-2 mb-2">
    <a class="btn btn-primary" href="{{ route('customer.create') }}"> Add Customer</a>
</div>
<table class="table table-bordered p-0 ">
    <tr>
        <th class="bg-secondary">ID</th>
        <th class="bg-secondary">Name</th>
        <th class="bg-secondary">Phone</th>
        <th class="bg-secondary">Email</th>
        <th class="bg-secondary">Address</th>
        <th class="bg-secondary">Action</th>
    </tr>
    @foreach ($list_customer as $customer)
        <tr>
            <td class="bg-light">{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td class="bg-light">{{ $customer->phone }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->address }}</td>
            <td>
                <form class="d-flex justify-content-around" action="{{ route('customer.destroy',$customer->id) }}"
                      method="POST">
                    <a class="btn btn-info" href="{{ route('customer.show',$customer->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('customer.edit',$customer->id) }}">Edit</a>
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
    {{ $list_customer->links() }}
</div>
