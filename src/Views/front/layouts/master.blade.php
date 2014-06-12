<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('front.partials.head')
    </head>
    <body class="@yield('signature', 'main-page')">
        @include ('front.partials.facebook')
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
