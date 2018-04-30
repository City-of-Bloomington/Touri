@extends('take_tour.master')

@section('content')

 <div class="row">

          @foreach ($tours as $tour)

            @include('map.userTour')

          @endforeach
      </div>


@endsection

@section('footer')

<script src="/js/file.js"></script>

@endsection