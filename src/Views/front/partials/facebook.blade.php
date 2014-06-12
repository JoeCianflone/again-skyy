<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
(function(){
    FB.init({
        appId : '806961442648829',
        status : true, // check login status
        cookie : true, // enable cookies to allow the server to access the session
        xfbml : true // parse XFBML
    });

    window.fbAsyncInit = function() { FB.Canvas.setSize(); }
    function sizeChangeCallback() { FB.Canvas.setSize(); }

    function ReferrerIsFacebookApp() {
        if(document.referrer) {
            return document.referrer.indexOf("apps.facebook.com") != -1;
        }
        return false;
    }
    if (ReferrerIsFacebookApp()) {
        top.location = "https://www.facebook.com/skyyvodka/app_806961442648829";
    }

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
})();

</script>
