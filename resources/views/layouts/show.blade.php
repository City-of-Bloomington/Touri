@extends('map.master')
@section('content')

 <script src='https://api.mapbox.com/mapbox-gl-js/v0.44.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.44.0/mapbox-gl.css' rel='stylesheet' />

    
    <main role="main">
  <div id='map' style='width: auto; height: 300px;'></div>
  <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZWRyd2luOTYiLCJhIjoiY2oxZTRjem5zMDAwMjMzbzV3anh0MTBrNCJ9.ItTuwAZyoOY5yBcFyx0HCQ';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v10',
    center: [-86.534359, 39.1637],
    zoom: 12
    });
    map.addControl(new mapboxgl.GeolocateControl({
    positionOptions: {
        enableHighAccuracy: true
    },
    trackUserLocation: true
    }));
  </script>
		<div class="col-sm-8 blog-main">
		<div class='form-group'>
		<h1>{{ $tour-> name }}
			<br class="clearFloat">
		<br></h1><hr>
		</div>

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