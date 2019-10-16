@extends('admin.layouts.login_master')
@section('content')
<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-header row"></div>
		<div class="content-body">
			<section class="flexbox-container">
				<div class="col-12 d-flex align-items-center justify-content-center">
					<div class="col-md-5 col-10 box-shadow-2 p-0">
						<div class="card border-grey border-lighten-3 m-0">
							<div class="card-header  border-radius-0 border-0">
								<div class="card-title text-center">
									<div class="p-1">
										<img src="{{ asset('app-assets/images/logo-full-white.png') }}" alt="branding logo">
									</div>
								</div>
							</div>
							<div class="card-content">
								<div class="card-body">
									<div class="loging-again-content">
										<h2 class="heading-bd">Hi <strong>{{$name}}</strong></h2>
										<p class="content-bd">It seems that your Merchant account is not active. Please contact you Adminstrator.</p>
									</div>
								</div>

							</div>
							
							<div class="card-footer border-0 footerSectionHide">

								  <!-- <p class="float-sm-left text-center showSuccMsg" style="left: 20"><strong>Password Created Successfully </strong></p>
								  	<p class="float-sm-right text-center" style="right: 20">Click here for <a href="login.html" class="card-link">Login</a></p> -->
								  	<p class="float-sm-left text-center text-center m-0 showErrorMsg" style="color:red"><strong> </strong></p>
								  </div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
		<style>
		.footerSectionHide p{
			color: red;
			display: block;
			position: absolute;
			top: 0;
			font-weight: bold;
		}
		.footerSectionHide{
			position: relative;
		}
		.updateSuccess{
			display: none;
			padding-left: 20px;
			min-height: 125px;
		}
		.imgpresec
		{
			text-align: center;
			padding: 0px;
		}
		.updateSuccess h3{
			text-align: center;
			margin: 25px 0px;
		}
		.imgpresec img{
			width: 45px;
		}
		.progress.active .progress-bar {
			-webkit-transition: none !important;
			transition: none !important;
		}
		.nopadding{
			padding: 0px;
		}
		.progress-bar-info span{
			position: absolute;
			left: 0;
			right: 0;
			bottom: 0;
			top: 0;
			color: white;
			margin: auto;
			font-size: 14px;
		}
		.progress {
			height: 20px;
			margin-bottom: 0px;
		}
	</style>
	
	
	@endsection