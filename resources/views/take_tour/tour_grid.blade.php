<div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="https://bloximages.newyork1.vip.townnews.com/heraldtimesonline.com/content/tncms/assets/v3/editorial/2/32/2323c3be-e3cf-11e6-81a6-6ba8c83362a7/52727193bab56.image.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <b>
                    {{ $tour->name }} 
                  </b>
                  </p>
                  <p> {{ $tour->description}} </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Tour</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                    </div>
                    <small class="text-muted">
                      {{ $tour->walk_time }} min
                    </small>
                  </div>
                </div>
              </div>
            </div>