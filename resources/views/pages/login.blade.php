<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <base href="{{asset('')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="{{url('login')}}" method="POST" role="form">
                <legend>Login</legend>
                @if($errors->has('errorlogin'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{$errors->first('errorlogin')}}
                    </div>
                @endif
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}">
                    @if($errors->has('email'))
                        <p style="color:red">{{$errors->first('email')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    @if($errors->has('password'))
                        <p style="color:red">{{$errors->first('password')}}</p>
                    @endif
                </div>
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
        </div>
    </div>
</div>
<script href="js\jquery-3.4.1.min.js"></script>
</body>
</html>