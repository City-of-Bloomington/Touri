<div class="col-lg-4">
    <img class="rounded-circle" src="{{$tour -> img_url}}" width="140" height="140">
    <h2>

        {{ $tour->name }} 

    </h2>


      <!-- <p class="blog-post-meta">

        {{ $tour->created_at->toFormattedDateString() }}</p>

      </p> -->
    <p>
      {{ $tour->description }}
    </p>
    <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
  </div>

      <!--
      <p>Nodes: {{ $tour->nodes }}</p>
      <p>Distance: {{ $tour->total_distance }}</p>
      <p>Walk time: {{ $tour->walk_time }}</p>
      -->

