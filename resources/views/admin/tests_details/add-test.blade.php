@extends('admin.layouts.admin')

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
                        <h4 class="example-title">Organisation Details</h4>
                        <div class="progress progress-xs my-10 ">
                            <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="" id="addLabs" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6 col-lg-6" >
                        <div class="form-group row">
                            <label for="product_material" class="col-md-4"><span class="text-danger">*</span>Organisation:</label>
                            <div class="col-md-8">
                                <select class="form-control" name="organisation" id="organisation">
                                    <option>Please Select Organisation</option>
                                </select>
                                <span class="help-block text-help text-danger" id="product_material-block"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_material" class="col-md-4"><span class="text-danger">*</span>Establishment having Test Facility:</label>
                            <div class="col-md-8">
                                <select class="form-control" name="organisation" id="organisation">
                                    <option>Please Select Establishment having Test Facility</option>
                                </select>
                                <span class="help-block text-help text-danger" id="product_material-block"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lab" class="col-md-4"><span class="text-danger">*</span>Lab:</label>
                            <div class="col-md-8">
                                <!-- <select class="form-control" name="lab" id="lab">
                                    <option>Please Select Lab</option>
                                </select> -->
                                <input type="text" class="form-control" placeholder="Lab" id="lab" name="lab">
                               
                                <!-- <input type="text" class="form-control" placeholder="Email Address" id="email" name="email">
                                    <input type="hidden" id="validemail" value="1">
                                    <span class="emvalid"></span> -->
                                <span class="help-block text-help text-danger" id="lab-block"></span>
                            </div>
                        </div>

                        
                    </div>
                    <div class="col-md-6 col-lg-6" >
                        <div class="example-wrap mb-35">
                            <div class="form-group row">
                            <label for="location" class="col-md-4"><span class="text-danger">*</span>Location:</label>
                            <div class="col-md-8">
                                <!-- <select class="form-control" name="location" id="location">
                                    <option>Please Select Location</option>
                                </select> -->
                                <input type="text" class="form-control" placeholder="Location" id="location" name="location">
                                <span class="help-block text-help text-danger" id="location-block"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="discipline" class="col-md-4"><span class="text-danger">*</span>Discipline:</label>
                            <div class="col-md-8">
                                <!-- <select class="form-control" id="discipline" name="discipline">
                                    <option>Please Select Discipline</option>
                                </select> -->
                                <input type="text" class="form-control" placeholder="Discipline" id="discipline" name="discipline">
                                
                                <span class="help-block text-help text-danger" id="discipline-block"></span>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4 float-right mb-1 p-0">
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#myModaladd">
                            Add
                            </button>
                        </div>
                        <div class="example table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="15%">Test/Calibration Facility (apparatus name)</th>
                                        <th width="12%">Test Eqpt manufacturer</th>
                                        <th width="14%">Manufacturing Year of Eqpt</th>
                                        <th width="14%">Test Chamber Size (if applicable)</th>
                                        <th width="14%">Range of Testing Eqpt</th>
                                        <th width="14%">Eqpt/Product/ Material</th>
                                        <th width="14%">Parameter/ Name of Test</th>
                                        <th width="14%">Stds/ Specifications (if any)</th>
                                        <th width="14%">Max Dimension of Eqpt to be tested</th>
                                        <th width="14%">Max Weight of Eqpt to be tested</th>
                                        <th width="14%">Duration of Test</th>
                                        <th width="14%">Testing Charges/Sample (excluding GST)</th>
                                        <th width="14%">Price On</th>
                                        <th width="14%">NABL Status of Lab</th>
                                        <th width="14%">Advance Notice</th>
                                        <th width="14%">Constraints</th>
                                        <th width="14%">Remarks</th>
                                        <th  width="15%" class="text-nowrap">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="record_id" style="display: none;">{{-- $category->id --}}</td>
                                        <td class="record_name">Current Injector (Primary)</td>
                                        <td class="">Delta Marketing</td>
                                        <td class=""> 2003</td>
                                        <td>NA</td>
                                        <td class="">0- 2000Amps</td>
                                        <td> Calibration & Testing ACBs, MCCBs for LT tripping </td>
                                        <td>  ACBs, MCCBs for LT tripping </td>
                                        <td> NA </td>
                                        <td> NA </td>
                                        <td> 35 Kgs </td>
                                        <td> 180 Minutes </td>
                                        <td> Rs 22680/- </td>
                                        <td> per element </td>
                                        <td> NO </td>
                                        <td> 07 Working Days </td>
                                        <td> NA </td>
                                        <td> NA </td>
                                       
                                        <td class="text-nowrap">
                                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning"  data-toggle="modal" data-target="#myModaladd">
                                            <i class="icon wb-wrench" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="modal" data-target="#id">
                                            <i class="icon wb-trash" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            {{-- $categories->links() --}}
                        </div>
                    </div>
                </div>
                <!-- <div class="row" id="addLabs">Hello</div> -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- <button class="btn btn-lg btn-success save_btn" type="submit">Save as Draft<img width="20" height="20" id="onboard_preloader" style="display: none" src="{{ asset('assets/images/preloader.gif') }}"></button>  -->
                         <button class="btn btn-lg btn-success save_btn" type="submit">Save<img width="20" height="20" id="onboard_preloader" style="display: none" src="{{ asset('assets/images/preloader.gif') }}"></button>
                           
                    </div>
                </div>
            </form>
            <!--  <a class="btn btn-lg btn-success duplicateData" >+</a> -->
        </div>
    </div>
</div>



<!-- custom modal for add start -->
<div class="modal" id="myModaladd">
    <div class="modal-dialog modal-xl modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="example-wrap mb-0">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="example-title">Lab Details</h4>
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
                            <label for="product_material" class="col-md-4"><span class="text-danger">*</span>Test/Calibration Facility (apparatus name):</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Test/Calibration Facility (apparatus name)" id="product_material" name="product_material">
                                <span class="help-block text-help text-danger" id="product_material-block"></span>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="product_material" class="col-md-4"><span class="text-danger">*</span>Test Eqpt manufacturer:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Test Eqpt manufacturer" id="product_material" name="product_material">
                                <span class="help-block text-help text-danger" id="product_material-block"></span>
                            </div>
                        </div>  
                        
                        <div class="form-group row">
                            <label for="product_material" class="col-md-4"><span class="text-danger">*</span>Manufacturing Year of Eqpt:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Manufacturing Year of Eqpt" id="product_material" name="product_material">
                                <span class="help-block text-help text-danger" id="product_material-block"></span>
                            </div>
                        </div>   

    

                        <div class="form-group row">
                            <label for="location" class="col-md-4"><span class="text-danger">*</span>Test Chamber Size (if applicable):</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Test Chamber Size (if applicable)" id="location" name="location">
                            
                                <span class="help-block text-help text-danger" id="location-block"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4"><span class="text-danger">*</span>Range of Testing Eqpt:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Range of Testing Eqpt" id="location" name="location">
                            
                                <span class="help-block text-help text-danger" id="location-block"></span>
                            </div>
                        </div>

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
                                <!-- <textarea rows="5" class="form-control" placeholder="Stds/ Specifications (if any)" id="specifications" name="specifications"></textarea> -->
                                <input type="text" class="form-control" placeholder="Stds/ Specifications (if any)" id="specifications" name="specifications">
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
                            <label for="test_charge" class="col-md-4"><span class="text-danger">*</span>Price On :</label>
                            <div class="col-md-8">
                                <select class="form-control">
                                    <option>Please Select</option>
                                    <option>Per Unit</option>
                                    <option>Per Point</option>
                                </select>
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
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
                <button class="btn btn-lg btn-success save_btn" type="submit">Add<img width="20" height="20" id="onboard_preloader" style="display: none" src="{{ asset('assets/images/preloader.gif') }}"></button> 
            </div>
        </div>
    </div>
</div>
<!-- custom modal for add end -->

@endsection

@section('custom_scripts')

<script type="text/javascript">
    $('form#add_test').submit(function(ev){
    
        ev.preventDefault();
        window.location.href = APP_BASE_URL.concat('/test-list');
       
    });
    
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