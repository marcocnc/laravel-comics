<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
</head>

<body>
    @extends('layout.main')


    @section('content')
        <div class="card-wrapper d-flex">

            <div class="comic py-5 d-flex">
                <div class="comic-img">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>

                <div class="comic-content text-white ps-4">
                    <h3>{{ $comic['title'] }}</h3>
                    <h4>{{$comic['price']}}</h4>
                    <h5>{{$comic['series']}}</h5>
                    <p>{{$comic['description']}}</p>
                </div>
            </div>

        </div>
    @endsection

</body>

</html>
