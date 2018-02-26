<div class="blog-post">

    <h2 class="blog-post-title">
      <a href="/admin/tours/{{ $tour->id }}">

        {{ $tour->name }}</a> 

    </h2>

      <p class="blog-post-meta">

        {{ $tour->created_at->toFormattedDateString() }}</p>

      </p>

      <b>Description:</b> {{ $tour->description }}

      <p><b>Number of Nodes:</b> {{ $tour->nodes }}</p>
      <p><b>Distance:</b> {{ $tour->total_distance }} mi</p>
      <p><b>Walk time:</b> {{ $tour->walk_time }} min</p>

</div>
