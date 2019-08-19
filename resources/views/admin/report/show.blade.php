@extends('admin.layout.index')

@section('content')
    <div class="row mt-3  d-flex justify-content-center  m-auto">
        <div class="card  show-report">
            <div class="card-header">Info report</div>
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light text-info">
                    <div class="form-group">
                        <h1>Name:{{$report->id}}</h1>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>User_ID:</strong>
                        {{ $report->user_id }}
                    </div>
                </div>  <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                    <div class="form-group">
                        <strong>Note:</strong>
                        {{ $report->note }}
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid d-flex justify-content-center mt-3 mb-4">
            <a class="btn btn-primary" href="{{ route('report.index') }}"> Back</a>
        </div>
    </div>
@endsection