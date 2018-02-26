<div class="blog-post">

    <h2 class="blog-post-title">

      <a href="/tours/{{ $tour->id }}">

        {{ $tour->name }} <br>

      </a>

    </h2>


      <p class="blog-post-meta">

        {{ $tour->created_at->toFormattedDateString() }}</p>

      </p>

      Description: {{ $tour->description }}

      <p>Nodes: {{ $tour->nodes }}</p>
      <p>Distance: {{ $tour->total_distance }}</p>
      <p>Walk time: {{ $tour->walk_time }}</p>

</div>
