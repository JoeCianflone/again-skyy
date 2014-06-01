<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('front.partials.head')
    </head>
    <body class="@yield('signature', 'main-page')">
        @include('front.partials.browser-warning')
        <div class="container" style="border: 1px solid red;">
           <header class="masthead row">
              <div class="col-md-10 col-md-offset-1">
                 <h1 class="logo text-hide">Skyy Stream \ Boiler Room</h1>
                 <p class="text-center">We're teaming up with Boiler Room to bring you an irresistible series of 6 broadcasts, showcasing an amazing selection of artists we're thrilled to be working with across New York, Los Angeles and San Francisco – all brought to you via clear HD SKYY Stream technology.</p>
                  <ul class="list-inline text-center social-masthead">
                     <li><a href="#"><span class="fa fa-facebook-square"><span class="text-hide">Facebook</span></span></a></li>
                     <li><a href="#"><span class="fa fa-twitter"><span class="text-hide">Twitter</span></span></a></li>
                     <li><a href="#"><span class="fa fa-instagram"><span class="text-hide">Facebook</span></span></a></li>
                     <li><a href="#"><span class="fa fa-pinterest"><span class="text-hide">Facebook</span></span></a></li>
                     <li><a href="#"><span class="fa fa-youtube"><span class="text-hide">Facebook</span></span></a></li>
                  </ul>
              </div>
           </header>

           @yield('content')

           <div class="row">
              <div class="col-md-10 col-md-offset-1">
                 <h2 class="page-header text-center">FOLLOW US</h2>
                 <p class="text-center">Follow us on all our social channels to get even more exclusive SKYY Stream content!</p>
              </div>
           </div>
           <footer class="row">
              <div class="col-md-10 col-md-offset-1" style="border: 1px solid red;">
                 <h2 class="page-header text-center">ABOUT BOILER ROOM</h2>
                 <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id commodo metus. Cras at placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id commodo metus. Cras at placerat. </p>
              </div>
           </footer>
        </div>

        @include('front.partials.scripts')
    </body>
</html>
