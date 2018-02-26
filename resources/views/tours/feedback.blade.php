@extends('tours.master')

@section ('content')

  <div class="col-sm-8 blog-main">

    <h1>Feedback Form</h1>
    <p>
      Questions? Concerns? Tell us how we can improve!
    </p>

  <hr>
  <form method="POST" action="/tours">
    {{ csrf_field() }}

  <div class="form-group">
    <label for="name">Which tour/tours did you take?:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

    <div class = "form-group">
    <label for="rating">How would you rate your overall experience with this tour?</label>
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
    <label for="like">What did you like the most about the tour?</label>
    <textarea id="like" name="like" class="form-control"></textarea>
 </div>
 
 <!-- Dislike -->
 <div class="form-group">
    <label for="dislike">What did you dislike about the tour?</label>
    <textarea id="dislike" name="dislike" class="form-control"></textarea>
 </div>
 
 <!-- Other -->
 <div class="form-group">
    <label for="other">Anything else you'd like to tell us?</label>
    <textarea id="other" name="other" class="form-control"></textarea>
 </div>

  <div class='form-group'>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
    @include ('layouts.errors')
</div>


</form>
@endsection
