@extends('admin.uncod.layouts.master2')
@section('css')
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
		<div class="container-fluid">
			<div class="row no-gutter">
				<!-- The image half -->
				<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
					<div class="row wd-100p mx-auto text-center">
						<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
							<img src="{{URL::asset('uncode/signin_bg.jpg')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
						</div>
					</div>
				</div>
				<!-- The content half -->
				<div class="col-md-6 col-lg-6 col-xl-5 bg-white">
					<div class="login d-flex align-items-center py-2">
						<!-- Demo content-->
						<div class="container p-0">
							<div class="row">
								<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
									<div class="card-sigin">
										<div class="mb-5 d-flex"> 
											<a href="{{ url('/' . $page='index') }}">
												<img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo">
											</a>
											<h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">
												Uncode
											</h1>
										</div>
										<div class="card-sigin">
											<div class="main-signup-header">
												<h2>{{ __('Welcome') }}</h2>
												<h5 class="font-weight-semibold mb-4">
													{{ __('Please sign in to continue') }}
												</h5>
												<form action="{{ url('signIn') }}" id="loginForm" method="post">
													{{ csrf_field() }}
													<div class="form-group">
														<label class="control-label" for="username">
															{{ __('Email') }}
														</label> 
														<input class="form-control" placeholder="{{ __('Enter your email') }}" type="text" required="" value="" name="email" id="email">
													</div>


													<div class="form-group">
														<label class="control-label" for="password">
															{{ __('Password') }}
														</label> 
														<input name="password" id="password" class="form-control" placeholder="{{ __('Enter your password') }}" type="password" required="">
													</div>

													<button class="btn btn-main-primary btn-block">
														{{ __('Sign In') }}
													</button>
													
												</form>
												<div class="row main-signin-footer mt-5">
													<div>
														<a href="">
															
															{{ __('Forgot password?') }}
														</a>
													</div>
													<div style="margin-left: 50px">
														
														{{ __('Don\'t have an account?') }}
														<a href="#">
															{{ __('Contact us') }}
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- End -->
					</div>
				</div><!-- End -->
			</div>
		</div>
@endsection
@section('js')
@endsection