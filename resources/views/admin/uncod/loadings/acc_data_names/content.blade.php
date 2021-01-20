<div class="row">
	<!-- FORM -->
	<form class="col-lg-12 col-md-12" action="{{ route('loading.acc-data-name',app()->getLocale()) }}" method="POST" name="importform" enctype="multipart/form-data">
										@csrf
	
	
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="main-content-label mg-b-5">
					{{__('TABLE ACC_DATA_NAME')}}
				</div>
				<p class="mg-b-20">
					{{__('NOTE: Veuiller bien formater votre fichier (.CSV)')}}. 
				</p>
				<div class="row">
					
					<div class="col-lg-12">
						
						<div class="p-4">
							<div class="col-lg-10">
								<div class="form-group">
									<div class="custom-file">
										
										<input required="" type="file" name="file" class="form-control">
										
									</div>
								</div>
							</div>
							<button type="submit" style="margin-left: 10px" class="btn btn-main-primary pd-x-20 btn_load">
								<span id="span_load">
								 {{__('Charger')}}
								</span>
								<span id="my_spinner" class="my_spinner">
									<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true">
									</span>
								  	{{__('Chargement')}}...
							  	</span>
							</button>

							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- RESULTS -->
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="main-content-label mg-b-5">
					{{__('RESULTAT')}}
				</div>
				<div class="row">
					
					<div class="col-lg-12">
						<div class="p-4">
							<div class="col-lg-10">
								
								
@if(session()->has('succes'))
    <div style="padding: 12px" class="row">
		<div style="background: #bff1cd; border: 1px solid #bff1cd;border-radius: 5px;height: 50px;padding-top: 5px" class="col-lg-12 col-md-12">
			<span>{{__('Chargement réussie')}}</span>
		</div>
	</div>
@endif
@if(session()->has('errors'))
	<div style="padding: 12px" class="row">
		<div style="background: #ff7c92; border: 1px solid #ff7c92;border-radius: 5px;min-height: 50px;padding-top: 5px" class="col-lg-12 col-md-12">
			<span>{{__('Chargement échoué')}}</span>
			<div class="col-lg-12">
				{{__('Ligne')}}: {{ session()->get('row') }};
			</div>
			<div class="col-lg-12">
				{{__('Colonne')}}: {{ session()->get('attribute') }};
			</div>
			<div class="col-lg-12">
				{{__('Erreurs')}}: {{ session()->get('errors')[0] }};
			</div>
			<div class="col-lg-12">
				{{__('Valeurs')}}: 
				@foreach(session()->get('values') as $item) 
					 {{$item}};
				@endforeach
			</div>
		</div>
	</div>
	
@endif
@if(session()->has('error_not_file'))
	<div style="padding: 12px" class="row">
		<div style="background: #ff7c92; border: 1px solid #ff7c92;border-radius: 5px;min-height: 50px;padding-top: 5px" class="col-lg-12 col-md-12">
			
			<p>{{__('Projet obligatoire')}}</p>
			<p>{{__('Fichier obligatoire')}}</p>
		</div>
	</div>
@endif


								
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

</div>