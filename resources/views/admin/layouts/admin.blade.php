<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>


    @include('admin.layouts.head_1')

    @yield('page_style')

    @include('admin.layouts.head_2')

    @yield('custom_style')

</head>


<body class="animsition">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- header navigation bar -->
@include('admin.layouts.header')
<!-- header navigation bar -->

<!-- left navigation bar -->
@include('admin.layouts.left_side_bar')
<!-- left navigation bar -->

<!-- Page -->
<div class="page">

    @yield('header')

    @yield('content')

</div>
<!-- End Page -->

<!-- Footer -->
@include('admin.layouts.footer')
<!-- Footer -->

@include('admin.layouts.footer_scripts_1')

@yield('page_scripts')

@include('admin.layouts.footer_scripts_2')
<!-- Core  -->
<script type="text/javascript">
    var APP_BASE_URL = "{{ url('/') }}";
    var APP_USER_TYPE = "{{ (Auth::check()) ? Auth::user()->user_type : '' }}";
</script>
@yield('custom_scripts')

<script type="text/javascript">
    /*function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages: 'en,th' }, 'google_translate_element');

        $('select.goog-te-combo').addClass('form-control');
    }*/


    {{-- if(APP_USER_TYPE=='admin'){

        @if(Route::is('menu_categories'))
        //$('#restaurantModal').modal('show');
        @endif
    } --}}


</script>

</body>
</html>