      <div class="blog-masthead">
        <div class="container">
          <nav class="nav">
            <a class="nav-link active" href="/">Main</a>
            <a class="nav-link active" href="/admin">Home</a>
            <a class="nav-link" href="/admin/create">Create</a>
<!--            <a class="nav-link" href="#">Delete</a> -->
			@auth()
				<a class="nav-link" href="{{ route('logout') }}"
						   onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
							Logout
				</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
            @endauth
          </nav>
        </div>
      </div>
