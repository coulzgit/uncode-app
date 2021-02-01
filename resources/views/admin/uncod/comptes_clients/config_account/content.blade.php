
<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card overflow-hidden">
			<div class="card-header pb-0">
				<h3 class="card-title">{{__('Compte') }}</h3>
				<p style="color: red!important" class="text-muted card-sub-title mb-0">
					{{__('Développer chaque section pour paramétrer un compte client.') }}
				</p>
			</div>
			<div class="card-body">
				<div class="panel-group1" id="accordion11">
					<div class="panel panel-default  mb-4">
						<div class="panel-heading1 bg-primary ">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion11" href="#collapseFour1" aria-expanded="false"><i class="fe fe-arrow-right mr-2"></i>{{__('N° du compte') }}</a>
							</h4>
						</div>
						<div id="collapseFour1" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="">
							<div class="panel-body border">
								<div class="row col-lg-12">

									<div class="col-lg-5">
										<input  value=" {{ $account['account']->code }}" readonly="" type="text" class="form-control" name="accot_id" placeholder="Saisir le numéro du compte">
									</div>

								</div>

							</div>
						</div>
					</div>
					<div class="panel panel-default mb-0">
						<div class="panel-heading1  bg-primary">
							<h4 class="panel-title1">
								<a class="accordion-toggle mb-0 collapsed" data-toggle="collapse" data-parent="#accordion11" href="#collapseFive2" aria-expanded="false">
									<i class="fe fe-arrow-right mr-2"></i>{{__('Personnalisation') }}</a>
							</h4>
						</div>
						<div id="collapseFive2" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
							<div class="panel-body border">
								<div class="row col-lg-12">
									<div class="col-lg-6">
										<div class="form-group">
											{{__('Nom de l\'application') }}
											<input id="app_name"  type="text" class="form-control" placeholder="Nom" name="app_name">

										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											{{__('Logo de l\'application') }}
                                            <div class="form-group">
                                                <div class="custom-file">

                                                    <input required="" id="app_logo" type="file" name="file" class="form-control">

                                                </div>
                                            </div>

										</div>

									</div>

								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card overflow-hidden">
			<div class="card-header pb-0">
				<h3 class="card-title">{{__('Affichage des données de facture') }}</h3>

			</div>
			<div class="card-body">
				<div class="panel-group1" id="accordion11">
					<div class="panel panel-default  mb-4">
						<div class="panel-heading1 bg-primary ">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion11" href="#collapseFour1" aria-expanded="false"><i class="fe fe-arrow-right mr-2"></i>{{__('Données d\'entete') }}</a>
							</h4>
						</div>
						<div id="collapseFour1" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="">
							<div class="panel-body border">
								<div class="row col-lg-12">

									<div class="row col-lg-12">


                                        <div class="card">
                                            <div class="card-body p-0" id="doc_columns">
                                                <div class="pd-t-20 pd-l-20 pd-r-20">
                                                    <div class="main-content-label">{{__('Sélectionner les données d\'en tete à afficher') }}</div>
                                                </div>

                                                @foreach ($doc_columns as $dc)
                                                    {{-- @foreach($account['doc_columns'] as $a_dc)
                                                        @if($dc == $a_dc->column_name)
                                                            <div class="d-flex p-3 border-top">
                                                                <label class="ckbox">
                                                                        <input type="checkbox" checked="true" name="column_name">
                                                                        <span>{{$dc}}</span>
                                                                </label>
                                                            </div>
                                                             @continue
                                                        @endif
                                                    @endforeach --}}
                                                    <div class="d-flex p-3 border-top">
                                                        <label class="ckbox">
                                                            <input type="checkbox" name="column_name" doc_columns={{ $dc }}>
                                                            <span>{{$dc}}</span>
                                                        </label>
                                                    </div>
                                                @endforeach



                                            </div>
                                        </div>

									</div>

								</div>

							</div>
						</div>
					</div>
					<div class="panel panel-default mb-0">
						<div class="panel-heading1  bg-primary">
							<h4 class="panel-title1">
								<a class="accordion-toggle mb-0 collapsed" data-toggle="collapse" data-parent="#accordion11" href="#collapseFive2" aria-expanded="false"><i class="fe fe-arrow-right mr-2"></i>{{__('Données d\'imputation') }}</a>
							</h4>
						</div>
						<div id="collapseFive2" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
							<div class="panel-body border" >
								<div class="row col-lg-12" id="acc_data_columns" >
                                        <div class="card col-6">
                                            <div class="card-body p-0" >
                                                <div class="pd-t-20 pd-l-20 pd-r-20">
                                                <div class="main-content-label">{{__('Sélectionner les données d\'en tete à afficher') }}</div>
                                                </div>
                                                {{-- @foreach ($account['acc_data_columns'] as $item )
                                                            @foreach ($acc_data_columns['list1']  as $te)
                                                                        @if($te==$item['column_name'])
                                                                                <div class="d-flex p-3 border-top">
                                                                                    <label class="ckbox"><input  name="acc_data_column"  acc_data_column={{  $te  }} checked=""   type="checkbox"><span>{{ $te }}</span></label>

                                                                                </div>
                                                                        @else
                                                                                <div class="d-flex p-3 border-top">
                                                                                    <label class="ckbox"><input name="acc_data_column" acc_data_column={{  $te  }} type="checkbox"><span>{{ $te }}</span></label>

                                                                                </div>
                                                                        @endif
                                                            @endforeach
                                                    @endforeach --}}




                                                @foreach ($acc_data_columns['list1'] as $adc)
                                                    {{-- @foreach($account['acc_data_columns'] as $a_adc)
                                                        @if($adc == $a_adc->column_name)
                                                            <div class="d-flex p-3 border-top">
                                                                <label class="ckbox">
                                                                    <input type="checkbox" checked="true" name="acc_data_column_name">
                                                                    <span>{{$adc}}</span>
                                                                </label>
                                                            </div>
                                                            @continue
                                                        @endif
                                                    @endforeach --}}
                                                    <div class="d-flex p-3 border-top">
                                                        <label class="ckbox">
                                                            <input type="checkbox" name="acc_data_column_name" acc_data_columns={{ $adc }}>
                                                            <span>{{$adc}}</span>
                                                        </label>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                        <div class="card col-6" >
                                            <div class="card-body p-0">
                                                <div class="pd-t-20 pd-l-20 pd-r-20">
                                                    {{-- <div class="main-content-label">{{__('Sélectionner les données d\'en tete à afficher') }}</div> --}}
                                                </div>
                                                @foreach ($acc_data_columns['list2'] as $adc)
                                                    {{-- @foreach($account['acc_data_columns'] as $a_adc)
                                                        @if($adc == $a_adc->column_name)
                                                            <div class="d-flex p-3 border-top">
                                                                <label class="ckbox">
                                                                    <input type="checkbox" checked="true" name="acc_data_column_name" acc_data_columns={{ $adc }}>
                                                                    <span>{{$adc}}</span>
                                                                </label>
                                                            </div>
                                                            @continue
                                                        @endif
                                                    @endforeach --}}
                                                    <div class="d-flex p-3 border-top">
                                                        <label class="ckbox">
                                                            <input type="checkbox" name="acc_data_column_name" acc_data_columns={{ $adc }}>
                                                            <span>{{$adc}}</span>
                                                        </label>
                                                    </div>
                                                @endforeach
                                                {{-- @foreach ($account['acc_data_columns'] as $item )
                                                        @foreach ($acc_data_columns['list2']  as $te)
                                                                    @if($te==$item['column_name'])
                                                                            <div class="d-flex p-3 border-top">
                                                                                <label class="ckbox"><input checked="" name="acc_data_column" acc_data_column={{  $te  }} type="checkbox"><span>{{ $te }}</span></label>

                                                                            </div>
                                                                    @else
                                                                            <div class="d-flex p-3 border-top">
                                                                                <label class="ckbox"><input name="acc_data_column"  acc_data_column={{ $te }} type="checkbox"><span>{{ $te }}</span></label>

                                                                            </div>
                                                                    @endif
                                                        @endforeach
                                                @endforeach --}}

                                            </div>
                                        </div>

								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

    <button onclick="showalert()" class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">{{__('Sauvegarder')}}</button>
    <a href="{{route('accounts',app()->getLocale())}}" class="btn btn-dark pd-x-30 mg-t-5">{{__('Annuler')}}</a>






