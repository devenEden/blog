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
        <link rel="stylesheet" href="/res/css/responsive.css">
    </head>
    <body>
     <div class="main_container">
         <div class="background">

         <div class="background_image">
            <img src="/res/images/background.jpg" alt="">
         </div>
        </div>
         <div class="nav_container">
          <nav class="nav_bar">
              <div id="hamburger" onclick="open_nav()" class="hamburger"> 
                  <div class="line"></div>
                  <div class="line"></div>
                  <div class="line"></div>
              </div>
            <div class="logo_container"> 
                <img class="nav_logo" src="/res/images/blog_logo.jpg" alt="logo"> 
            </div>
            <ul id="nav_ul" class="nav_ul">
                <li id="close_nav" onclick="close_nav()" class="close_nav">&times;</li>
                <a href="/" class="nav_anchor"> <li>Home</li> </a>
                {{-- <a href="/blogs" class="nav_anchor"> <li>Blogs</li> </a> --}}
                <a href="/about" class="nav_anchor"> <li>About</li> </a>
                {{-- <a href="/sign_in" class="nav_anchor"> <li>Sign Up</li> </a> --}}
            </ul>
            <div id="links" class="social_links">
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
        @yield('content')
     </div>
     <div onclick="scroll_top()" id="scroll_top" class="scroll_top">
         <span>↑</span>
     </div>
     <footer class="footer">
         <div class="footer_text">
            <h1>Love yourself</h1>
         </div>
         <div class="footer_ref">
            <p class="message">Copyright (c) 2020 Copyright Holder All Rights Reserved.</p>
            <br>
            <p class="message">
                Feel free to contact any time 
                <span class="blog_email">
                    jirehserukenya25@gmail.com
                </span>
            </p>
            <div class="footer_links">
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
            </div>
         </div>
     </footer>
     <script src="/res/js/main.js"></script>
    </body>
    </html>