<div class="col-lg-4">
    <img class="rounded-circle" src="https://bloximages.newyork1.vip.townnews.com/heraldtimesonline.com/content/tncms/assets/v3/editorial/2/32/2323c3be-e3cf-11e6-81a6-6ba8c83362a7/52727193bab56.image.jpg" width="140" height="140">
    <h2>

        {{ $tour->name }} 

    </h2>


      <!-- <p class="blog-post-meta">

        {{ $tour->created_at->toFormattedDateString() }}</p>

      </p> -->
    <p>
      {{ $tour->description }}
    </p>
    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
  </div>

      <!--
      <p>Nodes: {{ $tour->nodes }}</p>
      <p>Distance: {{ $tour->total_distance }}</p>
      <p>Walk time: {{ $tour->walk_time }}</p>
      -->

