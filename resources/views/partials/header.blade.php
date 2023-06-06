@php
    $header_menu = config('menus.header_menu')
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="mc-container">
            <div class="header-container d-flex-space-bet">

                <!-- Logo -->
                <div class="image">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
                </div>

                <!-- Links -->
                <div class="h-link d-flex-cont-center-items-center">
                    <nav>
                        <ul class="d-flex">
                            <li>
                                <a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{route('home')}}">HOME</a>
                           </li>

                            @foreach ($header_menu as $item)
                                <li>
                                    <a class="{{ Route::currentRouteName() === $item['name'] ? 'active' : '' }}" href="{{route($item['name'])}}">{{ $item['text'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
  </header>
</body>
</html>
