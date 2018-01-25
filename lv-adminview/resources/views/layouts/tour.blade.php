<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>City of Bloomington Tours</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link href="/css/app.css" rel="stylesheet">

  </head>

  <body>

      @include ('tours.nav')

      <div class="blog-header">

        <div class="container">

          <h1 class="blog-title">Admin Panel</h1>

          <p class="lead blog-description">Tours</p>

        </div>

      </div>

      <div class="container">

        <div class="row">

          @yield('content')

          @include('tours.sidebar')

        </div>

      </div>

      @include('tours.footer')

  </body>
</html>
