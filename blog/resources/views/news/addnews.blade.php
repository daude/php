@if (count($errors)>0)
	@foreach($errors-> all() as $error)
		<p>
			{{$error}}
		</p>

	@endforeach
@endif

<form action="{{route('news.store')}}" enctype="multipart/form-data" method="post">
<input type="hidden" name="_token" value={{Session::token()}}>
	<p>
		<input type="text" name="title" placeholder="Enter News Title">
	</p>

	<p>
		<textarea name="description" id="" cols="30" rows="10" placeholder="Enter News description"></textarea>
	</p>
	<p>
		<input type="text" name="author" placeholder="Enter News Author">
	</p>
	<p>
		<input type="date" name="date" placeholder="Enter News Date">
	</p>
	<p>
		<input type="file" name="image" >
	</p>
	
	<p>
		<input type="radio" name="status" value="1">Show
		<input type="radio" name="status" value="0">Hide

	</p>
	<p>
		<input type="submit" name="newsbtn" value="Add News">
	</p>

</form>