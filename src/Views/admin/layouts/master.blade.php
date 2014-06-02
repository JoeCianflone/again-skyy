<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include ('admin.partials.head')
    </head>
    <body class="@yield('signature', 'basic')">
      <div class="container">
         @include('admin.partials.masthead-navigation')
         @include ('admin.partials.flash-message')
         @yield('main-content')
      </div>
    </body>
</html>
