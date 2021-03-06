<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="main-content-label mg-b-5">
					{{__('Veuiller saisir les données du projet')}}
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
							<select name="account_id" class="form-control" id="account_id">
								<option value="none">
									{{__('Select')}}
								</option>
								@foreach ($accounts as $account)
									<option value="{{ $account->id }}">
										{{ $account->code }}
									</option>

									@if ($projet['account_id']==$account->id)
									      <option value="{{ $account->id }}" selected>{{ $account->code }}</option>
									@else
									      <option value="{{ $account->id }}">{{ $account->code }}</option>
									@endif
								@endforeach
							</select>

						</div>
					</div>

					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">
								{{__('Nom du projet')}}
							</label>
						</div>
						
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input id="projet_name" required=""  value="{{$projet['nom']}}" class="form-control" placeholder="{{__('Saisir le nom du projet')}}" type="text">
						</div>
					</div>
					
					<button onclick="updateProjet()" class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">{{__('Sauvegarder')}}</button>
					<a href="{{route('projets',app()->getLocale())}}" class="btn btn-dark pd-x-30 mg-t-5">{{__('Retour')}}</a>

				</div>
			</div>
		</div>
	</div>
</div>