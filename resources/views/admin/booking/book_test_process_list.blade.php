@extends('admin.layouts.admin')

@section('page_style')



@endsection

@section('header')

<div class="page-header pb-0">
    <div class="panel">
        <div class="panel-body">
            <h1 class="page-title">List of {{$page_title}}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">{{$page_title}}</li>
            </ol>

            <!-- <div class="page-header-actions">
                <a class="btn btn-sm btn-default btn-outline btn-round {{ Route::is('add-test') ? 'active' : '' }}" href="{{ route('add-test') }}">
                    <i class="icon wb-plus" aria-hidden="true"></i>
                    <span class="hidden-sm-down">Add Test</span>
                </a>
            </div> -->
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
                            <h4 class="example-title">Total <code>{{-- $categories->total() --}}0</code> Tests Booking</h4>
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
                            <!-- <th width="" class="text-center" rowspan="2">Establishment having Test Facility</th> -->
                            <th width="" class="text-center" rowspan="2">Lab</th>
                            <th width="" class="text-center" rowspan="2">Location</th>
                            <!-- <th width="" class="text-center" rowspan="2">Test Eqpt manufacturer</th>
                            <th width="" class="text-center" rowspan="2">Range of Testing Eqpt</th>
                            <th width="" class="text-center" rowspan="2">Eqpt/Product/ Material</th> -->
                            <th width="" class="text-center" rowspan="2">Parameter/ Name of Test</th>
                            @if(Auth::user()->user_type !== 'user')
                            <th width="" class="text-center" rowspan="2">User Name</th>
                            @endif
                            <th width="" class="text-center" colspan="2">Date</th>
                          
                            <th width="" class="text-center" rowspan="2">Status</th>
                            @if(Auth::user()->user_type !== 'admin')
                            <th width="" class="text-center" rowspan="2">Action</th>
                            @endif
                        </tr>
                        <tr>
                            <th width="" class="text-center">Booking Date</th>
                            <th width="" class="text-center">Test Date</th>
                        </tr>
                        
                        </thead>
                        <tbody>

                        <tr>
                            <td>Goa Shipyard Ltd</td>
                            <!-- <td>Goa Shipyard Ltd</td> -->
                            <td> Instrumentation Workshop</td>
                            <td> Goa</td>
                            <td>Delta Marketing</td>
                            @if(Auth::user()->user_type !== 'user')
                            <td>Richard</td>
                            @endif
                            <td> 2019-10-11 </td>
                            <td> 2019-10-15 </td>
                            
                            <td> Process </td>
                            @if(Auth::user()->user_type !== 'admin')
                            <td class="text-nowrap">
                                <a class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="tooltip" data-original-title="Send Back Approved and Reject" href="{{ route('book-test-approve-reject') }}">
                                    <i class="icon wb-eye" aria-hidden="true"></i>
                                </a>
                                <!-- <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="modal" data-target="#id">
                                <i class="icon wb-trash" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="tooltip" data-original-title="">
                                    <i class="icon wb-close" aria-hidden="true"></i>
                                </button> -->
                            </td>
                            @endif
                            
                        </tr>

                        <tr>
                            <td width="">Midhani</td>
                            <!-- <td width="">Midhani</th> -->
                            <td width="">Midhani</td>
                            <td width="">Heydrabad</td>
                            <td width="">Test Eqpt manufacturer</td>
                            @if(Auth::user()->user_type !== 'user')
                            <td width="">Mark Miller</td>
                            @endif
                            <td> 2019-10-12 </td>
                            <td> 2019-10-20 </td>
                            <td width="">Process</td>
                            @if(Auth::user()->user_type !== 'admin')
                            <td class="text-nowrap">
                                <a class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="tooltip" data-original-title="Send Back Approved and Reject" href="{{ route('book-test-approve-reject') }}">
                                    <i class="icon wb-eye" aria-hidden="true"></i>
                                </a>
                                <!-- <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="modal" data-target="#id">
                                <i class="icon wb-trash" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="tooltip" data-original-title="">
                                    <i class="icon wb-close" aria-hidden="true"></i>
                                </button> -->
                            </td>
                            @endif
                            
                        </tr>

                        <tr>
                            <td>Goa Shipyard Ltd</td>
                            <!-- <td>Goa Shipyard Ltd</td> -->
                            <td> Instrumentation Workshop</td>
                            <td> Goa</td>
                            <td>Delta Marketing</td>
                            @if(Auth::user()->user_type !== 'user')
                            <td>Shikhar Dhawan</td>
                            @endif
                            <td> 2019-10-21 </td>
                            <td> 2019-10-25 </td>
                            
                            <td> Process </td>
                            @if(Auth::user()->user_type !== 'admin')
                            <td class="text-nowrap">
                                <a class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="tooltip" data-original-title="Send Back Approved and Reject" href="{{ route('book-test-approve-reject') }}">
                                    <i class="icon wb-eye" aria-hidden="true"></i>
                                </a>
                                <!-- <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="modal" data-target="#id">
                                <i class="icon wb-trash" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="tooltip" data-original-title="">
                                    <i class="icon wb-close" aria-hidden="true"></i>
                                </button> -->
                            </td>
                            @endif
                            
                        </tr>

                        
                        </tbody>
                    </table>
                    {{-- $categories->links() --}}
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>


@endsection


@section('custom_scripts')



<script type="text/javascript">

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