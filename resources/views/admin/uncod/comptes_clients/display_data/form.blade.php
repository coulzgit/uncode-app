<div class="row">
	<!-- FORM -->
	<form class="col-lg-12 col-md-12" action="{{ route('display-data.save',app()->getLocale()) }}" method="POST" name="importform">
										@csrf
	
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="main-content-label mg-b-5">
					{{__('Compte')}}
				</div>
				<p class="mg-b-20">
					{{__('Veuiller sélectionner un projet')}}
				</p>
				<div class="pd-30 pd-sm-40 bg-gray-200">
					<div class="row row-xs">
						<div class="col-md-10">
							<select id="projet_id" required="" class="form-control" name="projet_id">
								<option value="none">{{__('Select')}}</option>
								@foreach ($projets as $projet)
									<option value="{{ $projet->id }}">
										{{ $projet->nom }}--{{__('Compte')}}--{{ $projet->account->code }}--
									</option>
								@endforeach
							</select>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="main-content-label mg-b-5">
					{{__('Données d\'entetes')}}
				</div>
				<p style="color: red" class="mg-b-20">
					{{__('NOTE: Veuiller sélectionner 6 données d\'entetes')}}. 
				</p>
				<div class="row">
					
					<div class="col-lg-12">
						
						<div class="p-4">
							<div class="col-lg-10">
								<div class="form-group">
									<div class="custom-file">
										<select id="donne_entetes"  required="" class="form-control select2 " name="donne_entetes[]" multiple="multiple">
	                                  
	                                    </select>
									</div>
								</div>
							</div>
							
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="main-content-label mg-b-5">
					{{__('Données d\'imputations')}}
				</div>
				<p style="color: red" class="mg-b-20">
					{{__('NOTE: Veuiller sélectionner 6 données d\'imputations')}}. 
				</p>
				<div class="row">
					
					<div class="col-lg-12">
						
						<div class="p-4">
							<div class="col-lg-10">
								<div class="form-group">
									<div class="custom-file">
										
										<select id="donne_imputations" required="" class="form-control select2 " name="donne_imputations[]" multiple="multiple">
	                                 
	                                    </select>
										
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12">
		<button style="margin-bottom: 20px" type="submit" class="btn btn-primary">{{__('Sauvegarder')}}</button>
	</div>
	
	
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

</div>