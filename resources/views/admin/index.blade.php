@extends('layouts.tour')

@section('content')

        <div class="col-sm-8 blog-main">

          @foreach ($tours as $tour)

            @include('admin.tour')

          @endforeach

        </div>


@endsection

@section('footer')

<script src="/js/file.js"></script>

@endsection