@include('admin.layout.header')
<div class="container-fluid">

</div>
<table class="table table-bordered p-0 ">
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
                <form class="d-flex" action="{{ route('report.destroy',$report->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('report.show',$report->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('report.edit',$report->id) }}">Edit</a>
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
    {{ $list_report->links() }}
</div>
