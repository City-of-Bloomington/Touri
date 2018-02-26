<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Touri: Admin</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="/css/app.css" rel="stylesheet">

  </head>

  <body>

      @include ('admin.nav')

      <div class="blog-header">

        <div class="container">

          <h1 class="blog-title">Admin Panel</h1>

          <p class="lead blog-description">Tours</p>

        </div>

      </div>

      <div class="container">

        <div class="row">

          @yield('content')

          @include('admin.sidebar')

        </div>

      </div>

      @include('admin.footer')

  </body>
</html>
