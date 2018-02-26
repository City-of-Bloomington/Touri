@extends('map.master')
@section('content')
		<div class="col-sm-8 blog-main">
		<div class='form-group'>
		<h1>{{ $tour-> name }}
		</h1>
		<hr>

		<div class="pois">

			<ul class="list-group"> 

			@foreach ($tour->pois as $poi)

				<li class="list-group-item">

					{{ $poi->description }}
					
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