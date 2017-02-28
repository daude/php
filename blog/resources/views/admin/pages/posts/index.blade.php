@extends('admin.layouts.master')
@section('title','Dashboard')
@section('page-title','Welcome To Dashboard')

@section('content')
	
	<a href="{{route('post.create')}}" class="btn btn-primary">Add Post</a>
	 @if(Session::has('msg'))
      {{Session::get('msg')}}
    @endif
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>S.N</th>
					<th>Title</th>
					<th>Excerpt</th>
					<th>Image</th>
					<th>Published Date</th>
					<th>Status</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
						$i=1; 
				?>
				@foreach($posts  as $post)
				<tr>
					<td>{{$i++}}</td>
					<td>{{str_limit($post->title,20)}}</td>
					<td>{{str_limit($post->excerpt,30)}}</td>
					<td><img src="{{asset('uploads/'.$post->image)}}" alt="" width=80></td>
					<td>{{$post->published_date}}</td>
					<td>{{$post->status}}</td>
					<td>
						<a href="#" class="btn btn-success">
							<i class="glyphicon glyphicon-edit"></i>
						</a>
						<a href="{{route('post.delete',['id'=>$post->id])}}" class="btn btn-danger" onclick="return confirm('Do You Really Want To Delete This?');">
							<i class="glyphicon glyphicon-trash"></i>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection