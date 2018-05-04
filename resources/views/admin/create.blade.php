@extends ('layouts.tour')

@section ('content')

	<div class="col-sm-8 blog-main">

    <h1>Create Tour Form</h1>

	<hr>
	<form method="POST" action="/tours">
		{{ csrf_field() }}

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea id="description" name="description" class="form-control"></textarea>
  </div>

  <div class="form-group">
      <label for="nodes">Number of nodes</label>
      <input type="text" class="form-control" id="nodes" name="nodes">
  </div>

  <div class="form-group">
      <label for="total_distance">Length of tour (miles)</label>
      <input type="text" class="form-control" id="total_distance" name="total_distance">
  </div>

  <div class="form-group">
      <label for="walk_time">Walk Time (minutes)</label>
      <input type="text" class="form-control" id="walk_time" name="walk_time">
  </div>

  <div class="form-group">
      <label for="walk_time">Image URL</label>
      <input type="url" class="form-control" id="img_url" name="img_url">
  </div>


  <div class='form-group'>

    <button type="submit" class="btn btn-primary">Submit</button>

  </div>
    @include ('layouts.errors')
</div>


</form>
@endsection