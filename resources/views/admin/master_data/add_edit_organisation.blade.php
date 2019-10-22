@extends('admin.layouts.admin')


@section('header')

    <div class="page-header pb-0">
        <div class="panel">
            <div class="panel-body">
                <h1 class="page-title"> Organisation</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Add Organisation</li>
                </ol>

                <div class="page-header-actions">

                    <a class="btn btn-sm btn-default btn-outline btn-round {{ Route::is('organisation-list') ? 'active' : '' }}" href="{{  route('organisation-list') }}">
                        <i class="icon wb-list-bulleted" aria-hidden="true"></i>
                        <span class="hidden-sm-down"> Organisation</span>
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
                    <div class="col-md-12 col-lg-12">
                        <div class="example-wrap mb-0">
                            <h4 class="example-title">Add New Organisation</h4>
                            <div class="progress progress-xs my-10 ">
                                <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="" id="form_organisation" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
         <input type="hidden" name="organisation_id" id="organisation_id" value="{{ isset($organisation->id) ? $organisation->id : '' }}">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="example-wrap mb-35">
                    <div class="form-group row">
                        <label for="organisation_name" class="col-md-4"><span class="text-danger">*</span>Organisation Name:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Organisation Name" id="organisation_name" name="organisation_name" value="{{ isset($organisation->organisation_name) ? $organisation->organisation_name : old('organisation_name')}}">
                            <span class="help-block text-help text-danger" id="organisation_name-block"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="establishment_email_id" class="col-md-4">Email id of Establishment:</label>
                        <div class="col-md-8">
                            <input type="email" class="form-control" placeholder="Email id of Establishment" id="establishment_email_id" name="establishment_email_id" value="{{ isset($organisation->establishment_email_id) ? $organisation->establishment_email_id : old('establishment_email_id')}}">
                            <span class="help-block text-help text-danger" id="establishment_email_id-block"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cno_email_id" class="col-md-4">Email id of Central Nodal Officer:</label>
                        <div class="col-md-8">
                            <input type="email" class="form-control" placeholder="Email id of Central Nodal Officer" id="cno_email_id" name="cno_email_id" value="{{ isset($organisation->cno_email_id) ? $organisation->cno_email_id : old('cno_email_id')}}">
                            <span class="help-block text-help text-danger" id="cno_email_id-block"></span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <button class="btn btn-lg btn-success save_btn" type="submit">Save<img width="20" height="20" id="menu_category_preloader" style="display: none" src="{{ asset('assets/images/preloader.gif') }}"></button>
            </div>
        </div>

        </form>
            </div>
        </div>
    </div>

@endsection


@section('custom_scripts')
   

    <script type="text/javascript">

        $('form#form_organisation').submit(function(ev){

            ev.preventDefault();

            let formData = new FormData($(this)[0]);
            let recodIdExist = $('#organisation_id').val(); 

            let successMessage = "Added!";
            if(recodIdExist){
                successMessage = "Updated!";
            }

            let url = APP_BASE_URL.concat('/organisation');
            let formId = 'form_organisation';
            let reloadUrl = APP_BASE_URL.concat('/organisation-list');

            // window.location.href = reloadUrl;

            /*formData.append('user_id',"{{ (Auth::check()) ? Auth::user()->id : '' }}");*/

            addUpdateRecord(url, formData, successMessage, reloadUrl, formId);

            
        });
    </script>
@endsection