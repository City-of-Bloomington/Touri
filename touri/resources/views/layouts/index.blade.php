@extends('tours.master')

@section('content')

 <div class="row">

          @foreach ($tours as $tour)

            @include('tours.tour')

          @endforeach
      </div>




@endsection

@section('footer')

<script src="/js/file.js"></script>

@endsection