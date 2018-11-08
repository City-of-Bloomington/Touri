@extends('layouts.tour')

@section('content')
	<div class="col-sm-8 blog-main">
 <h1>Editing: {{ $tour->name}} 
 </h1>
	<hr>
  <form action="{{url('/tours', [$tour->id])}}" method="POST">

		{{ csrf_field() }}

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$tour->name}}">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" id="description" name="description" class="form-control" value="{{$tour->description}}">
  </div>

  <div class="form-group">
      <label for="nodes">Number of nodes</label>
      <input type="text" class="form-control" id="nodes" name="nodes" value="{{$tour->nodes}}">
  </div>

  <div class="form-group">
      <label for="total_distance">Length of tour (miles)</label>
      <input type="text" class="form-control" id="total_distance" name="total_distance" value="{{$tour->total_distance}}">
  </div>

  <div class="form-group">
      <label for="walk_time">Walk Time (minutes)</label>
      <input type="text" class="form-control" id="walk_time" name="walk_time" value="{{$tour->walk_time}}">
  </div>

  <div class="form-group">
      <label for="img_url">Image URL</label>
      <input type="url" class="form-control" id="img_url" name="img_url" value="{{$tour->img_url}}">
  </div>


  <div class="form-group">

    <button type="save" class="btn btn-primary">Save</button>

  </div>
    @include ('layouts.errors')
</div>
  <input type="hidden" name="_method" value="PUT">

</form>
@endsection