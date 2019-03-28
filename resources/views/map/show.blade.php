@extends('map.userTour')
@section('content')
		<div class='form-group' style="padding: 20px">
		<h1>{{ $tour-> name }}</h1>
		<hr>	

		<p style="color: #737373">
			<b style="color: #737373">Description:</b> {{ $tour->description }} <p>
	      	<p style="color: #737373"><b>Number of Nodes:</b> {{ $tour->nodes }}</p>
	      	<p style="color: #737373"><b>Distance:</b> {{ $tour->total_distance }} mi</p>
	     	<p style="color: #737373"><b>Walk time:</b> {{ $tour->walk_time }} min</p>


     			<div id="begin" style="text-align:center;">
     				<a href="/userTour" class="btn btn-sm btn-primary">Begin Tour</a>
				</div>


		<br>

     	<p style="color: #737373"><b>Tour Stop</b></p>

		<div class="pois">
			<ul class="list-group"> 
			<div id="accordion">

			<?php $number = 1 ?>	

			@foreach ($tour->pois as $poi)
			  <div class="card">
			    <div class="card-header" id="{{$poi->name}}">
			      <h5 class="mb-0">
			        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#{{$poi->id}}" aria-expanded="true" aria-controls="{{$poi->id}}" style="color: #737373">
			        	<img src="{{ asset('images/genMarker.png')}}" style="width:15px;height:25px;">         
			        	{{ $number }}. {{ $poi->name }}
			        </button>
			      </h5>
			    </div>
				    <div id="{{$poi->id}}" class="collapse" aria-labelledby="{{$poi->name}}" data-parent="#accordion">
				      <div class="card-body" style="color: #737373">
				      	{{ $poi -> description }}
				      </div>
				    </div>
				 </div>
				  <?php $number++; ?>
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