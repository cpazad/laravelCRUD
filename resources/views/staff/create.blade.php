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
	<a class="btn btn-primary" href="{{route('staff.index')}}">Back to Table</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Add New Staff</h2>
				@if($errors -> any())
				<p class="alert alert-danger">{{$errors -> first()}}<button class="close" data-dismiss ="alert">&times;</button></p>
				@endif

				@if(Session::has('success'))
				<p class="alert alert-success">{{Session::get('success')}}<button class="close" data-dismiss ="alert">&times;</button></p>
				@endif

				<form action="{{ route('staff.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text" value="{{old('name')}}">
						@if($errors -> has('name'))
				<p class="alert alert-danger">{{$errors -> first()}}<button class="close" data-dismiss ="alert">&times;</button></p>
				@endif
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="email" value="{{old('email')}}">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text" value="{{old('cell')}}">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text" value="{{old('uname')}}">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input name="password" class="form-control" type="password" value="{{old('password')}}">
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" type="text" value="{{old('age')}}">
					</div>
					<div class="form-group">
						<label for="">Upload Photo</label>
						<input name="photo" class="form-control" type="file">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Add">
					</div>
				</form>
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