@extends('admin.layouts.admin')


@section('header')

    <div class="page-header pb-0">
        <div class="panel">
            <div class="panel-body">
                <h1 class="page-title"> Child Category</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Add Child Category</li>
                </ol>

                <div class="page-header-actions">

                    <a class="btn btn-sm btn-default btn-outline btn-round {{ Route::is('child-category-list') ? 'active' : '' }}" href="{{  route('child-category-list') }}">
                        <i class="icon wb-list-bulleted" aria-hidden="true"></i>
                        <span class="hidden-sm-down"> Child Category</span>
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
                            <h4 class="example-title">Add Child Category</h4>
                            <div class="progress progress-xs my-10 ">
                                <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="" id="add_form" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
         <input type="hidden" name="child_category_id" id="child_category_id" value="{{ isset($category->id) ? $category->id : '' }}">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="example-wrap mb-35">
                    
                    <div class="form-group row">
                        <label for="category_name" class="col-md-4"><span class="text-danger">*</span>Category Name:</label>
                        <div class="col-md-8">
                            <!-- <input type="text" class="form-control" placeholder="Category Name" id="category_name" name="category_name" value="{{ isset($category->category_name) ? $category->category_name : old('category_name')}}">
                            <span class="help-block text-help text-danger" id="category_name-block"></span> -->
                            <select id="category_name" name="category_name"class="form-control" >
                                <option selected disabled>Please Select Category</option>
                            </select>
                            <span class="help-block text-help text-danger" id="category_name-block"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="child_category_name" class="col-md-4"><span class="text-danger">*</span>Child Category Name:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Child Category Name" id="child_category_name" name="child_category_name" value="{{ isset($category->child_category_name) ? $category->child_category_name : old('child_category_name')}}">
                            <span class="help-block text-help text-danger" id="child_category_name-block"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4">Description:</label>
                        <div class="col-md-8">
                            <textarea rows="5" class="form-control" placeholder="Description" id="description" name="description">{{ isset($category->description) ? $category->description : old('description')}}</textarea>
                            <span class="help-block text-help text-danger" id="description-block"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position" class="col-md-4"><span class="text-danger">*</span>Child Category Position:</label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" placeholder="Child Category position" id="position" name="position" min="1" value="{{ isset($category->position) ? $category->position : old('position')}}">
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
            let reloadUrl = APP_BASE_URL.concat('/category-list');

            /*formData.append('user_id',"{{ (Auth::check()) ? Auth::user()->id : '' }}");*/

            addUpdateRecord(url, formData, successMessage, reloadUrl, formId);

            
        });
    </script>
@endsection