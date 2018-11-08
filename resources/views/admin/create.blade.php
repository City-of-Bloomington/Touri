@extends ('layouts.tour')

@section ('content')

	<div class="col-sm-8 blog-main">

    <h1>Create Tour Form</h1>

	<hr>
	<form method="POST" action="/tours">
		{{ csrf_field() }}

		
	<head>
	<!-- Function used to create Node Textboxes -->
		<script type='text/javascript'>
			<!-- Sets an integer value -->
			var integer = 0;
				function AddNode () {
					<!-- Each button click will add one to the integer value -->
					integer = integer + 1;
					
					<!-- Gets nodes value and sets that to the integer -->
					document.getElementById("nodes").innerText = integer;
				
					<!-- Adds a description box for a node -->
					document.getElementById("node_descriptions").innerHTML += 
					'<div class="form-group">' +
						'<label for="node_desc">Node ' + integer + '- Description</label>' +
						'<input type="text" id="node_desc" name="node_desc" class="form-control" value="">' +
					'</div>';
					
					<!-- IMPORTANT NOTE!!!: the 'value' for the input variable above^^ needs to be changed! -->
					<!-- Currently the value is empty "" -->
				}
		</script>
	</head>
  
	
  <!-- Tour Name -->
  <div class="form-group">
    <label for="name">Name of Tour:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  
  <!-- Tour Description -->
  <div class="form-group">
    <label for="description">Tour Description:</label>
    <textarea class="form-control" id="description" name="description"></textarea>
  </div>

  <!-- Tour Nodes -->
  <div class="form-group">
	<label for="nodes">Number of nodes for this tour:</label>
	<text id="nodes">0</text>
		<br>
	<button type="button" class="btn btn-primary" onclick="AddNode()">Add Node</button>
  </div>
  
  <!-- Node Description Creation -->
	  <!-- NEW NODE CREATION !!! -->
	  <div class="form-group" id="node_descriptions">
	  </div>

  <!-- Tour Distance -->
  <div class="form-group">
      <label for="total_distance">What is the distance of the tour? (in miles)</label>
      <input type="text" class="form-control" id="total_distance" name="total_distance">
  </div>

  <!-- Tour Length -->
  <div class="form-group">
      <label for="walk_time">How long is the tour? (in minutes)</label>
      <input type="text" class="form-control" id="walk_time" name="walk_time">
  </div>

  <!-- Tour Image -->
  <div class="form-group">
      <label for="img_url">Provide an Image URL for the Tour:</label>
      <input type="url" class="form-control" id="img_url" name="img_url">
  </div>

  <!-- Submit Button -->
  <div class='form-group'>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
 
    @include ('layouts.errors')
</div>


</form>
@endsection