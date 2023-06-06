<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Comics</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>
        @include('partials.header')
        <div class="main-wrapper">
            <main>
                {{-- Jumbotron --}}
                <div class="jumbotron"></div>

                <div class="wrapper">
                    <div class="mc-container h-100">
                      <h2 class="current-series">CURRENT SERIES</h2>

                      @yield('content')
                    </div>
                </div>

                {{-- CTA --}}
                <section id="cta">

                    <div class="container h-100">

                        <div class="row d-flex-space-bet h-100">

                            <!-- Single card -->
                            <div class="col d-flex-cont-center-items-center">
                                <div class="cta-image">
                                    <img src=" {{Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                                </div>
                                <div class="cta-text">
                                    <span>DIGITAL COMICS</span>
                                </div>
                            </div>


                            <div class="col d-flex-cont-center-items-center">
                                <div class="cta-image">
                                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                                </div>
                                <div class="cta-text">
                                    <span>DC MERCHANDISE</span>
                                </div>
                            </div>


                            <div class="col d-flex-cont-center-items-center">
                                <div class="cta-image">
                                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                                </div>
                                <div class="cta-text">
                                    <span>SUBSCRIPTION</span>
                                </div>
                            </div>


                            <div class="col d-flex-cont-center-items-center">
                                <div class="cta-image">
                                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                                </div>
                                <div class="cta-text">
                                    <span>COMIC SHOP LOCATION</span>
                                </div>
                            </div>


                            <div class="col d-flex-cont-center-items-center">
                                <div class="cta-image">
                                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                                </div>
                                <div class="cta-text">
                                    <span>DC POWER VISA</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </main>
        </div>

    </body>
</html>
