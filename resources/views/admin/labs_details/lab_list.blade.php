@extends('admin.layouts.admin')

@section('page_style')



@endsection

@section('header')

<div class="page-header pb-0">
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
                            <h4 class="example-title">Total <code>{{-- $categories->total() --}}0</code> Labs</h4>
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
                            <th width="">Organisation Name</th>
                            <th width="">Establishment having Test Facility</th>
                            <th width="">Address</th>
                            <th width="">Details of Central Nodal Officer</th>
                            <th width="">Details of Nodal Officer</th>
                            <th width="">Tel. Phone No 1</th>
                            <th width="">Tel. Phone No 2</th>
                            <th width="">Fax No </th>
                            <th width="">Status</th>
                            <th width="" class="text-nowrap">Actions</th>
                        </tr>
                        </thead>
                        <tbody>


                        <tr>
                            <td> Goa Shipyard Ltd</td>
                            <td> Goa Shipyard Ltd (Instrumentation Workshop) </td>
                            <td> Vaddem House, Vasco-da-Gama, Goa - 403802</td>
                            <td> Shri. J Sivaravi</td>
                            <td> Shri. R N Majalikar</td>
                            <td> 0832 2512152 extn. 5129</td>
                            <td> 0832 2512153 extn. 5129</td>
                            <td> 91-832-2513870 / 2513943 / 2513260 / 2512148 </td>
                            <td> Active</td>
                            <td class="text-nowrap">
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning edit_record" data-toggle="tooltip"
                                        data-original-title="{{--Edit--}}">
                                    <i class="icon wb-wrench" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning delete_record" data-toggle="tooltip"
                                        data-original-title="{{--Delete--}}">
                                    <i class="icon wb-trash" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="tooltip" data-original-title="">
                                    <i class="icon wb-close" aria-hidden="true"></i>
                                </button>
                                
                            </td>
                        </tr>

                        <tr>
                            <td>DGAQA</td>
                            <td> AQAW(A), Khamaria</td>
                            <td> Ordnance Factory Khamaria</td>
                            <td> Gp. Capt. B Bose VSM , CO,AQAW(A),kahamaria</td>
                            <td> Shri SK Swain , SSO-II</td>
                            <td> 0761-2742708</td>
                            <td>0761-2742711</td>
                            <td> 0761-2338069 </td>
                            <td> Active</td>
                            <td class="text-nowrap">
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning edit_record" data-toggle="tooltip"
                                        data-original-title="{{--Edit--}}">
                                    <i class="icon wb-wrench" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning delete_record" data-toggle="tooltip"
                                        data-original-title="{{--Delete--}}">
                                    <i class="icon wb-trash" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="tooltip" data-original-title="">
                                    <i class="icon wb-close" aria-hidden="true"></i>
                                </button>
                                
                            </td>
                        </tr>

                         <tr>
                            <td> Goa Shipyard Ltd</td>
                            <td> Goa Shipyard Ltd (Instrumentation Workshop) </td>
                            <td> Vaddem House, Vasco-da-Gama, Goa - 403802</td>
                            <td> Shri. J Sivaravi</td>
                            <td> Shri. R N Majalikar</td>
                            <td> 0832 2512152 extn. 5129</td>
                            <td> 0832 2512153 extn. 5129</td>
                            <td> 91-832-2513870 / 2513943 / 2513260 / 2512148 </td>
                            <td> Active</td>
                            <td class="text-nowrap">
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning edit_record" data-toggle="tooltip"
                                        data-original-title="{{--Edit--}}">
                                    <i class="icon wb-wrench" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning delete_record" data-toggle="tooltip"
                                        data-original-title="{{--Delete--}}">
                                    <i class="icon wb-trash" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="tooltip" data-original-title="">
                                    <i class="icon wb-close" aria-hidden="true"></i>
                                </button>
                                
                            </td>
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