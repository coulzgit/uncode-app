<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="main-content-label mg-b-5">
				{{__('Veuiller saisir les informations')}}
				</div>
				<p style="color:red" class="mg-b-20">
					{{__('Note: Tous les champs sont obligatoires')}}
				</p>
				<!-- white-mark.save -->
				<form method="POST" action="{{ route('white-mark.save',app()->getLocale()) }}" enctype="multipart/form-data">
					@csrf
					<div class="pd-30 pd-sm-40 bg-gray-200">
						<div class="row row-xs align-items-center mg-b-20">
							<div class="col-md-4">
								<label class="form-label mg-b-0">
								{{__('Compte N°')}}
							</label>
							</div>
							<div class="col-md-8 mg-t-5 mg-md-t-0">
								<select required="" name="accountID" class="form-control">
									<option value="none">	
										{{__('Choisir')}}
									</option>
									@foreach ($accounts as $account)
									<option value="{{$account->id}}">
										{{ $account->code }}
									</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="row row-xs align-items-center mg-b-20">
							<div class="col-md-4">
								<label class="form-label mg-b-0">
									{{__('Nom de la marque blanche')}}
								</label>
							</div>
							<div class="col-md-8 mg-t-5 mg-md-t-0">
								<input required="" name="app_name" class="form-control" placeholder="{{__('Saisir le nom')}}" type="text">
							</div>
						</div>

						<div class="row row-xs align-items-center mg-b-20">
							<div class="col-md-4">
								<label class="form-label mg-b-0">
									{{__('Nom de domaine de la marque blanche')}}
								</label>
							</div>
							<div class="col-md-8 mg-t-5 mg-md-t-0">
								<input required="" name="domaine_name" class="form-control" placeholder="{{__('Saisir le nom de domaine')}}" type="text">
							</div>
						</div>
						<div class="row row-xs align-items-center mg-b-20">
							<div class="col-md-4">
								<label class="form-label mg-b-0">
									{{__('Logo de la marque blanche')}}
								</label>
							</div>
							<div class="col-md-8 mg-t-5 mg-md-t-0">
								<input required="" name="app_logo" type="file" class="form-control">
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
