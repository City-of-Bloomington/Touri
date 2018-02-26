@extends('tours.master')

@section ('content')

	<div class="col-sm-8 blog-main">

    <h1>Feedback Form</h1>
    <p>
    	Questions? Concerns? Tell us how we can improve!
    </p>

	<hr>
	<form method="POST" action="/tours">
		{{ csrf_field() }}

  <div class="form-group">
    <label for="name">Name of tour:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <div class="form-group">
    <label for="description">Description</label>

    <textarea id="description" name="description" class="form-control"></textarea>
  </div>


  <div class='form-group'>

    <button type="submit" class="btn btn-primary">Submit</button>

  </div>
    @include ('layouts.errors')
</div>


</form>
@endsection
