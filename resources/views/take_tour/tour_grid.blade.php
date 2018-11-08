<div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src= "{{$tour->img_url}}">
                <div class="card-body">
                  <p class="card-text">
                    <b>
                    {{ $tour->name }} 
                  </b>
                  </p>
                  <p> {{ str_limit($tour->description, 60) }} </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/tours/{{ $tour->id }}" class="btn btn-sm btn-outline-primary">Begin Tour</a>
                    </div>
                    <small class="text-muted">
                      Time: {{ $tour->walk_time }} mins <br>
                      Length: {{ $tour->total_distance}} mi
                    </small>
                  </div>
                </div>
              </div>
            </div>