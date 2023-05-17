<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CustomAuthController</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
<form action="{{route('registration-user')}}" method="post">
  @if(Session::has('success'))
  <div class="alert alert-success">
    {{Session::get('success')}}
  </div>
  @endif
  @if(Session::has('fail'))
  <div class="alert alert-danger">
    {{Session::get('fail')}}
  </div>
  @endif
  @csrf
<h4>registration</h4>
<hr>
<div class="form-group">
<label for="name">Full Name</label>
  <input type="text" class="form-control" placeholder="enter Full Name"
  name="name" value="{{old('name')}}">
  <span class="text-danger">@error('name') {{$message}} @enderror</span>
</div>
<div class="form-group">
<label for="email">Email</label>
  <input type="email" class="form-control" placeholder="enter email"
  name="email" value="{{old('email')}}">
  <span class="text-danger">@error('email') {{$message}} @enderror</span>
</div>
<div class="form-group">
<label for="password">Password</label>
  <input type="password" class="form-control" placeholder="enter password"
  name="password" value="{{old('password')}}">
  <span class="text-danger">@error('password') {{$message}} @enderror</span>
</div>
<div class="form-group">
    <button class="btn btn-block btn-primary" type="submit">
        Register

    </button>
</div>
<br>
<a href="login">Already registred!! login here.</a>

</form>
</div>
</div>
</div>


</body>
</html>