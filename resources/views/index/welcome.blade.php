@extends('../layouts/index_layout')
    @section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="banner">
                <div class="banner_text">
                    <h1>self_sarang</h1>
                    <p class="welcome_text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, temporibus nesciunt. Saepe aut atque ipsum omnis distinctio ab sequi odit 
                    </p>
                    <p class="welcome_author"> Jireh Serukenya - Author</p>
                </div>
                <div class="banner_img">
                    <img src="/res/images/banner_img.jpg" alt="">
                </div>
            </div>
        </div>
    @endsection