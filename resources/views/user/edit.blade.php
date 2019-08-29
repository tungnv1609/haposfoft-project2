@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('user.update',$user->id) }}" method="POST">
        @csrf
        <div class="container-fluid text-center lin mt-3  text-info font-size-xlg font-weight-light">Edit User</div>
        {{--        @method('PUT')--}}
        <div class="row mt-3 mr-5 ml-5">
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Department_ID:</strong>
                    <input type="text" name="department_id" value="{{ $user->department_id }}" class="form-control"
                           placeholder="Department_ID">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                           placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Number Phone:</strong>
                    <input type="text" name="phone" value="{{ $user->phone }}" class="form-control"
                           placeholder="Phone">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control"
                           placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" value="{{ $user->address }}" class="form-control"
                           placeholder="Address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" name="address" value="{{ $user->password }}" class="form-control"
                           placeholder="Password">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <div class="form-group">
                    <strong>Create_by:</strong>
                    <input type="text" name="address" value="{{ $user->created_by }}" class="form-control"
                           placeholder="Created_by">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">
                <strong>Role:</strong>
                <select class="custom-select" multiple="multiple" name="roles[]">
                    @foreach($roles as $role)
                        <option
                                {{ $listRoleOfUser->contains($role->id) ? 'selected' : '' }}
                                value="{{$role->id}}" class="text-uppercase">
                            {{$role->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            {{--            <div class="col-xs-12 col-sm-12 col-md-12 bg-light">--}}
            {{--                <div class="form-group">--}}
            {{--                    <strong>Avatar:</strong><br>--}}
            {{--                    <input type="file" name="avatar" value="{{ $user->avatar }}" class="form-control"--}}
            {{--                           placeholder="Choose avatar">--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="container-fluid  button-submit-edit d-flex justify-content-start">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
            </div>
        </div>
    </form>
@endsection

