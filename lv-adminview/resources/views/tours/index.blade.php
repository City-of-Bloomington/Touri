@extends('layouts.tour')

@section('content')

        <div class="col-sm-8 blog-main">

          @foreach ($tours as $tour)

            @include('tours.tour')

          @endforeach

        </div>


@endsection

@section('footer')

<script src="/js/file.js"></script>

@endsection