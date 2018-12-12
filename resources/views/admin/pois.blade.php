<!-- !!! 
This file currently does nothing. 
It's only meant as a potential template
page for creating node descriptions 
!!!-->

@extends ('layouts.tour')

@section ('content')

    <h1>Editing Pois for: {{ $tour->name }}</h1>
	
	<!-- <div class="col-sm-8 blog-main">
		<ul class="list-group"> 
			@foreach ($tour->pois as $poi)
				<li class="list-group-item">
					{{ $poi->name }}
				</li>
			@endforeach
		</ul> -->

<form method="POST" action="/admin/tours/{{ $tour->id }}/pois">
	{{ csrf_field() }}

<!-- Node Description -->
<div class="form-group">
	<label for="description">Node Description:</label>
	<input type="text" class="form-control" id="description" name="description"></textarea>
</div>

<div class='form-group'>
	<button type="submit" class="btn btn-primary">Submit</button>
</div> 

@include ('layouts.errors')
 
</form>
@endsection