<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>

<body>
    @extends('layout.main')


    @section('content')
        <div class="card-wrapper d-flex">

            @foreach ($db_comics as $comics)

                @include('partials.card',
                    [
                        'href' => route('details', ['slug' => $comics['slug']]),
                        'thumb' => $comics['thumb'],
                        'title' => $comics['title']

                    ])
                @endforeach

            <!-- Button -->

        </div>
        <div id="load-more" class="d-flex-cont-center-items-center mb-5">
            <span>LOAD MORE</span>
        </div>
        @endsection

    </body>

    </html>

