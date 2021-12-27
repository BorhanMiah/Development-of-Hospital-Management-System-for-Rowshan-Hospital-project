<!DOCTYPE html>
<html>
<head>
	<title>Schedule Update</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color: #66CDAA;">
	<h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Update Diagnostic Information</h1>
	
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$errors}}</li>
		@endforeach
	</ul>
</div>
@endif
<form method="post" action="{{route('diagnostic.update',['id'=>$diagnostic->id])}}" style="margin-right: 400px; margin-left: 400px; margin-top: 100px;">
	@csrf
	<div class="form-group">
		<label for="p_name"><h5>Patient Name:</h5></label>
		<input type="text" name="p_name" class="form-control" required value="{{$diagnostic->p_name}}">
	</div>
	<div class="form-group">
		<label for="date"><h5>Date:</h5></label>
		<input type="text" name="date" class="form-control" required value="{{$diagnostic->date}}">
	</div>
	<div class="form-group">
		<label for="t_name"><h5>Test Name:</h5></label>
		<input type="text" name="t_name" class="form-control" required value="{{$diagnostic->t_name}}">
	</div>
	<div class="form-group">
		<label for="test_price"><h5>Test Price:</h5></label>
		<input type="text" name="test_price" class="form-control" required value="{{$diagnostic->test_price}}">
	</div>
	<input type="submit" name="update" value="update" class="btn btn-primary" >
</form>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>