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
                <div class="home_text_div">
                    <p class="home_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus consectetur mollitia, non excepturi eum voluptatum quisquam ad voluptate debitis atque. Optio ipsam voluptates beatae dolores dolore iure a nobis minus.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus consectetur mollitia, non excepturi eum voluptatum quisquam ad voluptate debitis atque. Optio ipsam voluptates beatae dolores dolore iure a nobis minus. 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus consectetur mollitia, non excepturi eum voluptatum quisquam ad voluptate debitis atque. Optio ipsam voluptates beatae dolores dolore iure a nobis minus. 
                    </p>
                   {{-- footer_links --}}
                </div> 
            </div>
        </div>
    @endsection