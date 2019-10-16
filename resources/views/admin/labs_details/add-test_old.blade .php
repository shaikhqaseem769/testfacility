@extends('admin.layouts.admin')
@section('page_style')
<!-- Page -->
<!-- <link rel="stylesheet" href="{{ asset('assets/assets/examples/css/tables/basic.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/examples/css/advanced/toastr.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min599c.css?v4.0.2') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/assets/examples/css/pages/gallery.min599c.css?v4.0.2') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/examples/css/advanced/toastr.min599c.css?v4.0.2') }}"> -->
@endsection
@section('header')
<div class="page-header pb-0">
    <div class="panel">
        <div class="panel-body">
            <h1 class="page-title">Test</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Add Test</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-default btn-outline btn-round {{ Route::is('test-list') ? 'active_btn' : '' }}" href="{{ route('test-list') }}">
                <i class="icon wb-list-bulleted" aria-hidden="true"></i>
                <span class="hidden-sm-down">Tests</span>
                </a>
                <!-- <a class="btn btn-sm btn-default btn-outline btn-round {{-- Route::is('restaurants_with_kyc_completed') ? 'active_btn' : '' --}}" href="{{-- route('restaurants_with_kyc_completed') --}}">
                    <i class="icon wb-list-bulleted" aria-hidden="true"></i>
                    <span class="hidden-sm-down">OnBoarded with KYC completed</span>
                    </a> -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<style>
    .emvalid{
    font-size: 20px;
    position: absolute;
    top: 17px;
    right: 20px;
    line-height: 0px;
    }
</style>
<div class="page-content container-fluid">
<div class="panel">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="example-wrap mb-0">
                    <h4 class="example-title">Lab Details</h4>
                    <div class="progress progress-xs my-10 ">
                        <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                    </div>
                </div>
            </div>
        </div>
        <form action="" id="onboard_restaurant_form" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="example-wrap mb-35">
                        <div class="form-group row">
                            <label for="organisation_name" class="col-md-4"><span class="text-danger">*</span>Organisation:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Organisation" id="organisation_name" name="organisation_name">
                                <span class="help-block text-help text-danger" id="organisation_name-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="establishment" class="col-md-4"><span class="text-danger">*</span>Establishment having Test Facility:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Establishment having Test Facility" id="establishment" name="establishment">
                                <span class="help-block text-help text-danger" id="establishment-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lab" class="col-md-4"><span class="text-danger">*</span>Lab:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Lab" id="lab" name="lab">
                                <!-- <input type="text" class="form-control" placeholder="Email Address" id="email" name="email">
                                    <input type="hidden" id="validemail" value="1">
                                    <span class="emvalid"></span> -->
                                <span class="help-block text-help text-danger" id="lab-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-md-4"><span class="text-danger">*</span>Location:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Location" id="location" name="location">
                                <!-- <textarea rows="5" class="form-control" placeholder="Location" id="location" name="location"></textarea> -->
                                <span class="help-block text-help text-danger" id="location-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4"><span class="text-danger">*</span>Address:</label>
                            <div class="col-md-8">
                                <textarea rows="5" class="form-control" placeholder="Address" id="address" name="address"></textarea>
                                <span class="help-block text-help text-danger" id="address-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="discipline" class="col-md-4"><span class="text-danger">*</span>Discipline:</label>
                            <div class="col-md-8">
                                <textarea rows="5" class="form-control" placeholder="Discipline" id="discipline" name="discipline"></textarea>
                                <span class="help-block text-help text-danger" id="discipline-block"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="example-wrap mb-35">
                        <div class="form-group row">
                            <label for="test_facibility" class="col-md-4"><span class="text-danger">*</span>Test/Calibration Facility (apparatus name):</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Test/Calibration Facility (apparatus name)" id="test_facibility" name="test_facibility">
                                <span class="help-block text-help text-danger" id="test_facibility-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="test_eqpt_manufacturer" class="col-md-4"><span class="text-danger">*</span>Test Eqpt manufacturer:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Test Eqpt manufacturer" id="test_eqpt_manufacturer" name="test_eqpt_manufacturer">
                                <span class="help-block text-help text-danger" id="test_eqpt_manufacturer-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="manufacturing_year_of_eqpt" class="col-md-4"><span class="text-danger">*</span>Manufacturing Year of Eqpt:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Manufacturing Year of Eqpt" id="manufacturing_year_of_eqpt" name="manufacturing_year_of_eqpt">
                                <span class="help-block text-help text-danger" id="manufacturing_year_of_eqpt-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="test_chamber_size" class="col-md-4"><span class="text-danger"></span>Test Chamber Size (if applicable):</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Test Chamber Size (if applicable)" id="test_chamber_size" name="test_chamber_size">
                                <span class="help-block text-help text-danger" id="test_chamber_size-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="range_of_testing_eqpt" class="col-md-4"><span class="text-danger">*</span>Range of Testing Eqpt:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Range of Testing Eqpt" id="range_of_testing_eqpt" name="range_of_testing_eqpt">
                                <span class="help-block text-help text-danger" id="range_of_testing_eqpt-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email_id_of_stablishment" class="col-md-4"><span class="text-danger">*</span>Email id of Establishment:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Email id of Establishment" id="email_id_of_stablishment" name="email_id_of_stablishment">
                                <span class="help-block text-help text-danger" id="email_id_of_stablishment-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email_id_cno" class="col-md-4"><span class="text-danger">*</span>Email id of Central Nodal Officer:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Email id of Central Nodal Officer" id="email_id_cno" name="email_id_cno">
                                <span class="help-block text-help text-danger" id="email_id_cno-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email_id_no" class="col-md-4"><span class="text-danger">*</span>Email id of Nodal Officer:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Email id of Central Nodal Officer" id="email_id_no" name="email_id_no">
                                <span class="help-block text-help text-danger" id="email_id_no-block"></span>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="logo" class="col-md-4">Upload Restaurant Logo:</label>
                            <div class="col-md-8">
                                <div class="input-group input-group-file" data-plugin="inputGroupFile">
                                    <input type="text" class="form-control" readonly="">
                                    <span class="input-group-btn">
                                          <span class="btn btn-success btn-file">
                                            <i class="icon wb-upload" aria-hidden="true"></i>
                                            <input type="hidden" name="logo" >
                                            <input type="file" name="logo" accept=".jpeg,.png,.jpg">
                                          </span>
                                    </span>
                                </div>
                                <span class="help-block text-help text-danger" id="logo-block"></span>
                                <span class="text-help">Max Image size can be 512KB.</span>
                            </div>
                            </div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="example-wrap mb-0 mt-0">
                        <h4 class="example-title">Eqpt/Product/ Material to be Tested</h4>
                        <div class="progress progress-xs my-10 ">
                            <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="example-wrap mb-35">
                        <div class="form-group row">
                            <label for="product_material" class="col-md-4"><span class="text-danger">*</span>Eqpt/Product/ Material:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Eqpt/Product/ Material" id="product_material" name="product_material">
                                <span class="help-block text-help text-danger" id="product_material-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="parameter" class="col-md-4"><span class="text-danger">*</span>Parameter/ Name of Test:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Parameter/ Name of Test" id="parameter" name="parameter">
                                <span class="help-block text-help text-danger" id="parameter-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="specifications" class="col-md-4"><span class="text-danger"></span>Stds/ Specifications (if any):</label>
                            <div class="col-md-8">
                                <textarea rows="5" class="form-control" placeholder="Stds/ Specifications (if any)" id="specifications" name="specifications"></textarea>
                                <span class="help-block text-help text-danger" id="specifications-block"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="max_dimension" class="col-md-4"><span class="text-danger">*</span>Max Dimension of Eqpt to be tested:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Max Dimension of Eqpt to be tested" id="max_dimension" name="max_dimension">
                                <span class="help-block text-help text-danger" id="max_dimension-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="max_weight" class="col-md-4"><span class="text-danger">*</span>Max Weight of Eqpt to be tested:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Max Weight of Eqpt to be tested" id="max_weight" name="max_weight">
                                <span class="help-block text-help text-danger" id="max_weight-block"></span>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-6">
                    <div class="example-wrap">
                        <div class="form-group row">
                            <label for="duration" class="col-md-4"><span class="text-danger">*</span>Duration of Test:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Duration of Test" id="duration" name="duration">
                                <span class="help-block text-help text-danger" id="duration-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="test_charge" class="col-md-4"><span class="text-danger">*</span>Testing Charges/Sample (excluding GST):</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Testing Charges/Sample (excluding GST)" id="test_charge" name="test_charge">
                                <span class="help-block text-help text-danger" id="test_charge-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nabl_status" class="col-md-4"><span class="text-danger">*</span>NABL Status of Lab:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="NABL Status of Lab" id="nabl_status" name="nabl_status">
                                <span class="help-block text-help text-danger" id="nabl_status-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="advance_notice" class="col-md-4"><span class="text-danger">*</span>Advance  Notice:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Advance  Notice" id="advance_notice" name="advance_notice">
                                <span class="help-block text-help text-danger" id="advance_notice-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="constraints" class="col-md-4"><span class="text-danger"></span>Constraints (ifany):</label>
                            <div class="col-md-8">
                                <!-- <input type="text" class="form-control" placeholder="Constraints (ifany)" id="constraints" name="constraints"> -->
                                <textarea rows="5" class="form-control" placeholder="Constraints (ifany)" id="constraints" name="constraints"></textarea>
                                <span class="help-block text-help text-danger" id="constraints-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="remarks" class="col-md-4"><span class="text-danger"></span>Remarks:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Remarks" id="remarks" name="remarks">
                                <span class="help-block text-help text-danger" id="remarks-block"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <button class="btn btn-lg btn-success save_btn" type="submit">Save<img width="20" height="20" id="onboard_preloader" style="display: none" src="{{ asset('assets/images/preloader.gif') }}"></button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('page_scripts')
<!--  <script src="{{ asset('assets/vendor/peity/jquery.peity.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('assets/vendor/toastr/toastr.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-placeholder/jquery.placeholder599c.js?v4.0.2') }}"></script>
    
    <script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('assets/vendor/toastr/toastr.min599c.js?v4.0.2') }}"></script> -->
@endsection
@section('custom_scripts')
<!--  <script src="{{ asset('assets/assets/examples/js/charts/peity.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('assets/js/Plugin/toastr.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('assets/assets/examples/js/pages/gallery.min599c.js?v4.0.2') }}"></script>
    <script src="{{ asset('assets/js/Plugin/toastr.min599c.js?v4.0.2') }}"></script> -->
<script type="text/javascript">
    /*$('form#onboard_restaurant_form').submit(function(ev){
    
        ev.preventDefault();
        var emailValid = $.trim($('#validemail').val());
        if (emailValid != 1) {
            $('.emvalid').html('&#10007;');
            $('#email-block').html('Email Already Exists.');
            $('#email').focus();
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        }
        var formData = new FormData($(this)[0]);
    
        $.ajax({
            url:APP_BASE_URL.concat('/save_onboard_restaurant'),
            cache:false,
            method:'POST',
            data:formData,
            contentType:false,
            processData:false,
            beforeSend:function () {
                $('.help-block').html('');
                $('#onboard_preloader').show();
                $('.save_btn').prop('disabled',true);
            },
            success:function(response){
                $('#onboard_preloader').hide();
                $('.save_btn').prop('disabled',false);
                if(response.success){
                    $('form#onboard_restaurant_form')[0].reset();
                    toastr.success(response.message);
                }else{
                    toastr.warning(response.message);
                }
            },
            error:function(response){
                $('#onboard_preloader').hide();
                $('.save_btn').prop('disabled',false);
                $.each(response.responseJSON.errors,function(index,value){
                    $('#'+index+'-block').html(value[0]);
                });
            }
        })
    });*/
    
    /*$('#email').blur(function(){
        var email = $.trim($(this).val());
        if (email != '') {
            $.ajax({
                url:APP_BASE_URL.concat('/check_email_exists/'+email),
                cache:false,
                method:'GET',
                success:function(response){
                    if (response > 0) {
                        $('#validemail').val(0);
                        $('.emvalid').html('&#10007;').css('color','red');
                        $('#email-block').html('Email Already Exists.');
                    }else{
                        $('#validemail').val(1);
                        $('.emvalid').html('&#10004;').css('color','green');
                        $('#email-block').html('');
                    }
                }
            })
        }
    });*/
</script>
@endsection