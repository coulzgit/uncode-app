<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="main-content-label mg-b-5">
					{{__('Veuiller saisir les données de l\'utilisateur')}}
				</div>
				<p style="color:red" class="mg-b-20">
					{{__('Note: Tous les champs sont obligatoires')}}
				</p>
				<div class="pd-30 pd-sm-40 bg-gray-200">
					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">
							{{__('Compte N°')}}
						</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input disabled="" id="account_id" value="{{ $account->code }}" class="form-control" placeholder="{{__('Saisir le numéro du compte')}}" type="text">
						</div>
					</div>

					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">
								{{__('Propriétaire du compte ?')}}
							</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<div class="row mg-t-10">
									<div class="col-lg-3">
										<label class="rdiobox" id="account_owner">
											<input name="rdio" type="radio">
											<span>
												{{__('Oui')}}
											</span>
										</label>
									</div>
									<div class="col-lg-3 mg-t-20 mg-lg-t-0">
										<label class="rdiobox">
											<input checked="" name="rdio" type="radio">
											<span>
												{{__('Non')}}
											</span>
										</label>
									</div>

								</div>
						</div>
					</div>
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">
                                {{__('Username')}}
                            </label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                            <input id="user_name" class="form-control" placeholder="{{__('Saisir son nom d\'utilissateur')}}" type="text">
                        </div>
                    </div>
					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">
								{{__('Prénom')}}
							</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input id="prenom" class="form-control" placeholder="{{__('Saisir son prémon')}}" type="text">
						</div>
					</div>

					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">{{__('Nom')}}</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input id="nom" class="form-control" placeholder="{{__('Saisir son nom')}}" type="text">
						</div>
					</div>
					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">

								{{__('Email')}}
							</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input id="email" class="form-control" placeholder="{{__('Saisir son adresse email')}}" type="email">
						</div>
					</div>


					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">

								{{__('Role(s)')}}
							</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">

							<div class="row row-sm">
								<div class="col-lg-6 mg-b-20 mg-lg-b-0">


                                    <select class="form-control select2 " id="role_id" multiple="multiple">
                                        @foreach ($roles as $key => $role)
                                        <option value="{{ $key }}">{{ $role }}</option>
                                        @endforeach
                                    </select>
								</div>
							</div>
						</div>
					</div>
					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">
								{{__('Mot de passe(par défaut)')}}
							</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input id="password" class="form-control" placeholder="{{__('Saisir un mot de passe')}}" type="password">
						</div>
					</div>
					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">{{__('Comfirmer')}}
							</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input id="confirm_password" class="form-control" placeholder="{{__('Confirmer le mot de passe')}}" type="password">
						</div>
                    </div>

                    {{-- <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0 custom-file-label" for="customFile">{{__('Choisir une image') }}
                            </label>
                        </div>
                        <div class="custom-file col-md-8 mg-t-5 mg-md-t-0">
                            <input id="photo" class="custom-file-input" id="customFile" type="file">
                        </div>
                    </div> --}}

                    <div class="row  row-xs align-items-center mg-b-20" >
                        <div class="col-md-8 mg-t-5 mg-md-t-0 "  style="margin-left:310px" >
                            <div class="custom-fil ">
                                <label class="custom-file-label form-label mg-b-0"   style="" for="customFile">{{__('Choisir une image') }}</label>
                                <input id="photo" class="custom-file-input" id="customFile" type="file">
                            </div>
                        </div>
                    </div>




					<button onclick="createUser()"class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">
						{{__('Sauvegarder')}}
					</button>

					<a href="{{route('accounts',app()->getLocale())}}" class="btn btn-dark pd-x-30 mg-t-5">{{__('Annuler')}}</a>
				</div>
			</div>
		</div>
	</div>
</div>

