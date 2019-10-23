@extends('admin.layouts.admin')
@section('page_style')
<!-- Page -->
<!-- <link rel="stylesheet" href="{{ asset('assets/assets/examples/css/tables/basic.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/examples/css/advanced/toastr.min599c.css?v4.0.2') }}"> -->
@endsection
@section('header')
<!-- <div class="page-header pb-0">
    <div class="panel">
        <div class="panel-body">
            <h1 class="page-title">List of Lab</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Lab</li>
            </ol>
    
            <div class="page-header-actions">
                <a class="btn btn-sm btn-default btn-outline btn-round {{ Route::is('add-lab') ? 'active' : '' }}" href="{{ route('add-lab') }}">
                    <i class="icon wb-plus" aria-hidden="true"></i>
                    <span class="hidden-sm-down">Add Lab</span>
                </a>
            </div>
        </div>
    </div>
    </div> -->
@endsection
@section('content')
<div class="page-content container-fluid">
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="example-wrap">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="example-wrap mb-0 mt-0">
                                    <h4 class="example-title">Book Test</h4>
                                    <div class="progress progress-xs my-10 ">
                                        <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content container-fluid">
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="example-wrap mb-0">
                        <h4 class="example-title">Booking Details</h4>
                        <div class="progress progress-xs my-10 ">
                            <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="" id="book_test" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="category_id" id="category_id" value="{{ isset($category->id) ? $category->id : '' }}">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="example-wrap mb-35">
                            <div class="form-group row">
                                <label for="category_name" class="col-md-4"><span class="text-danger">*</span>Organisation Name:</label>
                                <div class="col-md-8">
                                    Goa Shipyard Ltd
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="category_name" class="col-md-4"><span class="text-danger">*</span>Location:</label>
                                <div class="col-md-8">
                                    Goa
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="category_name" class="col-md-4"><span class="text-danger">*</span>Name of Test:</label>
                                <div class="col-md-8">
                                    AXIAL-HIGH CYCLE FATIGUE K1c & J1c Testing
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="category_name" class="col-md-4"><span class="text-danger">*</span>Eqpt/Product/ Material:</label>
                                <div class="col-md-8">
                                    Metallic Materials
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="category_name" class="col-md-4"><span class="text-danger">*</span>Specifications:</label>
                                <div class="col-md-8">
                                    ASTM/IS/GOST/BS/AMS
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="category_name" class="col-md-4"><span class="text-danger">*</span>Price:</label>
                                <div class="col-md-8">
                                    RT : Rs. 975 HT: Rs. 5700    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-md-4">Description:</label>
                                <div class="col-md-8">
                                    <textarea rows="5" class="form-control" placeholder="Any Special Remarks for Test" id="description" name="description">{{ isset($category->description) ? $category->description : old('description')}}</textarea>
                                    <span class="help-block text-help text-danger" id="description-block"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="position" class="col-md-4"><span class="text-danger">*</span>Date:</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Date" id="position" name="position" value="{{ isset($category->position) ? $category->position : old('position')}}">

                                    <span class="help-block text-help text-danger" id="position-block"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="position" class="col-md-4"><span class="text-danger">*</span>Dimension of Eqpt to be tested :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Dimension of Eqpt to be tested " id="position" name="position" value="{{ isset($category->position) ? $category->position : old('position')}}">

                                    <span class="help-block text-help text-danger" id="position-block"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="position" class="col-md-4"><span class="text-danger">*</span>Weight of Eqpt to be tested :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Weight of Eqpt to be tested " id="position" name="position" value="{{ isset($category->position) ? $category->position : old('position')}}">

                                    <span class="help-block text-help text-danger" id="position-block"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="position" class="col-md-4"><span class="text-danger">*</span>Time:</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Time" id="position" name="position" value="{{ isset($category->position) ? $category->position : old('position')}}">
                                    
                                    <span class="help-block text-help text-danger" id="position-block"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="category_name" class="col-md-4"><span class="text-danger">*</span>Cost:</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="price" placeholder="Cost">
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="category_name" class="col-md-4"><span class="text-danger">*</span>Duration:</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="price" placeholder="Duration">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-lg btn-success save_btn" type="submit">Send Back<img width="20" height="20" id="menu_category_preloader" style="display: none" src="{{ asset('assets/images/preloader.gif') }}"></button>
                        <button class="btn btn-lg btn-success save_btn" type="submit">Approve<img width="20" height="20" id="menu_category_preloader" style="display: none" src="{{ asset('assets/images/preloader.gif') }}"></button>
                        <button class="btn btn-lg btn-success save_btn" type="submit">Reject<img width="20" height="20" id="menu_category_preloader" style="display: none" src="{{ asset('assets/images/preloader.gif') }}"></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>








<!-- Modal start -->

@endsection
@section('custom_scripts')
<script type="text/javascript">
    
    $('#signup').hide();
    $('#login').hide();
    
    $('#loginShow').on('click', function(){
        $('#login').show();
       $('#signup').hide();
    });
    
    $('#signupShow').on('click', function(){
        $('#login').hide();
        $('#signup').show();
    });
    
    $('.loginAndSingup').on('click', function() {
        $('#myModaladd').modal('hide');
    });


    $('form#book_test').submit(function(ev) {
        ev.preventDefault();
        window.location.href = APP_BASE_URL.concat('/book-test-list');
    })
</script>
@endsection