@extends('map.master')
@section('content')


<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css' rel='stylesheet' />

    <main role="main">
  <div id='map' style='width: auto; height: 300px;'></div>
  <script>
  /* Original script/css tags, took 'i' out of script so it would comment out.*/
  /*<script src='https://api.mapbox.com/mapbox-gl-js/v0.44.0/mapbox-gl.js'></scrpt>
      <link href='https://api.mapbox.com/mapbox-gl-js/v0.44.0/mapbox-gl.css' rel='stylesheet' />*/

    mapboxgl.accessToken = 'pk.eyJ1IjoiZWRyd2luOTYiLCJhIjoiY2oxZTRjem5zMDAwMjMzbzV3anh0MTBrNCJ9.ItTuwAZyoOY5yBcFyx0HCQ';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v10',
    center: [-86.534359, 39.1637],
    zoom: 12
    });
    map.addControl(new mapboxgl.GeolocateControl({
    positionOptions: {
        enableHighAccuracy: true
    },
    trackUserLocation: true
  }));
  /*mapboxgl.accessToken = 'pk.eyJ1IjoianVsZGlldHIiLCJhIjoiY2p0eGU3dnZlMHhjODQzcGcydzh1bWtzdSJ9.4dpg56GQonHEJ97jbu2yDg'; // replace this with your access token
   var map = new mapboxgl.Map({
     container: 'map',
     style: 'mapbox://styles/mapbox/streets-v10',//'mapbox://styles/juldietr/cjtxedc0y2r2f1fnrnesk1hzr', // replace this with your style URL
     center: [-87.661557, 41.893748],
     zoom: 10.7
   });*/

   map.on('load', () => {

     @foreach ($tour->pois as $poi)
       map.addSource('pointsSource', {
         type: 'geojson',
         data: {
         'features': [
         {
          'type': 'Feature',
          'properties': {
            'title': '$poi->name',
            'description': '$poi->description'
          },
          'geometry': {
            'coordinates': [
              -87.769775,
              41.873683
            ],
            'type': 'Point'
          }
         }
         ],
         'type': 'FeatureCollection'
         }
       });
     @endforeach
     /*map.addSource('pointsSource', {
       type: 'geojson',
       data: {
       'features': [
       {
        'type': 'Feature',
        'properties': {
          'title': 'Lincoln Park',
          'description': 'A northside park that is home to the Lincoln Park Zoo'
        },
        'geometry': {
          'coordinates': [
            -87.637596,
            41.940403
          ],
          'type': 'Point'
        }
       },
       {
        'type': 'Feature',
        'properties': {
          'title': 'Burnham Park',
          'description': 'A lakefront park on Chicago\'s south side'
        },
        'geometry': {
          'coordinates': [
            -87.603735,
            41.829985
          ],
          'type': 'Point'
        }
       },
       {
        'type': 'Feature',
        'properties': {
          'title': 'Millennium Park',
          'description': 'A downtown park known for its art installations and unique architecture'
        },
        'geometry': {
          'coordinates': [
            -87.622554,
            41.882534
          ],
          'type': 'Point'
        }
       },
       {
        'type': 'Feature',
        'properties': {
          'title': 'Grant Park',
          'description': 'A downtown park that is the site of many of Chicago\'s favorite festivals and events'
        },
        'geometry': {
          'coordinates': [
            -87.619185,
            41.876367
          ],
          'type': 'Point'
        }
       },
       {
        'type': 'Feature',
        'properties': {
          'title': 'Humboldt Park',
          'description': 'A large park on Chicago\'s northwest side'
        },
        'geometry': {
          'coordinates': [
            -87.70199,
            41.905423
          ],
          'type': 'Point'
        }
       },
       {
        'type': 'Feature',
        'properties': {
          'title': 'Douglas Park',
          'description': 'A large park near in Chicago\'s North Lawndale neighborhood'
        },
        'geometry': {
          'coordinates': [
            -87.699329,
            41.860092
          ],
          'type': 'Point'
        }
       },
       {
        'type': 'Feature',
        'properties': {
          'title': 'Calumet Park',
          'description': 'A park on the Illinois-Indiana border featuring a historic fieldhouse'
        },
        'geometry': {
          'coordinates': [
            -87.530221,
            41.715515
          ],
          'type': 'Point'
        }
       },
       {
        'type': 'Feature',
        'properties': {
          'title': 'Jackson Park',
          'description': 'A lakeside park that was the site of the 1893 World\'s Fair'
        },
        'geometry': {
          'coordinates': [
            -87.580389,
            41.783185
          ],
          'type': 'Point'
        }
       },
       {
        'type': 'Feature',
        'properties': {
          'title': 'Columbus Park',
          'description': 'A large park in Chicago\'s Austin neighborhood'
        },
        'geometry': {
          'coordinates': [
            -87.769775,
            41.873683
          ],
          'type': 'Point'
        }
       }
       ],
       'type': 'FeatureCollection'
       }
     });*/
   map.addLayer({
     id: 'points',
     source: 'pointsSource',
     type: 'circle',
     paint: {
       'circle-radius': 10,
       'circle-color': 'blue'
     }
   });
});

  map.on('click', e => {
    const result = map.queryRenderedFeatures(e.point, { layers: ['points'] })
    if (result.length) {
      const popup = new mapboxgl.Popup();
      const $content = result[0].properties.title;
      const $description = result[0].properties.description;
      popup.setLngLat(e.lngLat)
      .setHTML('<h1>'+$content+'</h1><h3>'+$description+'</h3>')
      .addTo(map);
    }
  });
  </script>
		<div class="col-sm-8 blog-main">
		<div class='form-group'>
		<h1>{{ $tour-> name }}
			<br class="clearFloat">

			<!-- Edit Tour Table -->
			<a class="btn btn-small btn-secondary" href="{{ URL::to('/admin/'.$tour->id.'/edit') }}" style="float: right;">Edit this Tour</a>


			<form action="{{action('ToursController@destroy', $tour->id)}}" method="post">
				{{csrf_field()}}
				<input name="_method" type="hidden" value="DELETE">
				<button class="btn btn-danger" type="submit" style="float: right;">Delete</button>
			</form>
		</a><br></h1><hr>
		</div>

		<p class="blog-post-meta"></p>
			<b>Description:</b> {{ $tour->description }} <p>
	      	<p><b>Number of Nodes:</b> {{ $tour->nodes }}</p>
	      	<p><b>Distance:</b> {{ $tour->total_distance }} mi</p>
	     	<p><b>Walk time:</b> {{ $tour->walk_time }} min</p>

     	<p><b>Stops:</b></p>

		<div class="pois">

			<ul class="list-group">

		<div class="pois">

			<ul class="list-group">
				<div id="accordion">

			@foreach ($tour->pois as $poi)
			  <div class="card">
			    <div class="card-header" id="{{$poi->name}}">
			      <h5 class="mb-0">
			        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#{{$poi->id}}" aria-expanded="true" aria-controls="{{$poi->id}}">{{ $poi->name }}
			        </button>
			      </h5>
			    </div>
				    <div id="{{$poi->id}}" class="collapse" aria-labelledby="{{$poi->name}}" data-parent="#accordion">
				      <div class="card-body">
				      	{{ $poi -> description }}
				      </div>
				    </div>
				  </div>
			@endforeach

		</ul>
		</div>
		</hr>

		<div class="card">

				@include('layouts.errors')
			</div>
		</div>
	</div>

@endsection
