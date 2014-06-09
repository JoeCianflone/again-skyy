 <?php
 header_remove("X-Frame-Options");
 header("X-Frame-Options: ALLOWALL");
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('front.partials.head')
    </head>
    <body class="@yield('signature', 'main-page')">
   <div id="fb-root"></div>
   <script>(function(d, s, id) {
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) return;
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));</script>
        @include('front.partials.browser-warning')
        <div class="container">
           @include('front.partials.masthead')

           @yield('content')

          @include('front.partials.buckets')

           @include('front.partials.about')
        </div>

        @include('front.partials.scripts')
    </body>
</html>
