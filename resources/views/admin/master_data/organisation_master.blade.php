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

                    <a class="btn btn-sm btn-default btn-outline btn-round {{ Route::is('category-list') ? 'active' : '' }}" href="{{  route('category-list') }}">
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
                <form action="" id="add_form" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
         <input type="hidden" name="category_id" id="category_id" value="{{ isset($category->id) ? $category->id : '' }}">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="example-wrap mb-35">
                    <div class="form-group row">
                        <label for="category_name" class="col-md-4"><span class="text-danger">*</span>Organisation Name:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Organisation Name" id="category_name" name="category_name" value="{{ isset($category->category_name) ? $category->category_name : old('category_name')}}">
                            <span class="help-block text-help text-danger" id="category_name-block"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-4">Email id of Establishment:</label>
                        <div class="col-md-8">
                            <input type="email" class="form-control" placeholder="Email id of Establishment" id="position" name="position" value="{{ isset($category->position) ? $category->position : old('position')}}">
                            <span class="help-block text-help text-danger" id="description-block"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position" class="col-md-4"><span class="text-danger">*</span>Email id of Central Nodal Officer:</label>
                        <div class="col-md-8">
                            <input type="email" class="form-control" placeholder="Email id of Central Nodal Officer" id="position" name="position" value="{{ isset($category->position) ? $category->position : old('position')}}">
                            <span class="help-block text-help text-danger" id="position-block"></span>
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

        $('form#add_form').submit(function(ev){

            ev.preventDefault();

            let formData = new FormData($(this)[0]);
            let recodIdExist = $('#category_id').val(); 

            let successMessage = "Added!";
            if(recodIdExist){
                successMessage = "Updated!";
            }

            let url = APP_BASE_URL.concat('/save-category');
            let formId = 'add_form';
            let reloadUrl = APP_BASE_URL.concat('/organisation-master');

            window.location.href = reloadUrl;

            /*formData.append('user_id',"{{ (Auth::check()) ? Auth::user()->id : '' }}");*/

            // addUpdateRecord(url, formData, successMessage, reloadUrl, formId);

            
        });
    </script>
@endsection