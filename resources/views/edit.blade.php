<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 Crud Application</title>

    <link rel="stylesheet" href="{{asset('css')}}/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/style.css">

    <script src="{{asset('js/jquery-3.3.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
</head>
<body>

<div class="style" style="margin-top:50px;">
<div class="container">
<div class="row">

<div class="col-md-8 m-auto">
<h2 class="text-light text-center bg-info">Update Student</h2>

@if(session('success'))
<div class="alert alert-success" role="alert">
  <strong>{{session('success')}}</strong>
</div>
@endif

<form action="{{url('student/update/' . $student->id)}}" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="name" type="text" class="form-control @error('name') is invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$student->name}}">
   @error('name')
   <strong class="text-danger">{{$message}}</strong>
   @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Roll</label>
    <input name="roll" type="text" class="form-control @error('roll') is invalid @enderror" id="exampleInputPassword1" value="{{$student->roll}}">
    @error('roll')
   <strong class="text-danger">{{$message}}</strong>
   @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Class</label>
    <input name="class" type="text" class="form-control @error('class') is invalid @enderror" id="exampleInputPassword1" value="{{$student->class}}">
    @error('class')
   <strong class="text-danger">{{ $message }}</strong>
   @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


  </div>
</div>
    </div>
</body>
</html>