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
                                 <a  href="#">CHARACTERS</a>
                            </li>
                            <li>
                                 <a href="#">COMICS</a>
                            </li>
                            <li>
                                 <a class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{ route('movies') }}">MOVIES</a>
                            </li>
                            <li>
                                 <a href="#">TV</a>
                            </li>
                            <li>
                                 <a href="#">GAMES</a>
                            </li>
                            <li>
                                 <a href="#">COLLECTIBLES</a>
                            </li>
                            <li>
                                 <a href="#">VIDEOS</a>
                            </li>
                            <li>
                                 <a href="#">FANS</a>
                            </li>
                            <li>
                                 <a href="#">NEWS</a>
                            </li>
                            <li>
                                 <a href="#">SHOP</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
  </header>
</body>
</html>
