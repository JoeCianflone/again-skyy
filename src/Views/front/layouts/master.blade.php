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
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
FB.init({
appId : '806961442648829',
status : true, // check login status
cookie : true, // enable cookies to allow the server to access the session
xfbml : true // parse XFBML
});
</script>
<script type="text/javascript">
window.fbAsyncInit = function() {
FB.Canvas.setSize();
}
// Do things that will sometimes call sizeChangeCallback()
function sizeChangeCallback() {
FB.Canvas.setSize();
}
</script><!--formatted-->
<script type="text/javascript">
  function ReferrerIsFacebookApp() {
    if(document.referrer) {
      return document.referrer.indexOf("apps.facebook.com") != -1;
    }
    return false;
  }
  if (ReferrerIsFacebookApp()) {
    top.location = "https://www.facebook.com/pages/SV-Staging-Page/139383172799682?id=139383172799682&sk=app_806961442648829";
  }
</script>

</script>
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
