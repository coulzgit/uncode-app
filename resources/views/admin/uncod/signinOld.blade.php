@extends('admin/uncod/layouts.master2')
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
							 <img src="{{URL::asset('assets/img/media/logo-blc-uncode-fond-bleu.png')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-100p mx-auto" alt="logo">

							{{-- <span style="color: #FFF!important;font-size: 60px;font-weight: bold;">Invoce Archive Uncode</span> --}}
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
										<div style="justify-content: center;" class="mb-5 d-flex"> <a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/media/logo-uncode.co.png')}}" class="sign-favicon ht-40" alt="logo"></a></div>
										<div style="border: 1px solid #2372fa;border-radius: 5px" class="card-sigin">
											<div class="main-signup-header">
												<h2 style="background: #2372fa!important;color:#FFF!important;text-align: center;">Access admin</h2>

		<form action="{{ url('connexion') }}" id="loginForm" method="post">
				{{ csrf_field() }}
					<div class="form-group">
						<label class="control-label" for="username">Login</label>
						<input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="email" id="email" class="form-control">
						<span class="help-block small"></span>
					</div>
					<div class="form-group">
						<label class="control-label" for="password">Mot de passe</label>
						<input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
						<span class="help-block small"></span>
					</div>
				<!--  <div class="checkbox login-checkbox">
						<label>
										<input type="checkbox" class="i-checks"> Remember me </label>
						<p class="help-block small">(if this is a private computer)</p>
					</div> -->
					<button class="btn btn-success btn-block loginbtn" style="background-color: #2372fa!important; color:white;">Login</button>
				<!--  <a class="btn btn-default btn-block" href="/inscription">Register</a> -->
				</form>

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
