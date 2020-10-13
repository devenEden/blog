@extends('../layouts/index_layout')
@section('content')
<style>
 @media screen and (max-width : 600px ) 
 {
     .background img 
     {
         height: 50vh;
     }
 }
</style>
<div class="about_div">
    <div class="about">
        <h3>about self_sarang</h3>
    <p  class="about_text">
        I started this page because i felt like the message of self love and importance of mental health are not emphasised enough. Especially in a country like mine where depression is a "white people problem" and when someone tells people off for making fun of the way he/she looks, they are called "dramatic and defensive". 
    </p>
    </div>
      <div class="author">
          <div class="author_img">
                <img src="/res/images/author.jpg" alt="">
          </div>
          <div class="author_text">

            <h1>Jireh Serukenya</h1>
         <p>
            I don't believe that anybody should feel less than everybody else because of the way they look or the way they are or what they are going through. So thats the message I want to share with the world.
         </p>
          </div>
      </div>
</div>
@endsection