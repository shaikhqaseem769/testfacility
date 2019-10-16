<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>{{ env('APP_NAME') }}</title>

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
    <link rel="stylesheet" href="{{ asset('assets/assets/examples/css/pages/login-v3.min599c.css?v4.0.2') }}../">

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
</head>
<body class="animsition page-login-v3 layout-full">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!-- Page -->
<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <div class="panel">
            <div class="panel-body">
                <div class="brand" style="background-color: #2ec48c">
                    <img class="brand-img" src="{{ asset('assets/images/logo.png') }}" alt="{{ env('APP_NAME') }}">
                </div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{--<form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </form>--}}

                <form method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="form-group form-material floating" data-plugin="formMaterial">

                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  />
                        <label class="floating-label">Email</label>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success btn-block btn-lg mt-40">{{ __('Send Password Reset Link') }}</button>
                </form>
                <p><a href="{{ url('/') }}">Sign in</a></p>
            </div>
        </div>

        <footer class="page-copyright page-copyright-inverse">
            <p>Powered By Fortune POS & LIPIHIPI</p>
            <p>© 2019. All RIGHT RESERVED.</p>
            <div class="social">
                <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                    <i class="icon bd-twitter" aria-hidden="true"></i>
                </a>
                <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                    <i class="icon bd-facebook" aria-hidden="true"></i>
                </a>
                <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                    <i class="icon bd-google-plus" aria-hidden="true"></i>
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

<!-- Plugins For This Page -->
<script src="{{ asset('assets/vendor/jquery-placeholder/jquery.placeholder599c.js?v4.0.2') }}"></script>

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
<script>
    Config.set('assets', '../assets');
</script>

<!-- Page -->
<script src="{{ asset('assets/assets/js/Site.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin/asscrollable.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin/slidepanel.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin/switchery.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin/jquery-placeholder.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin/material.min599c.js?v4.0.2') }}"></script>
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
