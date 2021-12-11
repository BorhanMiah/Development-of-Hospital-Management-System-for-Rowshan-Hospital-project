
<!DOCTYPE html>
<html>
<head>
	<title>Presception List</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	
</head>
<body>
<h1 style="text-align: center; margin-top: 0px; background: #66CDAA; padding: 20px;">Presception Information</h1>
<div style="margin-left: 100px;">
<div style="margin-left: 300px;">
	<a style="font-size: 30px;"  href="{{route('presception.create')}}" class="btn btn-success">Create presception</a>
    <br>
    <br>
    
</div>




<table class="table table-bordered table-striped" style="margin-left: 300px; width: 1600px;" id="myTable">
	<thead >
		<th>Presception Id</th>
		<th>Doctor Name</th>
		<th>Patient Name</th>
		<th >Date</th>
		<th>Action</th>
	</tr>
	</thead>
	
	
	
</table>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>