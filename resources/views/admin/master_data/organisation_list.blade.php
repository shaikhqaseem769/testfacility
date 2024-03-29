@extends('admin.layouts.admin')


@section('header')

<div class="page-header pb-0">
    <div class="panel">
        <div class="panel-body">
            <h1 class="page-title">List of Organisation</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Organisation</li>
            </ol>

            <div class="page-header-actions">
                <a class="btn btn-sm btn-default btn-outline btn-round {{ Route::is('add-organisation') ? 'active' : '' }}" href="{{ route('add-organisation') }}">
                    <i class="icon wb-plus" aria-hidden="true"></i>
                    <span class="hidden-sm-down">Add Organisation</span>
                </a>
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
                            <h4 class="example-title">Total <code>{{ $organisations->total() }}</code> Organisations</h4>
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
                            <th>Organisation Name</th>
                            <th>Email id of Establishment</th>
                            <th>Central Nodal Officer Email Id</th>
                            <th>Central Nodal Officer Details</th>
                            <th>Status</th>
                            <th class="text-nowrap">Actions</th>
                        </tr>
                            
                        </thead>
                        <tbody>

                        @if(count($organisations) > 0)
                        
                            @foreach($organisations as $organisation)
                            <tr>
                                <td class="record_id" style="display: none;">{{ $organisation->id }}</td>
                                
                                <td class="record_name">{{ isset($organisation->organisation_name) ? $organisation->organisation_name : ''}}</td>
                                <td> {{ isset($organisation->establishment_email_id) ? $organisation->establishment_email_id : ''}} </td>
                                <td> {{ isset($organisation->cno_email_id) ? $organisation->cno_email_id : ''}}</td>
                                <td> {{ isset($organisation->details_of_cno) ? $organisation->details_of_cno : ''}}</td>
                                <td class="text-center Recordstatus" status="{{ ($organisation->status==0) ? 1 : 0  }}">
                                    {{ ($organisation->status==0) ? 'Inactive' : 'Active' }}
                                </td>
                                 <td class="text-nowrap">
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning edit_record" data-toggle="tooltip"
                                        data-original-title="{{--Edit--}}">
                                    <i class="icon wb-wrench" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning delete_record" data-toggle="tooltip"
                                        data-original-title="{{--Delete--}}">
                                    <i class="icon wb-trash" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning change_record_status" data-toggle="tooltip"
                                        data-original-title="{{ ($organisation->status==0) ? 'Activate' : 'De-Activate' }}">
                                    <i class="icon wb-{{ ($organisation->status==0) ? 'close' : 'check' }}" aria-hidden="true"></i>
                                </button>
                            </td>
                            </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="4" class="text-center">No Organisation Found!</td>
                        </tr>
                        @endif
                        
                        
                        </tbody>
                    </table>
                    {{ $organisations->links() }}
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
        notConfirm : rname+' Organisation Status has not been changed!',
        confirm : rname+' Organisation Status has been changed!',
        textMessage : 'Do you want to change status '+((status==1) ? 'Activate' : 'De-Activate')+' '+rname+'?',
    };

    let url = APP_BASE_URL.concat('/change-organisation-status');

    /*function call define in custom_js.js file inside js folder*/
    changeRecordStatus(rid, status, url, recordMessages);
   
});


$('.edit_record').click(function(ev){
    
    var rid = $(ev.target).closest('tr').find('td.record_id').text();
    var rname = $(ev.target).closest('tr').find('td.record_name').text();
    var url = APP_BASE_URL.concat('/add-organisation/', rid);
    editRecord(rid, rname, url);
    
})

  
$('.delete_record').click(function(ev){

    var rid = $(ev.target).closest('tr').find('td.record_id').text();
    var rname = $(ev.target).closest('tr').find('td.record_name').text();
    var url = APP_BASE_URL.concat('/delete-organisation/', rid);
    let recordMessages = {
        textMessage : rname+' Organisation Status has been deleted!',
    };

    deleteRecord(rid, rname, recordMessages, url);

    
});


</script>
@endsection