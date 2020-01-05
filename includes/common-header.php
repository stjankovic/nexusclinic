<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
<link rel="shortcut icon" href="../favicon.ico">

<!-- Google Fonts -->
<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet"> -->

<!-- NON CRIT VENDOR COMBINED -->
<link rel="stylesheet" href="./comb/crit.css">

<!-- NON CRIT VENDOR COMBINED -->
<!-- <link rel="stylesheet" href="./comb/crit-vendor-css.css"> -->

<!-- CSS Global Compulsory -->
<!-- <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css"> -->

<!-- CSS Implementing Plugins -->
<!-- <link rel="stylesheet" href="../assets/vendor/font-awesome/css/fontawesome-all.min.css">
<link rel="stylesheet" href="../assets/vendor/animate.css/animate.css">
<link rel="stylesheet" href="../assets/vendor/hs-megamenu/src/hs.megamenu.css">
<link rel="stylesheet" href="../assets/vendor/slick-carousel/slick/slick.css">
<link rel="stylesheet" href="../assets/vendor/fancybox/jquery.fancybox.css">

<link rel="stylesheet" href="../assets/vendor/responsively-lazy/responsivelyLazy.min.css">
<link rel="stylesheet" href="../assets/vendor/custombox/dist/custombox.min.css">
<link rel="stylesheet" href="../assets/vendor/cubeportfolio/css/cubeportfolio.min.css"> -->

<!-- <link rel="stylesheet" href="../assets/vendor/dzsparallaxer/dzsparallaxer.css"> -->
<!-- CSS Front Template -->

<!-- THIS -->
<!-- <link rel="stylesheet" href="../assets/css/front.css"> -->

<!-- Homescreen Icons-->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="apple-mobile-web-app-title" content="Nexus">
<meta name="application-name" content="Nexus">
<meta name="msapplication-TileColor" content="#00aba9">
<meta name="theme-color" content="#ffffff">

<!-- Drift Chat Widget -->
<script async>
"use strict";

!function() {
var t = window.driftt = window.drift = window.driftt || [];
if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
    return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
    };
    }, t.methods.forEach(function(e) {
    t[e] = t.factory(e);
    }), t.load = function(t) {
    var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
    var i = document.getElementsByTagName("script")[0];
    i.parentNode.insertBefore(o, i);
    };
}
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('zcrncp4tbrsb');
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124593606-2"></script>

<script async>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-124593606-2');
  gtag('config', 'AW-774824693');
</script>

<script async>
  function gtag_report_conversion(url) {
    var callback = function () {
      if (typeof(url) != 'undefined') {
        window.location = url;
      }
    };
    gtag('event', 'conversion', {
        'send_to': 'AW-774824693/aW9eCM_dppIBEPXFu_EC',
        'transaction_id': '',
        'event_callback': callback
    });
    return false;
  }

  var eventSubmitted = false;
  function submitEvent() {
    if (!eventSubmitted) {
      eventSubmitted = true;
    }
  }

  function handleClick(label) {
    if (eventSubmitted == true) {
      return;
    }
    submitEvent()
    gtag('event', 'click', {
     'event_action': 'click',
     'event_category' : 'button',
     'event_label' : label
    });
    gtag_report_conversion();
  }
</script>

<!-- Hotjar Tracking Code for www.nexushealthclinic.com -->
<script async>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1253957,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>