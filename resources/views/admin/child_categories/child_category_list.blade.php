@extends('admin.layouts.admin')

@section('page_style')

<!-- Page -->
<!-- <link rel="stylesheet" href="{{ asset('assets/assets/examples/css/tables/basic.min599c.css?v4.0.2') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min599c.css?v4.0.2') }}">
<link rel="stylesheet" href="{{ asset('assets/assets/examples/css/advanced/toastr.min599c.css?v4.0.2') }}"> -->

@endsection

@section('header')

<div class="page-header pb-0">
    <div class="panel">
        <div class="panel-body">
            <h1 class="page-title">List of Child Category</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Child Category</li>
            </ol>

            <div class="page-header-actions">
                <a class="btn btn-sm btn-default btn-outline btn-round {{ Route::is('add-child-category') ? 'active' : '' }}" href="{{ route('add-child-category') }}">
                    <i class="icon wb-plus" aria-hidden="true"></i>
                    <span class="hidden-sm-down">Add Child Category</span>
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
                            <h4 class="example-title">Total <code>{{ $categories->total() }}</code> Child Categories</h4>
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
                            <th width="15%">Child Category Name</th>
                            <th width="12%">Added Date</th>
                            <th width="14%">Status</th>
                            <th  width="15%" class="text-nowrap">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($categories as $category)
                        <tr>
                            <td class="record_id" style="display: none;">{{ $category->id }}</td>
                            <td class="record_name">{{ $category->category_name }}</td>
                            <td>{{ date('d M Y',strtotime($category->created_at)) }}</td>
                            <td class="text-center Recordstatus" status="{{ ($category->status==0) ? 1 : 0  }}">
                                {{ ($category->status==0) ? 'Inactive' : 'Active' }}
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
                                        data-original-title="{{--{{ ($cuisine->status==0) ? 'Activate' : 'De-Activate' }}--}}">
                                    <i class="icon wb-{{ ($category->status==0) ? 'close' : 'check' }}" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>


@endsection

@section('page_scripts')

<!-- <script src="{{ asset('assets/vendor/peity/jquery.peity.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/toastr/toastr.min599c.js?v4.0.2') }}"></script> -->

@endsection

@section('custom_scripts')

<!-- <script src="{{ asset('assets/js/Plugin/toastr.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/assets/examples/js/tables/bootstrap.min599c.js?v4.0.2') }}"></script> -->

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