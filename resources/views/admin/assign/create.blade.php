@extends('admin.layout.header')

@section('header')

    <form action="{{ route('assign.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid text-center lin mt-3 font-weight-bold text-info">Assign User For Project</div>
        <div class="row mt-3 mr-5 ml-5">
            <div class="form-group col-sm-8">
                <label>User Name<span class="text-danger"> *</span></label>
                <select name="user_id" id="user_id" class="form-control">
                    <option value="">Vui lòng chọn</option>
                    @foreach ($users as $user)
                        <option
                                value="{{ $user->id }}" {{ ($user->id ==  old('user_id')) ? 'selected' : '' }}>
                            {{($user->id==$user->user_id)?"-":"" }}  {{$user->name }}
                        </option>
                    @endforeach
                </select>
                <div class="form-group col-sm-8">
                    <label>Project Name<span class="text-danger"> *</span></label>
                    <select name="project_id" id="project_id" class="form-control">
                        <option value="">Vui lòng chọn</option>
                        @foreach ($projects as $project)
                            <option
                                    value="{{ $project->id }}" {{ ($project->id ==  old('project_id')) ? 'selected' : '' }}>
                                {{($project->id==$project->project_id)?"-":"" }}  {{$project->name }}
                            </option>
                        @endforeach
                    </select>
                    <p class="text-danger">{{ $errors->first('project_id')}}</p>
                </div>
                <div class="form-group col-sm-8">
                    <label>Start Date<span class="text-danger"> *</span></label>
                    <input type="date" class="form-control" name="start_date" value="{{ old('start_date')  }}">
                    <p class="text-danger">{{ $errors->first('start_date')}}</p>
                </div>
                <div class="form-group col-sm-8">
                    <label>Finish Date<span class="text-danger"> *</span></label>
                    <input type="date" class="form-control" name="end_date" value="{{ old('end_date')  }}">
                    <p class="text-danger">{{ $errors->first('end_date')}}</p>
                </div>
                <div class="form-group col-sm-8">
                    <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Assign</button>
                </div>
            </div>
        </div>
    </form>

@endsection