<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Login</title>
    <link rel="stylesheet" href="{{asset('bootstrap.main.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
        <h4>user login</h4><hr>
        <form action="{{ route('user.check')}}" method="post">

            @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
</div>
@endif
        @csrf
            <div  class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                <span class="text-danger">@error('email'){{$message}}@enderror</span>
</div>
<div  class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
                <span class="text-danger">@error('password'){{$message}}@enderror</span>
</div>
<div  class="form-group">
    <button class="btn btn-primary">Login</button>
</div>
<br>
<a href="{{route('user.register')}}"> Create new account</a>
</form>
</div>
</div>
</div>
</body>
</html>