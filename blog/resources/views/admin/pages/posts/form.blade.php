@extends('admin.layouts.master')
@section('title','Dashboard')
@section('page-title','Welcome To Dashboard')

@section('content')

	<h1>Add Post</h1>

	@if(Session::has('msg'))
		{{Session::get('msg')}}
	@endif

	<form action="{{route('post.insert')}}" method="post" enctype="multipart/form-data" > 
		{{csrf_field()}}
		<div class="form-group">
			<label for="#">Title</label>
			<input type="text" class="form-control" name="title">
		</div>
		<div class="form-group">
			<label for="#">slug</label>
			<input type="text" class="form-control" name="slug">
		</div>
		<div class="form-group">
			<label for="#">excerpt</label>
			<textarea class="form-control" name="excerpt"></textarea>
		</div>
		<div class="form-group">
			<label for="#">image</label>
			<input type="file" class="form-control" name="image">
		</div>
		<div class="form-group">
			<label for="#">Description</label>
			<textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="#">Publish Date</label>
			<input type="date" name="date" class="form-control">
		</div>
		<div class="form-group">
			<label for="#">Status</label>
			<select name="status" id="" class="form-control">
				<option value="1">Yes</option>
				<option value="0">No</option>
			</select>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Add Post" >
		</div>
	</form>

@endsection