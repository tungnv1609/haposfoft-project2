@include('admin.layout.header')
<div class="container-fluid  mt-2 mb-2">
    <a class="btn btn-primary" href="{{ route('feedback.create') }}"> Add feedback</a>
</div>
<table class="table table-bordered p-0 ">
    <tr>
        <th class="bg-secondary">ID</th>
        <th class="bg-secondary">Customer_ID</th>
        <th class="bg-secondary text-center">Content</th>
        <th class="bg-secondary">Action</th>
    </tr>
    @foreach ($list_feedback as $feedback)
        <tr>
            <td class="bg-light">{{ $feedback->id }}</td>
            <td class="text-center">{{ $feedback->customer_id }}</td>
            <td class="bg-light">{{ $feedback->content }}</td>
            <td>
                <form class="d-flex justify-content-around" action="{{ route('feedback.destroy',$feedback->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('feedback.show',$feedback->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('feedback.edit',$feedback->id) }}">Edit</a>
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
    {{ $list_feedback->links() }}
</div>
