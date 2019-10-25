@extends('admin.layouts.admin')

@section('page_style')



@endsection

@section('header')

<div class="page-header pb-0">
    <div class="panel">
        <div class="panel-body">
            <h1 class="page-title">Test History</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Test Booking History</li>
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
                            <h4 class="example-title">Booking History</h4>
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
                            <th>Name</th>
                            <th>Comment</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                            
                                                
                        </thead>
                        <tbody>

                        <tr>
                        	<td>Miller </td>
                        	<td>Test Initiated </td>
                        	<td>2019-10-11</td>
                        	<td>Initiated</td>
                        </tr>
                        <tr>
                        	<td>Mark Smith</td>
                        	<td>Test is in process</td>
                        	<td>2019-10-12</td>
                        	<td>Process</td>
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