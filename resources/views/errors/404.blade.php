<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>404 | {{ env('APP_NAME') }}</title>

    <link rel="apple-touch-icon" href="{{ asset('assets/assets/images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Stylesheets -->

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-extend.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/site.min599c.css?v4.0.2') }}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/animsition/animsition.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/asscrollable/asScrollable.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/switchery/switchery.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/intro-js/introjs.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slidepanel/slidePanel.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2') }}">
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/assets/examples/css/pages/errors.min599c.css?v4.0.2') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/web-icons/web-icons.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/brand-icons/brand-icons.min599c.css?v4.0.2') }}">
    {{--<link rel='stylesheet' href="{{ asset('assets/') }}fonts.googleapis.com/cssade9.css?family=Roboto:300,400,500,300italic">--}}

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/vendor/html5shiv/html5shiv.min.js?v4.0.2') }}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{ asset('assets/vendor/media-match/media.match.min.js?v4.0.2') }}"></script>
    <script src="{{ asset('assets/vendor/respond/respond.min.js?v4.0.2') }}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/breakpoints/breakpoints.min599c.js?v4.0.2') }}"></script>
    <script>
        Breakpoints();
    </script>
<body class="animsition page-error page-error-404 layout-full">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!-- Page -->
<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
        <header>
            <h1 class="animation-slide-top">404</h1>
            <p>Page Not Found !</p>
        </header>
        <p class="error-advise">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
        <a class="btn btn-primary btn-round" href="{{ url('/') }}">GO TO HOME PAGE</a>

        <footer class="page-copyright">
            <p>WEBSITE BY {{ env('APP_NAME') }}</p>
            <p>© 2018. All RIGHT RESERVED.</p>
            <div class="social">
                <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                    <i class="icon bd-twitter" aria-hidden="true"></i>
                </a>
                <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                    <i class="icon bd-facebook" aria-hidden="true"></i>
                </a>
                <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                    <i class="icon bd-dribbble" aria-hidden="true"></i>
                </a>
            </div>
        </footer>
    </div>
</div>
<!-- End Page -->


<!-- Core  -->
<script src="{{ asset('assets/vendor/babel-external-helpers/babel-external-helpers599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/jquery/jquery.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/popper-js/umd/popper.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/bootstrap.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/animsition/animsition.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/mousewheel/jquery.mousewheel599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/asscrollbar/jquery-asScrollbar.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/asscrollable/jquery-asScrollable.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/ashoverscroll/jquery-asHoverScroll.min599c.js?v4.0.2') }}"></script>

<!-- Plugins -->
<script src="{{ asset('assets/vendor/switchery/switchery.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/intro-js/intro.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/screenfull/screenfull599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/slidepanel/jquery-slidePanel.min599c.js?v4.0.2') }}"></script>

<!-- Scripts -->
<script src="{{ asset('assets/js/Component.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Base.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Config.min599c.js?v4.0.2') }}"></script>

<script src="{{ asset('assets/assets/js/Section/Menubar.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/assets/js/Section/GridMenu.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/assets/js/Section/Sidebar.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/assets/js/Section/PageAside.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/assets/js/Plugin/menu.min599c.js?v4.0.2') }}"></script>

<!-- Config -->
<script src="{{ asset('assets/js/config/colors.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/assets/js/config/tour.min599c.js?v4.0.2') }}"></script>


<!-- Page -->

<script src="{{ asset('assets/assets/js/Site.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin/asscrollable.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin/slidepanel.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin/switchery.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin/aspieprogress.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/assets/examples/js/dashboard/ecommerce.min599c.js?v4.0.2') }}"></script>

<script>
    (function(document, window, $) {
        'use strict';

        var Site = window.Site;
        $(document).ready(function() {
            Site.run();
        });
    })(document, window, jQuery);
</script>

</body>
</html>