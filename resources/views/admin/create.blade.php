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
					document.getElementById("nodes1").innerText = integer;
					document.getElementById("nodes").value = integer;

					<!-- Adds a description box for a node -->
                    <!-- Made a change -->
					document.getElementById("node_descriptions").innerHTML +=
					'<div class="form-group">' +
						'<label for="node_desc">Node ' + integer + '- Description</label>' +
						'<input type="text" id="node_desc" name="node_desc" class="form-control">' +

                        '<label for="node_longitude">Node ' + integer + '- Longitude</label>' +
                        '<input type="text" id="node_longitude" name="node_longitude" class="form-control">' +

                        '<label for="node_latitude">Node ' + integer + '- Latitude</label>' +
                        '<input type="text" id="node_latitude" name="node_latitude" class="form-control">' +

                        '<label for="node_img">Node ' + integer + '- Image</label>' +
                        '<input type="text" id="node_img" name="node_img" class="form-control">' +

                        '<label for="node_video">Node ' + integer + '- Video</label>' +
                        '<input type="text" id="node_video" name="node_video" class="form-control">' +

                        '<label for="node_audio">Node ' + integer + '- Audio</label>' +
                        '<input type="text" id="node_audio" name="node_audio" class="form-control">' +
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
	<label for="nodes1">Number of nodes for this tour:</label>
	<text id="nodes1">0</text>
	<input type="text" class="form-control" id="nodes" name="nodes" value=0>
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
<!--Made a change-->
  <div class="form-group">
      <label for="img_url">Provide an Image URL for the Tour:</label>
      <input type="url" class="form-control" id="img_url" name="img_url">
  </div>

  <!-- Submit Button -->
  <div class='form-group'>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>


    @include ('layouts.errors')
        </form>
</div>


@endsection
