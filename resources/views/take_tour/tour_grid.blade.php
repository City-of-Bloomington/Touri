<div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src= "{{$tour->img_url}}">
                <div class="card-body">
                  <p class="card-text">
                    <b>
                    {{ $tour->name }} 
                  </b>
                  </p>
                  <p> {{ $tour->description}} </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location.href='https://api.mapbox.com/styles/v1/wbollo/cj86m235l2odx2qqu0c0b53aj.html?title=true&access_token=pk.eyJ1Ijoid2JvbGxvIiwiYSI6ImNqNzU3Zm94dDE1cnczMnBpd2UyMTkwMDEifQ.sRkigyMwT362OztRCDDpSA#16.2/39.172828/-86.531586'" /> 
                      Begin Tour
                      </button>
                      <!---<button type="button" class="btn btn-sm btn-outline-secondary">{{ $tour->total_distance}} mi</button>-->
                    </div>
                    <small class="text-muted">
                      Time: {{ $tour->walk_time }} mins <br>
                      Length: {{ $tour->total_distance}} mi
                    </small>
                  </div>
                </div>
              </div>
            </div>