<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{asset('bootstrap.main.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="container">
       <div class="col-md6 offset-md-3" style="margin:45px">
       <h4>user dashboard</h4>
       <table>
           <tr>
               <th>Name</th>
               <th>E-mail</th>
               <th>Action</th>
           </tr>
           <tr>
               <td>{{Auth::user()->name}}</td>
               <td>{{Auth::user()->email}}</td>
               <td>
                                     <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                     <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                                 </td>
           </tr>
       </table>

       </div>

   </div>
</body>
</html>