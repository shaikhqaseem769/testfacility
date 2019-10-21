@extends('admin.layouts.admin')
@section('page_style')
<!-- Page -->
<!-- <link rel="stylesheet" href="{{ asset('assets/assets/examples/css/tables/basic.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/examples/css/advanced/toastr.min599c.css?v4.0.2') }}"> -->
@endsection
@section('header')
<!-- <div class="page-header pb-0">
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
    </div> -->
@endsection
@section('content')
<div class="page-content container-fluid">
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="example-wrap">
                        <!-- <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="example-wrap mb-0 mt-0">
                                    <h4 class="example-title">Search <code> 1</code> Result</h4>
                                    <div class="progress progress-xs my-10 ">
                                        <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <form>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Parameter/ Name of Test">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Eqpt/Product/ Material">
                                </div>
                                <!-- <div class="col">
                                    <input type="text" class="form-control" placeholder="Location">
                                </div> -->
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Discipline">
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

<div class="page-content container-fluid">

    <div class="panel">
        <div class="panel-body">
            <div class="row">
        <div class="col-md-12">
            <div class="example-wrap">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="example-wrap mb-0 mt-0">
                            <h4 class="example-title">Search <code> 1</code> Result</h4>
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
                            <th width="15%">Parameter/ Name of Test</th>
                            <th width="12%">Eqpt/Product/ Material</th>
                            <th width="14%">Stds/ Specifications</th>
                            <th width="14%">Discipline</th>
                            <th width="14%">Location</th>
                            <th width="14%">Range of Testing Eqpt</th>
                            <th width="14%">Testing Charges/ Sample (excluding GST)</th>
                            <th  width="15%" class="text-nowrap">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        
                        <tr>
                            <td class="record_id" style="display: none;">{{-- $category->id --}}</td>
                            <td class="record_name">AXIAL-HIGH CYCLE FATIGUE K1c & J1c Testing</td>
                            <td class="">Metallic Materials</td>
                            <td class=""> ASTM/IS/GOST/BS/AMS</td>
                            <td>Electrical/ Electronics</td>
                            <td class="">Goa</td>
                            <td  > 0- 2000Amps </td>
                            <td  > RT : Rs. 975/- HT:  Rs. 5700/- </td>
                            <td class="text-nowrap">
                               <!--  <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning edit_record" data-toggle="tooltip"
                                        data-original-title="View Details">
                                    <i class="icon wb-eye" aria-hidden="true"></i>
                                </button> -->
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning edit_record" data-toggle="modal" data-target="#exampleModalCenter">
                                  <i class="icon wb-eye" aria-hidden="true"></i>
                                </button>
                                <a class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="tooltip"
                                        data-original-title="Book Order" href="{{ route('book-test')}}">
                                    <i class="icon wb-order" aria-hidden="true"></i>
                                </a>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>Goa Shipyard Ltd</td>
                            <td>Goa Shipyard Ltd</td>
                            <td> Instrumentation Workshop</td>
                            <td>Delta Marketing</td>
                            <td> Goa</td>
                            <td>PT 100/1000</td>
                            <td>  Rs. 654/ </td>
                            <td class="text-nowrap">
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning edit_record" data-toggle="modal" data-target="#exampleModalCenter">
                                  <i class="icon wb-eye" aria-hidden="true"></i>
                                </button>
                                <a class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="tooltip"
                                        data-original-title="Book Order" href="{{ route('book-test')}}">
                                    <i class="icon wb-order" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <th width="">Midhani</th>
                            <th width="">Midhani</th>
                            <th width="">Midhani</th>
                            <th width="">Test Eqpt manufacturer</th>
                            <th width="">Heydrabad</th>
                            <th width="">Metallic Materials</th>
                            <th width="">Rs. 5292/-</th>
                            <td class="text-nowrap">
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-warning edit_record" data-toggle="modal" data-target="#exampleModalCenter">
                                  <i class="icon wb-eye" aria-hidden="true"></i>
                                </button>
                                <a class="btn btn-sm btn-icon btn-flat btn-warning" data-toggle="tooltip"
                                        data-original-title="Book Order" href="{{ route('book-test')}}">
                                    <i class="icon wb-order" aria-hidden="true"></i>
                                </a>
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



<!-- Modal start -->

<div class="modal" id="exampleModalCenter">
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





<!-- <div class="page-content container-fluid">
    <div class="row">
        
        <div class="col-md-4">
            <div class="card" style="width: 25rem;">
                <img src="{{ asset('assets/images/1_opyYcU0FLn22iItSrs5qgg.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 25rem;">
                <img src="{{ asset('assets/images/1_opyYcU0FLn22iItSrs5qgg.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 25rem;">
                <img src="{{ asset('assets/images/1_opyYcU0FLn22iItSrs5qgg.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
        </div>
        
    </div>
    
</div> -->





@endsection


@section('custom_scripts')

<script type="text/javascript">
    // $('.modal-body').modal('show');
</script>
@endsection