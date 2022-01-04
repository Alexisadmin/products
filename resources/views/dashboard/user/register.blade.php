<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('bootstrap.main.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
        <strong>account Creation</strong><hr>
        <form action="{{ route('user.create')}}" method="post">
            @if(Session::get('success'))
       <div class="alert alert-success">
                {{Session::get('success')}}
                @endif
                @if(Session::get('fail'))
       <div class="alert alert-danger">
                {{Session::get('fail')}}
                @endif
    </div>
            @csrf
            <div  class="form-group">
                <label for="email">Names</label>
                <input type="name" class="form-control" name="name" placeholder="Enter your Name" value="{{old('name')}}">
<span class="text-danger">@error('name'){{$message}}@enderror</span>
            </div>
<div  class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your Email" value="{{old('email')}}">
                <span class="text-danger">@error('email'){{$message}}@enderror</span>
</div>

<div  class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" value="{{old('password')}}">
                <span class="text-danger">@error('password'){{$message}}@enderror</span>
</div>

<div  class="form-group">
                <label for="password">Re-enter Password</label>
                <input type="password" class="form-control" name="cpassword" value="{{old('cpassword')}}">
                <span class="text-danger">@error('cpassword'){{$message}}@enderror</span>
</div>
<div  class="form-group">
    <button class="btn btn-primary">Login</button>
</div>
<br>
<a href="{{route('user.login')}}"> Already have account</a>
</form>
</div>
</div>
</div>
</body>
</html>