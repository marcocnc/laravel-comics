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
                    <h3 class="pb-2">{{ strtoupper($comic['title']) }}</h3>
                    <h5 class="pb-2">{{$comic['series']}}</h5>
                    <p class="pb-2">{{$comic['description']}}</p>
                    <h2 class="text-center pb-2">Acquista ora!</h2>
                    <h4 class="btn btn-success w-100 fs-2">{{$comic['price']}}</h4>
                </div>
            </div>

        </div>
    @endsection

</body>

</html>
