@extends('admin.layouts.admin')


@section('page_style')

    <link rel="stylesheet" href="{{ asset('assets//vendor/chartist/chartist.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/aspieprogress/asPieProgress.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min599c.css?v4.0.2') }}">

    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/assets/examples/css/dashboard/ecommerce.min599c.css?v4.0.2') }}">


@endsection


@section('header')

    <div class="page-header">
        <h1 class="page-title font-size-26 font-weight-100">Dashboard Overview</h1>
    </div>

@endsection

@section('content')


    <div class="page-content container-fluid">
        <div class="row">
            <!-- First Row -->
            <div class="col-xl-4 col-md-6 info-panel">
                <div class="card card-shadow">
                    <div class="card-block bg-white p-20">
                        
                        <a href="#"><span class="ml-15 font-weight-400">Category</span></a>
                        <div class="content-text text-center mb-0">
                            
                            <span class="font-size-15 font-weight-100" id="total_restaurant_onboarded"></span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection

@section('page_scripts')

    <script src="{{ asset('assets/vendor/chartist/chartist.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('assets/vendor/aspieprogress/jquery-asPieProgress.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min599c.js?v4.0.2') }}"></script>

@endsection

@section('custom_scripts')

    <script src="{{ asset('assets/assets/examples/js/dashboard/ecommerce.min599c.js?v4.0.2') }}"></script>
    <script type="text/javascript">

        /*$.ajax({
            url:APP_BASE_URL.concat('/get_dashboard_data'),
            cache:false,
            method:'GET',
            success:function(response){
                console.log(response);
                $.each(response.data,function(index,value){
                    $('#'+index).html(value);
                })
            },
            error:function(response){

            }

        });*/
    </script>
@endsection