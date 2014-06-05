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
              <div class="column bottom-social" style="width: 92%; margin: 0 auto;">
                 <h2 class="page-header text-center">FOLLOW US</h2>
                 <p class="text-center">Follow us on all our social channels to get even more exclusive SKYY Stream content!</p>
                 <div class="buckets clearfix">
                    <div class="bucket">
                       <div class="icon facebook hide-text"><img src="/assets/imgs/icon-facebook.png" alt=""></div>
                       <div class="button-container facebook">
                          <div class="fb-like" data-href="https://www.facebook.com/skyyvodka" data-width="2000" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                       </div>
                    </div>
                    <div class="bucket">
                       <div class="icon twitter hide-text"><img src="/assets/imgs/icon-twitter.png" alt=""></div>
                       <div class="button-container twitter">
                           <a href="https://twitter.com/skyyvodka" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false">Follow @skyyvodka</a>
                           <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                       </div>
                    </div>
                    <div class="bucket">
                       <div class="icon instagram hide-text"><img src="/assets/imgs/icon-instagram.png" alt=""></div>
                    </div>
                    <div class="bucket">
                       <div class="icon pinterest hide-text"><img src="/assets/imgs/icon-pinterest.png" alt=""></div>
                       <div class="button-container pinterest">
                           <a data-pin-do="buttonFollow" href="http://www.pinterest.com/skyyvodka/">Follow SKYY Vodka</a>
                           <!-- Please call pinit.js only once per page -->
                           <script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <footer class="row">
              <div class="column" style="width: 64%; margin: 0 auto;">
                 <h2 class="page-header text-center">ABOUT BOILER ROOM</h2>
                 <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id commodo metus. Cras at placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id commodo metus. Cras at placerat. </p>
              </div>
           </footer>
        </div>

        @include('front.partials.scripts')
    </body>
</html>
