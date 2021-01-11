@extends('admin/uncod/layouts.master')
@section('css')
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="main-content-label mg-b-5">
					Veuiller saisir les données de l'utilisateur
				</div>
				<p style="color:red" class="mg-b-20">
					Note: Tous les champs sont obligatoires
				</p>
				<div class="pd-30 pd-sm-40 bg-gray-200">

											<h5> @if (session('message'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('message') }}
                                            </div>
                                        @endif</h5>
											<form method="POST" action="{{ route('client.inscri') }}">
													@csrf
					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">Compte N°</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input class="form-control" placeholder="Saisir le numéro du compte" type="text">
						</div>
					</div>

					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">
								Propriétaire du compte ?
							</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<div class="row mg-t-10">
									<div class="col-lg-3">
										<label class="rdiobox">
											<input name="rdio" type="radio">
											<span>
												Oui
											</span>
										</label>
									</div>
									<div class="col-lg-3 mg-t-20 mg-lg-t-0">
										<label class="rdiobox">
											<input checked="" name="rdio" type="radio">
											<span>
												Non
											</span>
										</label>
									</div>

								</div>
						</div>
					</div>

					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">Name</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input id="name" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

															@error('nom')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
															@enderror						</div>
					</div>

					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">last Name</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input id="name" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

															@error('prenom')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
															@enderror						</div>
					</div>
					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">Téléphone</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
                        <input id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus>

															@error('tel')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
															@enderror						</div>
					</div>
					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">Email</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

															@error('email')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
															@enderror						</div>
					</div>


					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">
								Role(s)
							</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<!-- <input class="form-control" placeholder="Saisir son adresse email" type="email"> -->
                            <select class="form-control select2-no-search" name="nom_role" id="nom_role" required>
														   <option value="">Select Role</option>
														   @foreach($roles as $role)
														   <option value="{{$role->nom}}">{{$role->nom}}</option>
														   @endforeach
														   </select>
															@error('tel')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
															@enderror



								</div>
					</div>
					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">Mot de passe(par défaut)</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

															@error('password')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
															@enderror						</div>
					</div>
					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">Comfirmer</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
						</div>
					</div>
					<button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">{{ __('Ajouter') }}</button>

				</div>
			</div>
		</div>
	</div>
</div>




						</div>
					</div>








@endsection
@section('js')
@endsection
