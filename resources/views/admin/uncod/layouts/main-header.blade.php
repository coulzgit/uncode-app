<!-- main-header -->
			<div class="main-header sticky side-header nav nav-item">
				<div class="container-fluid">
					<div class="main-header-left ">
						<div class="responsive-logo">
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo.png')}}" class="logo-1" alt="logo"></a>
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="dark-logo-1" alt="logo"></a>
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-2" alt="logo"></a>
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="dark-logo-2" alt="logo"></a>
						</div>
						<div class="app-sidebar__toggle" data-toggle="sidebar">
							<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left" ></i></a>
							<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
						</div>
						<div class="main-header-center ml-3 d-sm-none d-md-none d-lg-block">
							<input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
						</div>
					</div>
					<div class="main-header-right">
						<!-- LANGUE -->
						<ul class="nav">
							<li class="">
								<div class="dropdown  nav-itemd-none d-md-flex">
									<a href="#" class="d-flex  nav-item nav-link pr-0 country-flag1" data-toggle="dropdown" aria-expanded="false">
										<span class="avatar country-Flag mr-0 align-self-center bg-transparent"><img src="{{URL::asset('assets/img/flags/us_flag.jpg')}}" alt="img"></span>
										<div class="my-auto">
											<strong class="mr-2 ml-2 my-auto">{{__('English')}}</strong>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
										<a href="#" class="dropdown-item d-flex ">
											<span class="avatar  mr-3 align-self-center bg-transparent"><img src="{{URL::asset('assets/img/flags/french_flag.jpg')}}" alt="img"></span>
											<div class="d-flex">
												<span class="mt-2">
													{{__('French')}}
												</span>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex">
											<span class="avatar  mr-3 align-self-center bg-transparent"><img src="{{URL::asset('assets/img/flags/us_flag.jpg')}}" alt="img"></span>
											<div class="d-flex">
												<span class="mt-2">English</span>
											</div>
										</a>
										
									</div>
								</div>
							</li>
						</ul>
						<div class="nav nav-item  navbar-nav-right ml-auto">
							
							<div class="nav-item full-screen fullscreen-button">

								<a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
							</div>
							<div class="dropdown main-profile-menu nav nav-item nav-link">
								<a class="profile-user d-flex" href="#">
									<img alt="" src="{{URL::asset('uncode/marque_blanches/miniatures/'.$user_auth['photo'])}}">
								</a>
								<div class="dropdown-menu">
									<div class="main-header-profile bg-primary p-3">
										<div class="d-flex wd-100p">
											<div class="main-img-user">
												<img alt="" src="{{URL::asset('uncode/marque_blanches/miniatures/'.$user_auth['photo'])}}">
											</div>
											<div class="ml-3 my-auto">
												<h6>
													{{$user_auth['user_name']}}
												</h6>
												<span>
													{{$user_auth['account']['name']}}
												</span>
											</div>
										</div>
									</div>
									<a class="dropdown-item" href="{{route('profile',app()->getLocale())}}">
										<i class="bx bx-user-circle"></i>
										{{__('Profile')}}
									</a>
									<a class="dropdown-item" href="{{route('profile.edit',app()->getLocale())}}">
										<i class="bx bx-cog"></i> 
										{{__('Modifier profile')}}
									</a>
									<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form><i class="bx bx-log-out"></i> 
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
<!-- /main-header -->
