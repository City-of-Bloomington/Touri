@extends('layouts.tour')

@section('content')
		<div class="col-sm-8 blog-main">
		<div class='form-group'>
		<h1>{{ $tour-> name }}
			<br class="clearFloat">
            
			<a class="btn btn-small btn-secondary" href="{{ URL::to('/admin/'.$tour->id.'/edit') }}" style="float: right;">Edit this Tour</a>
			<form action="{{action('ToursController@destroy', $tour->id)}}" method="post">
				{{csrf_field()}}
				<input name="_method" type="hidden" value="DELETE">
				<button class="btn btn-danger" type="submit" style="float: right;">Delete</button>
			</form>
            
		<br></h1><hr>
		</div>

		<p class="blog-post-meta">
			{{ $tour->created_at->toFormattedDateString() }}</p>
			<b>Description:</b> {{ $tour->description }} <p>

      	<p><b>Number of Nodes:</b> {{ $tour->nodes }}</p>
      	<p><b>Distance:</b> {{ $tour->total_distance }} mi</p>
     	<p><b>Walk time:</b> {{ $tour->walk_time }} min</p>

     	<p><b>Stops:</b></p>

		<div class="pois">

			<ul class="list-group"> 

			@foreach ($tour->pois as $poi)

				<li class="list-group-item">

					{{ $poi->name }}
					
				</li>

			@endforeach

		</ul>
		</div>
		</hr>
		<hr>

		<div class="card">

			<div class="card-block">
				<form method="POST" action="/admin/{{ $tour->id }}/pois">

					{{ csrf_field() }}

					<div class="form-group">

						<textarea name="description" placeholder="Your tour stop here." class="form-control" required></textarea>
					</div>
					<div class="form-group">

						<button type="submit" class="btn btn-primary">Add tour stop</button>
					</div>
				</form>

				@include('layouts.errors')
			</div>
		</div>
	</div>

@endsection