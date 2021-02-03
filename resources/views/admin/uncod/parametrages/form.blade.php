<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="main-content-label mg-b-5">
				{{__('Veuiller saisir les informations')}}
				</div>
				<p style="color:red;display: none;" class="mg-b-20">
					{{__('Note: Tous les champs sont obligatoires')}}
				</p>
				<!-- white-mark.save -->
				<form method="POST" action="{{ route('customiser.save',app()->getLocale()) }}" enctype="multipart/form-data">
					@csrf
					<div class="pd-30 pd-sm-40 bg-gray-200">
						<!-- APP_NAME -->
						<div class="row row-xs align-items-center mg-b-20">
							<div class="col-md-4">
								<label class="form-label mg-b-0">
									{{__('Nom de l\'application')}}
								</label>
							</div>
							<div class="col-md-8 mg-t-5 mg-md-t-0">
								<input required="" name="app_name" class="form-control" placeholder="{{__('Saisir le nom')}}" type="text">
							</div>
						</div>
						<!-- CONTACT_URL -->
						<div class="row row-xs align-items-center mg-b-20">
							<div class="col-md-4">
								<label class="form-label mg-b-0">
									{{__('Lien de la page contact')}}
								</label>
							</div>
							<div class="col-md-8 mg-t-5 mg-md-t-0">
								<input required="" name="contact_url" class="form-control" placeholder="{{__('Saisir le lien')}}" type="text">
							</div>
						</div>
						<!-- TELEPHONE1 -->
						<div class="row row-xs align-items-center mg-b-20">
							<div class="col-md-4">
								<label class="form-label mg-b-0">
									{{__('Téléphone')}} 1
								</label>
							</div>
							<div class="col-md-8 mg-t-5 mg-md-t-0">
								<input name="telephone1" class="form-control" placeholder="{{__('Saisir le numéro')}}" type="text">
							</div>
						</div>
						<!-- TELEPHONE2 -->
						<div class="row row-xs align-items-center mg-b-20">
							<div class="col-md-4">
								<label class="form-label mg-b-0">
									{{__('Téléphone')}} 2
								</label>
							</div>
							<div class="col-md-8 mg-t-5 mg-md-t-0">
								<input name="telephone2" class="form-control" placeholder="{{__('Saisir le numéro')}}" type="text">
							</div>
						</div>
						<!-- EMAIL -->
						<div class="row row-xs align-items-center mg-b-20">
							<div class="col-md-4">
								<label class="form-label mg-b-0">
									{{__('Email')}}
								</label>
							</div>
							<div class="col-md-8 mg-t-5 mg-md-t-0">
								<input name="email" class="form-control" placeholder="{{__('Saisir l\'email')}}" type="text">
							</div>
						</div>

						<!-- APP_LOGO -->
						<div class="row row-xs align-items-center mg-b-20">
							<div class="col-md-4">
								<label class="form-label mg-b-0">
									{{__('Logo')}}
								</label>
							</div>
							<div class="col-md-8 mg-t-5 mg-md-t-0">
								<input required="" name="app_logo" type="file" class="form-control">
							</div>
						</div>
						<!-- APP_FAVICON -->
						<div class="row row-xs align-items-center mg-b-20">
							<div class="col-md-4">
								<label class="form-label mg-b-0">
									{{__('Favicon')}}
								</label>
							</div>
							<div class="col-md-8 mg-t-5 mg-md-t-0">
								<input required="" name="app_favicon" type="file" class="form-control">
							</div>
						</div>
						
						<button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">
							{{__('Sauvegarder')}}
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
