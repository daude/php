<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	 <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
</head>
<body>
	<div class="container">
		@if(count($errors) > 0)
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif

		@if(Session::has('err'))
			{{Session::get('err')}}
		@endif
		<div class="row">

			<div class="col-md-6">
				<h1>Register</h1>
				<form action="{{route('register')}}" method="post" class="well">
					{{csrf_field()}}
					<div class="form-group">
						<label for="#">Username</label>
						<input type="text" name="uname" class="form-control" value={{Request::old('uname')}}>
					</div>
					<div class="form-group">
						<label for="#">Email</label>
						<input type="text" name="email" class="form-control" value={{Request::old('email')}}>
					</div>
					<div class="form-group">
						<label for="#">Password</label>
						<input type="password" name="password" class="form-control" value={{Request::old('password')}}>
					</div>
					<div class="form-group">
						<label for="#">Confirm Password</label>
						<input type="password" name="password_confirmation" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-lg" value="Register">
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<h1>Login</h1>
				<form action="{{route('signin')}}" method="post" class="well">
					{{csrf_field()}}
					<div class="form-group">
						<label for="#">Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="#">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-lg" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>