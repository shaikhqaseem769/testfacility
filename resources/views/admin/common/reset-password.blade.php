<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>{{ env('APP_NAME') }}</title>

    <link rel="apple-touch-icon" href="{{ asset('assets/assets/images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-extend.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/site.min599c.css?v4.0.2') }}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/animsition/animsition.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/asscrollable/asScrollable.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/switchery/switchery.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/intro-js/introjs.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slidepanel/slidePanel.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2') }}">

    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/assets/examples/css/pages/login-v3.min599c.css?v4.0.2') }}../">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/web-icons/web-icons.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/brand-icons/brand-icons.min599c.css?v4.0.2') }}">
    {{--<link rel='stylesheet' href="{{ asset('assets/') }}fonts.googleapis.com/cssade9.css?family=Roboto:300,400,500,300italic">--}}


    <!--[if lt IE 9]>
    <script src="{{ asset('assets/vendor/html5shiv/html5shiv.min.js?v4.0.2') }}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{ asset('assets/vendor/media-match/media.match.min.js?v4.0.2') }}"></script>
    <script src="{{ asset('assets/vendor/respond/respond.min.js?v4.0.2') }}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/breakpoints/breakpoints.min599c.js?v4.0.2') }}"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="animsition page-login-v3 layout-full">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!-- Page -->
<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <div class="panel">
            

    <div class="app-content content">
		<div class="content-wrapper">
			<div class="content-header row"></div>
			<div class="content-body">
				<section class="flexbox-container">
					<div class="col-12 align-items-center justify-content-center">
						<div class="">
							  <div class="card border-grey border-lighten-3 m-0">
								<div class="card-header  border-radius-0 border-0">
									  <div class="card-title text-center">
										  <div class="p-1" style="background-color: #2ec48c">
											<img src="{{ asset('assets/images/logo.png') }}" alt="branding logo">
										  </div>
									  </div>
								</div>
								<div class="card-content">
								  <div class="card-body">
									<form class="form-horizontal restform" action="" novalidate>
										<div class="loging-again-content">
											<?php if ($rest_pwd): ?>
									  		<h2 class="heading-bd">Hi <strong>{{$name}}</strong></h2>
									  		<p class="content-bd">It seems that you have not set the admin password. Please create your password to update your Bank Details.</p>
									  	<?php endif ?>
									  </div>
										{{csrf_field()}}
										<input type="hidden" name="uid" value="{{$merchant_id}}">
										<input type="hidden" name="pwd_reset" value="{{$rest_pwd}}">
				                      <fieldset class="form-group position-relative has-icon-left">
				                        <input type="password" class="form-control" name="password" placeholder="Enter New Password" required="">
				                        <div class="form-control-position">
				                          <i class="fa fa-key"></i>
				                        </div>
				                      </fieldset>
				                      <fieldset class="form-group position-relative has-icon-left">
				                        <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required="">
				                        <div class="form-control-position">
				                          <i class="fa fa-key"></i>
				                        </div>
				                      </fieldset>
				                      <div class="text-center">
										  <button type="button" class="btn btn-success btn-block btn-lg mt-40" id="resetLogin"><i class="ft-unlock" ></i> Save</button>
										</div>
									</form>
									<div class="updateSuccess">
										<div class="imgpresec"><img src="{{ asset('assets/images/preloader.gif') }}" alt="" width="25" height="25"></div>
										<h3>Password Created Successfully</h3>
										<div class="progress">
										<div class="col-xs-12 col-sm-12 progress-container nopadding">
											<div class="progress  active">
												<div class="progress-bar progress-bar-info" style="width:0%">
													<span>Redirecting to Login..</span>
												</div>
											</div>
										</div>
									</div>
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
	
        </div>

        <footer class="page-copyright page-copyright-inverse">
            <p>Powered By Fortune POS & LIPIHIPI</p>
            <p>© 2019. All RIGHT RESERVED.</p>
            <div class="social">
                <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                    <i class="icon bd-twitter" aria-hidden="true"></i>
                </a>
                <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                    <i class="icon bd-facebook" aria-hidden="true"></i>
                </a>
                <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                    <i class="icon bd-google-plus" aria-hidden="true"></i>
                </a>
            </div>
        </footer>
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
		.card-header,.card-footer{
			background-color: transparent;
		}
		.page-login-v3 form {
			margin: 0px 0 30px;
		}
	</style>

<!-- End Page -->


<!-- Core  -->
<script src="{{ asset('assets/vendor/babel-external-helpers/babel-external-helpers599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/jquery/jquery.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/popper-js/umd/popper.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/bootstrap.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/animsition/animsition.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/mousewheel/jquery.mousewheel599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/asscrollbar/jquery-asScrollbar.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/asscrollable/jquery-asScrollable.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/ashoverscroll/jquery-asHoverScroll.min599c.js?v4.0.2') }}"></script>

<!-- Plugins -->
<script src="{{ asset('assets/vendor/switchery/switchery.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/intro-js/intro.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/screenfull/screenfull599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/vendor/slidepanel/jquery-slidePanel.min599c.js?v4.0.2') }}"></script>

<!-- Plugins For This Page -->
<script src="{{ asset('assets/vendor/jquery-placeholder/jquery.placeholder599c.js?v4.0.2') }}"></script>

<!-- Scripts -->
<script src="{{ asset('assets/js/Component.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Base.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Config.min599c.js?v4.0.2') }}"></script>

<script src="{{ asset('assets/assets/js/Section/Menubar.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/assets/js/Section/GridMenu.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/assets/js/Section/Sidebar.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/assets/js/Section/PageAside.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/assets/js/Plugin/menu.min599c.js?v4.0.2') }}"></script>

<!-- Config -->
<script src="{{ asset('assets/js/config/colors.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/assets/js/config/tour.min599c.js?v4.0.2') }}"></script>
<script>
    Config.set('assets', '../assets');
</script>

<!-- Page -->
<script src="{{ asset('assets/assets/js/Site.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin/asscrollable.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin/slidepanel.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin/switchery.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin/jquery-placeholder.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/js/Plugin/material.min599c.js?v4.0.2') }}"></script>
<script>
    (function(document, window, $) {
        'use strict';

        var Site = window.Site;
        $(document).ready(function() {
            Site.run();
        });
    })(document, window, jQuery);
</script>


<!-- Google Analytics -->
<script>
    /*(function(i, s, o, g, r, a, m) {
     i['GoogleAnalyticsObject'] = r;
     i[r] = i[r] || function() {
     (i[r].q = i[r].q || []).push(arguments)
     }, i[r].l = 1 * new Date();
     a = s.createElement(o),
     m = s.getElementsByTagName(o)[0];
     a.async = 1;
     a.src = g;
     m.parentNode.insertBefore(a, m)
     })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js',
     'ga');

     ga('create', 'UA-65522665-1', 'auto');
     ga('send', 'pageview');*/

     $(document).ready(function(){
			// $('form.restform').hide();
			// $('.updateSuccess').show();
			
			$('#resetLogin').click(function(){
				var id= $('input[name="uid"]').val();
				var pass= $.trim($('input[name="password"]').val());
				var cpass= $.trim($('input[name="cpassword"]').val());
				var pwd_reset=$('input[name="pwd_reset"]').val();
				var url= "{{url('set_reset_password')}}";
				if (pass == '' || cpass == '') {
					$('.footerSectionHide p.showErrorMsg strong').text('Password and confirm password field is required');
					$('.footerSectionHide p.showErrorMsg').show();
					return false;
				}
				if (pass!=cpass){
					$('.footerSectionHide p.showErrorMsg strong').text('Password not matching with confirm password');
					$('.footerSectionHide p.showErrorMsg').show();
					return false;
				}
				$.ajax({
					type: "post",
					url: url,
		           	data: {id:id,password:pass,pwd_reset:pwd_reset,_token:$('input[name="_token"]').val()}, 
		           success: function(data)
		           {
		           	// alert(data.url);return false;
		               if (data.status==1) {
		               		$('form.restform').hide();
							$('.updateSuccess').show();
							$(".progress-bar").animate({
								width: "100%"
							}, 2000);
							// alert(data.url);
							window.setTimeout(function(){
						        // Move to a new location or you can do something else
						        window.location.href = data.url;
						    }, 2000);
						}else{
							$('p.showErrorMsg').text('Unable to add password.');
							$('.footerSectionHide p').show();
						}
		           }
		       });
				
			});
		});
</script>
</body>
</html>







