<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <ul>

        @foreach ($tours as $tour)

        	<li>


            	<a href="/tours/{{ $tour->id }}">
            		{{ $tour->description}}

            	</a></li>

        @endforeach
    </ul>

</body>
</html>