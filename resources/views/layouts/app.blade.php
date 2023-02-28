<!doctype html>
<html lang="en">
  <!-- Mirrored from demo.egenslab.com/html/creasoft/preview/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Jan 2023 10:27:39 GMT -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/inoodex logo.png') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/')}}/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/style.css">
    <title>Inoodex - Best Software Solution in Bangladesh</title>
  </head>
  <body>
    <div class="preloader">
      <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
        {{-- Header --}}
    @include('inc.header')
        <main class="creasoft-wrap layout2">
            @yield('content')
        {{-- Footer --}}
    @include('inc.footer')
        </main>
    <div class="cursor"></div>
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets')}}/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets')}}/js/popper.min.js"></script>
    <script src="{{ asset('assets')}}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets')}}/js/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets')}}/js/waypoints.min.js"></script>
    <script src="{{ asset('assets')}}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('assets')}}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets')}}/js/wow.min.js"></script>
    <script src="{{ asset('assets')}}/js/particles.min.js"></script>
    <script src="{{ asset('assets')}}/js/app.js"></script>
    <script src="{{ asset('assets')}}/js/custom.js"></script>
  </body>
  <!-- Mirrored from demo.egenslab.com/html/creasoft/preview/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Jan 2023 10:27:57 GMT -->
</html>
