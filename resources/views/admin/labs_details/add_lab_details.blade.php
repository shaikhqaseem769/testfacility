@extends('admin.layouts.admin')
@section('header')
<div class="page-header pb-0">
    <div class="panel">
        <div class="panel-body">
            <h1 class="page-title">Lab</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Add Lab</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-default btn-outline btn-round {{ Route::is('lab-list') ? 'active_btn' : '' }}" href="{{ route('lab-list') }}">
                <i class="icon wb-list-bulleted" aria-hidden="true"></i>
                <span class="hidden-sm-down">Labs</span>
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
                        <div class="example-wrap mb-35">
                            <div class="form-group row">
                                <label for="organisation_name" class="col-md-4"><span class="text-danger">*</span>Organisation:</label>
                                <div class="col-md-8">
                                    <!-- <input type="text" class="form-control" placeholder="Organisation" id="organisation_name" name="organisation_name"> -->
                                    <select class="form-control"  id="organisation_name" name="organisation_name">
                                        <option selected disabled>Please Select Organization</option>
                                        @foreach($organisations as $organisation)
                                        <option value="{{$organisation->id}}">{{$organisation->organisation_name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block text-help text-danger" id="organisation_name-block"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_id_cno" class="col-md-4"><span class="text-danger">*</span>Email id of Central Nodal Officer:</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" placeholder="Email id of Central Nodal Officer" id="email_id_cno" name="email_id_cno" readonly>
                                    <span class="help-block text-help text-danger" id="email_id_cno-block"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6" >
                        <div class="example-wrap mb-35">
                            <div class="form-group row">
                                <label for="email_id_of_stablishment" class="col-md-4"><span class="text-danger">*</span>Email id of Establishment:</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" placeholder="Email id of Establishment" id="email_id_of_stablishment" name="email_id_of_stablishment" readonly>
                                    <span class="help-block text-help text-danger" id="email_id_of_stablishment-block"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6" >
                        <div class="example-wrap mb-35">
                            <div class="form-group row">
                                <label for="details_of_cno" class="col-md-4"><span class="text-danger">*</span>Details of Central Nodal Officer:</label>
                                <div class="col-md-8">
                                    <textarea rows="5" class="form-control" placeholder="Details of Central Nodal Officer" id="details_of_cno" name="details_of_cno" readonly></textarea>
                                    <span class="help-block text-help text-danger" id="details_of_cno-block"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4 float-right mb-1 p-0">
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addLabModalDetails1" onclick="checkOrganisationSelected();">
                            Add
                            </button>
                        </div>
                        <div class="example table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="15%">Establishment having Test Facility</th>
                                        <th width="12%">Address</th>
                                        <!-- <th width="14%">Details of Central Nodal Officer</th> -->
                                        <th width="14%">Details of Nodal Officer</th>
                                        <th width="14%">Email id of Nodal Officer</th>
                                        <th width="14%">Tel. Phone No 1</th>
                                        <th width="14%">Tel. Phone No 2</th>
                                        <th width="14%">Fax No</th>
                                        <th  width="15%" class="text-nowrap">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="record_id" style="display: none;">{{-- $category->id --}}</td>
                                        <td class="record_name">AXIAL-HIGH CYCLE FATIGUE K1c & J1c Testing</td>
                                        <td class="">Bhanur, Sangareddy District, 502 305</td>
                                        <!-- <td class=""> ASTM/IS/GOST/BS/AMS</td> -->
                                        <td>K SRIKRISHNA SAI  ,  AGM (QS)</td>
                                        <td class="">abc@gmail.com</td>
                                        <td  > 56784564345 </td>
                                        <td  > 97574645635 </td>
                                        <td  > 65466456 </td>
                                        <td class="text-nowrap">
                                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning"  data-toggle="modal" data-target="#addLabModalDetails">
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
<div class="modal" id="addLabModalDetails">
    <div class="modal-dialog modal-xl modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <form action="" id="addLabsDetails" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-header">
                    <h4 class="modal-title">Lab Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
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
                    <div class="row">
                        <div class="col-md-6 col-lg-6" >
                            <div class="example-wrap mb-35">
                                <div class="form-group row">
                                    <label for="establishment" class="col-md-4"><span class="text-danger">*</span>Establishment having Test Facility:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" placeholder="Establishment having Test Facility" id="establishment" name="establishment">
                                        <span class="help-block text-help text-danger" id="establishment-block"></span>
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
                                    <label for="details_of_no" class="col-md-4"><span class="text-danger">*</span>Details of Nodal Officer:</label>
                                    <div class="col-md-8">
                                        <textarea rows="5" class="form-control" placeholder="Details of Nodal Officer" id="details_of_no" name="details_of_no"></textarea>
                                        <span class="help-block text-help text-danger" id="details_of_no-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="example-wrap mb-35">
                                <div class="form-group row">
                                    <label for="email_id_no" class="col-md-4"><span class="text-danger">*</span>Email id of Nodal Officer:</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" placeholder="Email id of Central Nodal Officer" id="email_id_no" name="email_id_no">
                                        <span class="help-block text-help text-danger" id="email_id_no-block"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone_number_1" class="col-md-4"><span class="text-danger">*</span>Tel. Phone No 1:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" placeholder="Tel. Phone No 1" id="phone_number_1" name="phone_number_1">
                                        <span class="help-block text-help text-danger" id="phone_number_1-block"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone_number_2" class="col-md-4"><span class="text-danger">*</span>Tel. Phone No 2:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" placeholder="Tel. Phone No 2" id="phone_number_2" name="phone_number_2">
                                        <span class="help-block text-help text-danger" id="phone_number_2-block"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fax_number" class="col-md-4"><span class="text-danger">*</span>Fax No:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" placeholder="Fax No" id="fax_number" name="fax_number">
                                        <span class="help-block text-help text-danger" id="fax_number-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-lg btn-success save_btn addLabDetailsModal" type="submit">Add<img width="20" height="20" id="onboard_preloader" style="display: none" src="{{ asset('assets/images/preloader.gif') }}"></button> 
                </div>
            </form>
        </div>
    </div>
</div>
<!-- custom modal for add end -->
@endsection
@section('custom_scripts')
<script type="text/javascript">
    $('form#addLabsDetails').on('submit', function (ev) {
        ev.preventDefault();
    
        let formData = new FormData($(this)[0]);
        let recodIdExist = $('#organisation_id').val(); 
    
        let successMessage = "Added!";
        if(recodIdExist){
            successMessage = "Updated!";
        }
    
        let url = APP_BASE_URL.concat('/add-lab-validation');
        let formId = 'addLabsDetails';
        let reloadUrl = APP_BASE_URL.concat('/lab-list');
    
    
        $.ajax({
            url:url,
            method:'POST',
            data:formData,
            cache:false,
            contentType:false,
            processData:false,
            beforeSend:function () {
                $('.help-block').html('');
                $('#menu_category_preloader').show();
                $('.save_btn').prop('disabled',true);
            },
            success:function(response){
                $('#menu_category_preloader').hide();
                $('.save_btn').prop('disabled',false);
                
                $('form#' + formId)[0].reset();
                $('#addLabModalDetails').modal('hide');
                    
                
            },
            error:function(response){
                $('#menu_category_preloader').hide();
                $('.save_btn').prop('disabled',false);
                $.each(response.responseJSON.errors,function(index,value){
                    $('#'+index+'-block').html(value[0]);
                });
            }
      });
    
    
        // window.location.href = reloadUrl;
    
        /*formData.append('user_id',"{{ (Auth::check()) ? Auth::user()->id : '' }}");*/
    
        // addUpdateRecord(url, formData, successMessage, reloadUrl, formId);
    })
    
    
    function checkOrganisationSelected(){
        let organisation_name = $('#organisation_name').val();
        if(organisation_name){
            $('#addLabModalDetails').modal('show');
        }else{
            swal("Cancelled", "Please First select organisation name!", "error");
        }
    }
    
    
    
    
    
    
    
    
    
    
    function organisationDetails(organisationId) {
        $.ajax({
           url:APP_BASE_URL.concat('/organisation-data/'+organisationId),
           cache:false,
           method:'GET',
           success:function(response){
            // console.log(response)
            if(response.success === true) {
                $('#email_id_of_stablishment').val(response.organisation['establishment_email_id'])
                $('#email_id_cno').val(response.organisation['cno_email_id'])
                $('#details_of_cno').val(response.organisation['details_of_cno'])
            }  
           }
       })
    }
    
    $('#organisation_name').on('change', function () {
        let organisationId = $(this).val();
        organisationDetails(organisationId);
    });
    
    // organisationDetails();
    
    $('form#addLabs').submit(function(ev){
    
       ev.preventDefault();
       window.location.href = APP_BASE_URL.concat('/lab-list');
       
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