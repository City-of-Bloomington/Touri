<!doctype html>
<html lang="en">
  <head>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<meta charset="utf-8">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Touri</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link href="/css/userApp.css" rel="stylesheet">
  </head>
  <body>
    <header>
      @include ('layouts.nav')
    </header>

        <main role="main">


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      <div class="container marketing">

<hr>
          <div class="col-md-7 order-md-2">

    <h1>Feedback Form</h1>
    <p class="text-muted">
    	Questions? Concerns? Tell us how we can improve!
    </p>

	<hr>
	<form method="POST" action="/tours">
		{{ csrf_field() }}

  <div class="form-group">
    <label for="name" class="text-muted">Which tour/tours did you take?:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

    <div class = "form-group">
    <label for="rating" class="text-muted">How would you rate your overall experience with this tour?</label>
    <select>
      <option value="" selected disabled hidden></option>
     <option value="1">1 (very poor)</option>
     <option value="2">2 (poor)</option>
     <option value="3">3 (fair)</option>
     <option value="4">4 (good)</option>
     <option value="5">5 (very good)</option>  
    </select>
  </div>

   <div class="form-group">
    <label for="like" class="text-muted">What did you like the most about the tour?</label>
    <textarea id="like" name="like" class="form-control"></textarea>
 </div>
 
 <!-- Dislike -->
 <div class="form-group">
    <label for="dislike" class="text-muted">What did you dislike about the tour?</label>
    <textarea id="dislike" name="dislike" class="form-control"></textarea>
 </div>
 
 <!-- Other -->
 <div class="form-group">
    <label for="other" class="text-muted">Anything else you'd like to tell us?</label>
    <textarea id="other" name="other" class="form-control"></textarea>
 </div>

  <div class='form-group'>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
    @include ('layouts.errors')
</div>



</form>
    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->

  </body>
</html>
