<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        <nav>
            <ul class="first_nav d_flex">
                <li><img src="{{asset('img/DCUI_desktop.svg')}}" alt=""></li>
                <li><img src="{{asset('img/hbo_desktop.svg')}}" alt=""></li>
                <li><img src="{{asset('img/buy-bar-DCUI.svg')}}" alt=""></li>
            </ul>
             <div class="second_nav_box">
                <img class="logo_app" src="{{asset('img/logo.png')}}" alt="">  
                <ul class="second_nav d_flex">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('contacts') }}">Contact</a></li>
                </ul>
             </div>
        </nav>
        @yield('header')
       </header>
       <main>
        @yield('main')
       </main>
       <footer>
           <div class="footer_list">
               <ul>
                   <li class="str_white"><strong>DC COMICS</strong></li>
                   <li>Characters</li>
                   <li>Movies</li>
                   <li>TV</li>
                   <li>News</li>
                   <li>Characters</li>
                   <li>Movies</li>
                   <li>TV</li>
                   <li>News</li>
                   <li class="str_white"><strong>Another COMICS</strong></li>
                   <li>Characters</li>
                   <li>Movies</li>
               </ul>
               <ul>
                   <li class="str_white"><Strong>DC</Strong></li>
                   <li>Movies</li>
                   <li>TV</li>
                   <li>News</li>
               </ul>
               <ul>
                   <li class="str_white"><strong>SITES</i></strong></li>
                   <li>News</li>
                   <li>Characters</li>
                   <li>Movies</li>
                   <li>TV</li>
               </ul>
           </div>
           <div class="banner_footer">
               <button><strong>SIGN-UP NOW!</strong></button>
               <ul>
                   <li> <strong>FOLLOW US</strong> </li>
                   <li><a href="https://www.facebook.com"><img src="{{ asset('img/footer-facebook.png') }}" alt=""></a></li>
                   <li><a href="https://www.pinterest.it"><img src="{{ asset('img/footer-pinterest.png') }}" alt=""></a></li>
                   <li><a href="https://twitter.com"><img src="{{ asset('img/footer-twitter.png') }}" alt=""></a></li>
                   <li><a href="https://www.youtube.com"><img src="{{ asset('img/footer-youtube.png') }}" alt=""></a></li>
               </ul>
           </div>
           @yield('footer')
       </footer>
    </body>
</html>