@extends('admin.layouts.master')
@section('title','Dashboard')
@section('page-title','Welcome To Dashboard')

@section('content')

	<form method="post" action="">
	
		<div class="form-group">
			<label for="#">Category</label>
			<input type="text" class="form-control" name="category">  
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Add">
		</div>

	</form>

@endsection