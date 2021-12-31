
<!DOCTYPE html>
<html>
<head>
	<title>Schedule Update</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color: #66CDAA;">
	<h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Update Schedule Information</h1>
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$errors}}</li>
		@endforeach
	</ul>
</div>
@endif
<form method="post" action="{{route('schedule.update',['id'=>$schedule->id])}}" style="margin-right: 400px; margin-left: 400px; margin-top: 50px;">
@method('Put')
	@csrf
	<div class="form-group">
		<label for="day"><h5>Day</h5></label>
		<input type="text" name="day" class="form-control" required value="{{$schedule->day}}">
	</div>
	<div class="form-group">
		<label for="time"><h5>Patient Name:</h5></label>
		<input type="text" name="time" class="form-control" required value="{{$schedule->time}}">
	</div>
	<div class="form-group">
		<label for="d_name"><h5>Doctor Name:</h5></label>
		<input type="text" name="d_name" class="form-control" required value="{{$schedule->d_name}}">
	</div>
	<div class="form-group">
		<label for="room_number"><h5>Doctor Room Number:</h5></label>
		<input type="text" name="room_number" class="form-control" required value="{{$schedule->room_number}}">
	</div>
	<input type="submit" name="update" value="update" class="btn btn-primary" >
</form>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>