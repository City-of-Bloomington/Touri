@extends('map.master')
@section('content')
		<div class="col-sm-8 blog-main">
		<div class='form-group'>
		<h1>{{ $tour-> name }}</h1>
		<hr>

		<p class="blog-post-meta"></p>
			<b>Description:</b> {{ $tour->description }} <p>
	      	<p><b>Number of Nodes:</b> {{ $tour->nodes }}</p>
	      	<p><b>Distance:</b> {{ $tour->total_distance }} mi</p>
	     	<p><b>Walk time:</b> {{ $tour->walk_time }} min</p>

     	<p><b>Stops:</b></p>

		<div class="pois">

			<ul class="list-group"> 

		<div class="pois">

			<ul class="list-group"> 
				<div id="accordion">

			@foreach ($tour->pois as $poi)
			  <div class="card">
			    <div class="card-header" id="{{$poi->name}}">
			      <h5 class="mb-0">
			        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#{{$poi->id}}" aria-expanded="true" aria-controls="{{$poi->id}}">{{ $poi->name }}
			        </button>
			      </h5>
			    </div>
				    <div id="{{$poi->id}}" class="collapse" aria-labelledby="{{$poi->name}}" data-parent="#accordion">
				      <div class="card-body">
				      	{{ $poi -> description }}
				      </div>
				    </div>
				  </div>
			@endforeach

		</ul>
		</div>
		</hr>

		<div class="card">

				@include('layouts.errors')
			</div>
		</div>
	</div>

@endsection