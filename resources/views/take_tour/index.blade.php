@extends('take_tour.master')
@section('content')

 <div class="row">

          @foreach ($tours as $tour)

            @include('take_tour.tour_grid')

          @endforeach
      </div>




@endsection

@section('footer')

<script src="/js/file.js"></script>

@endsection