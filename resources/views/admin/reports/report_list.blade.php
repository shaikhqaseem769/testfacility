@extends('admin.layouts.admin')

@section('page_style')

<!-- Page -->
<!-- <link rel="stylesheet" href="{{ asset('assets/assets/examples/css/tables/basic.min599c.css?v4.0.2') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min599c.css?v4.0.2') }}">
<link rel="stylesheet" href="{{ asset('assets/assets/examples/css/advanced/toastr.min599c.css?v4.0.2') }}"> -->

@endsection

@section('header')
<div class="page-content container-fluid">

    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="example-wrap">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="example-wrap mb-0 mt-0">
                                    <h4 class="example-title">Search Result</h4>
                                    <div class="progress progress-xs my-10 ">
                                        <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form>
                            <div class="row">
                                @if(Auth::user()->user_type === 'admin')
                                <div class="col">
                                    <!-- <input type="text" class="form-control" placeholder="Organisation"> -->
                                    <select class="form-control" id="">
                                        <option>Please Select Organisation</option>
                                        <option>Goa Shipyard Ltd</option>
                                        <option>DGAQA</option>
                                    </select>
                                </div>
                                @endif
                                <div class="col">
                                    <select class="form-control" id="">
                                        <option>Please Select Establishment having Test Facility</option>
                                        <option>Goa Shipyard Ltd</option>
                                        <option>DGAQA</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-control" id="">
                                        <option>Please Select Status</option>
                                        <option>Process</option>
                                        <option>Rejected</option>
                                        <option>Completed</option>
                                    </select>
                                </div>
                                
                                 <div class="col">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                            <h4 class="example-title">Total <code>0</code> Reports</h4>
                            <div class="progress progress-xs my-10 ">
                                <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="example table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th width="" class="text-center" rowspan="2">Organisation Name</th>
                            <th width="" class="text-center" rowspan="2">Lab </th>
                            <th width="" class="text-center" rowspan="2">Location</th>
                            <th width="" class="text-center" rowspan="2">Discipline</th>
                            <th width="" class="text-center" rowspan="2">Parameter/ Name of Test</th>
                            <th width="" class="text-center" rowspan="2">Eqpt/Product/ Material to be Tested</th>
                            <th width="" class="text-center" rowspan="2">User Name</th>
                            <th width="" class="text-center" rowspan="2">Dimension of Eqpt to be tested</th>
                            <th width="" class="text-center" rowspan="2">Weight of Eqpt to be tested</th>
                            <th width="" class="text-center" colspan="2">Date</th>
                            <th width="" class="text-center" rowspan="2">Payment Status</th>
                            <th width="" class="text-center text-nowrap" rowspan="2">Status</th>
                        </tr>
                        <tr>
                            <th width="" class="text-center">Booked Date</th>
                            <th width="" class="text-center">Test Date</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>Goa Shipyard Ltd</td>
                            <td>Instrumentation Workshop</td>
                            <td>Goa</td>
                            <td>Electrical/ Electronics</td>
                            <td>Hardness test in HRA, HRB,HRC scales</td>
                            <td>Hardness Testing of Ferous & Non ferous material</td>
                            <td>Mark Miller</td>
                            <td>20 / 20</td>
                            <td>1000Amps</td>
                            <td> 2019-10-11 </td>
                            <td> 2019-10-15 </td>
                            <td>Pending </td>
                          
                            <td class="text-nowrap">
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning statusModelDetails" data-toggle="tooltip"
                                        data-original-title="{{--Edit--}}" >
                                    Acceted
                                </button> 
                               
                            </td>
                        </tr>

                        <tr>
                            <td>Goa Shipyard Ltd</td>
                            <td>Instrumentation Workshop</td>
                            <td>Goa</td>
                            <td>Electrical/ Electronics</td>
                            <td>Hardness test in HRA, HRB,HRC scales</td>
                            <td>Hardness Testing of Ferous & Non ferous material</td>
                            <td>Mark Miller</td>
                            <td>MAX 700DIA</td>
                            <td>200Amps</td>
                            <td> 2019-10-11 </td>
                            <td> 2019-10-15 </td>
                            <td>Pending </td>
                          
                            <td class="text-nowrap">
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning statusModelDetails" data-toggle="tooltip"
                                        data-original-title="{{--Edit--}}" >
                                    Rejected
                                </button> 
                               
                            </td>
                        </tr>

                        <tr>
                            <td>Goa Shipyard Ltd</td>
                            <td>Instrumentation Workshop</td>
                            <td>Goa</td>
                            <td>Electrical/ Electronics</td>
                            <td>Hardness test in HRA, HRB,HRC scales</td>
                            <td>Hardness Testing of Ferous & Non ferous material</td>
                            <td>Mark Miller</td>
                            <td>Not Applicable</td>
                            <td>2000Amps</td>
                            <td> 2019-10-11 </td>
                            <td> 2019-10-15 </td>
                            <td>Pending </td>
                          
                            <td class="text-nowrap">
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning statusModelDetails" data-toggle="tooltip"
                                        data-original-title="{{--Edit--}}" >
                                    Process
                                </button> 
                               
                            </td>
                        </tr>

                        
                        </tbody>
                    </table>
                    {{-- $categories->links()  --}}
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>




<!-- Modal Start -->
<div class="modal" id="statusModelDetails">
    <div class="modal-dialog modal-xl modal-lg">
        <div class="modal-content">
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="example-wrap mb-0">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="example-title">Test Details</h4>
                            <div class="progress progress-xs my-10 ">
                                <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6" >
                        <div class="example-wrap mb-35">
                            <div class="modal-body">
                                <table>
                                    <tr>
                                        <td>Name of Test :</td>
                                        <td>AXIAL-HIGH CYCLE FATIGUE K1c & J1c Testing  </td>
                                    </tr>
                                    <tr>
                                        <td>Eqpt/Product/ Material :</td>
                                        <td>Metallic Materials  </td>
                                    </tr>
                                    <tr>
                                        <td>Stds/ Specifications :</td>
                                        <td>ASTM/IS/GOST/BS/AMS </td>
                                    </tr>
                                    <tr>
                                        <td>Discipline :</td>
                                        <td>Electrical/ Electronics </td>
                                    </tr>
                                    <tr>
                                        <td>Location :</td>
                                        <td>Goa </td>
                                    </tr>
                                </table>
                              </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
                <!-- <button class="btn btn-lg btn-success save_btn" type="submit">Add<img width="20" height="20" id="onboard_preloader" style="display: none" src="{{ asset('assets/images/preloader.gif') }}"></button>  -->
            </div>
        </div>
    </div>
</div>

<!-- Modal End -->

@endsection


@section('custom_scripts')

<script type="text/javascript">

$('.statusModelDetails').click(function () {
    $('#statusModelDetails').modal('show');
})


$('.change_record_status').click(function(ev){

    var rid = $(ev.target).closest('tr').find('td.record_id').text();
    var rname = $(ev.target).closest('tr').find('td.record_name').text();
    var status = $(ev.target).closest('tr').find('td.Recordstatus').attr('status');
    
    let recordMessages = {
        notConfirm : rname+' category Status has not been changed!',
        confirm : rname+' category Status has been changed!',
        textMessage : 'Do you want to change status '+((status==1) ? 'Activate' : 'De-Activate')+' '+rname+'?',
    };

    let url = APP_BASE_URL.concat('/change-category-status');

    /*function call define in custom_js.js file inside js folder*/
    changeRecordStatus(rid, status, url, recordMessages);
   
});


$('.edit_record').click(function(ev){
    
    var rid = $(ev.target).closest('tr').find('td.record_id').text();
    var rname = $(ev.target).closest('tr').find('td.record_name').text();
    var url = APP_BASE_URL.concat('/add-category/', rid);
    editRecord(rid, rname, url);
    
})

  
$('.delete_record').click(function(ev){

    var rid = $(ev.target).closest('tr').find('td.record_id').text();
    var rname = $(ev.target).closest('tr').find('td.record_name').text();

    let recordMessages = {
        textMessage : rname+' category Status has been deleted!',
    };

    deleteRecord(rid, rname, recordMessages);

    
});


</script>
@endsection