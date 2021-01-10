<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>
	
	

	<div class="wrap ">
		<div class="card shadow">
	
		<a class="btn btn-primary" href="{{route('student.index')}}">Back to Table</a>
			<div class="card-body">
				<h2>Student's Profile</h2>
				<table class="table table-stripe">
				<tr>
				<td>Name</td>
				<td>{{$staff -> name}}</td>
				</tr>
				<tr>
				<td>Email</td>
				<td>{{$staff -> email}}</td>
				</tr>
				<tr>
				<td>Username</td>
				<td>{{$staff -> uname}}</td>
				</tr>
				<tr>
				<td>Age</td>
				<td>{{$staff -> age}}</td>
				</tr>
				</table>
				
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>