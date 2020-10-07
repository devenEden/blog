<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Jireh Serukenya self sarang self love blog">
        <title>self_sarang </title>
        
    <link rel="shortcut icon" type="image/png" href="res/images/favicon.jpg">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/res/css/style.css">
    </head>
    <body>
     <div class="main_container">
         <div class="background">
         <div class="nav_container">
          <nav class="nav_bar">
            <div class="logo_container"> 
                <img class="nav_logo" src="/res/images/blog_logo.jpg" alt="logo"> 
            </div>
            <ul class="nav_ul">
                <a href="#" class="nav_anchor"> <li>Home</li> </a>
                <a href="#" class="nav_anchor"> <li>About</li> </a>
                <a href="#" class="nav_anchor"> <li>Activity</li> </a>
                <a href="#" class="nav_anchor"> <li>Sign Up</li> </a>
            </ul>
            <div class="social_links">
                <div class="link_img_div">
                    <a href="#">
                        <img src="/res/images/blog_facebook.png" alt="" class="link_img">
                    </a>
                </div>
                <div class="link_img_div">
                    <a href="#">
                        <img src="/res/images/blog_instagram.png" alt="" class="link_img">
                    </a>
                </div>
                <div class="link_img_div">
                    <a href="#">
                        <img src="/res/images/blog_twitter.png" alt="" class="link_img">
                    </a>
                </div>
                <div class="link_img_div">
                    <a href="#">
                        <img src="/res/images/blog_whatsapp.jpeg" alt="" class="link_img">
                    </a>
                </div>
            </div>
          </nav>
         </div>
         <div class="background_image">
            <img src="/res/images/background.jpg" alt="">
         </div>
        </div>
        @yield('content')
     </div>
    </body>
    </html>