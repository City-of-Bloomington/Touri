<div class="col-md-4">
              
  <div id='map' style='width: auto; height: 300px;'></div>

  <script>
    mapboxgl.accessToken = '{{$tour->acc_token}}';
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
  </script>
</div>