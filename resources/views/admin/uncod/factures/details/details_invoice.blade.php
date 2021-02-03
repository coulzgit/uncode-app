<div class="col-lg-8">
	<div class="row row-sm">
		<div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
			<div class="card ">
				<div class="card-body">
					<div class="counter-status d-flex md-mb-0">
						<div class="counter-icon bg-primary-transparent">
							<i class="icon-layers text-primary"></i>
						</div>
						<div class="mr-auto">
							<h5 class="tx-13">
								

								@if(isset($invoice['doc_data_names']['invoice_sum']))
									{{$invoice['doc_data_names']['invoice_sum'][0]['data_name']}}
								@else
									invoice_sum
								@endif
							</h5>
							<h2 class="mb-0 tx-22 mb-1 mt-1">
								{{number_format($invoice['doc']['invoice_sum'],2)}}
							</h2>
							<p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>{{$invoice['doc']['invoice_currency']}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
			<div class="card ">
				<div class="card-body">
					<div class="counter-status d-flex md-mb-0">
						<div class="counter-icon bg-success-transparent">
							<i class="icon-layers text-success"></i>
						</div>
						<div class="mr-auto">
							<h5 class="tx-13">
								@if(isset($invoice['doc_data_names']['net_sum']))
									{{$invoice['doc_data_names']['net_sum'][0]['data_name']}}
								@else
									net_sum
								@endif
							</h5>
							<h2 class="mb-0 tx-22 mb-1 mt-1">
								{{number_format($invoice['doc']['net_sum'],2)}}
							</h2>
							<p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>{{$invoice['doc']['invoice_currency']}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
			<div class="card ">
				<div class="card-body">
					<div class="counter-status d-flex md-mb-0">
						<div class="counter-icon bg-danger-transparent">
							<i class="icon-layers text-danger"></i>
						</div>
						<div class="mr-auto">
							<h5 class="tx-13">
								@if(isset($invoice['doc_data_names']['vat_sum']))
									{{$invoice['doc_data_names']['vat_sum'][0]['data_name']}}
								@else
									vat_sum
								@endif
							</h5>
							<h2 class="mb-0 tx-22 mb-1 mt-1">
								{{number_format($invoice['doc']['vat_sum'],2)}}
							</h2>
							<p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>
								{{$invoice['doc']['invoice_currency']}}
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<div class="tabs-menu ">
				<!-- Tabs -->
				<ul class="nav nav-tabs profile navtab-custom panel-tabs">
					<li class="active">
						<a href="#donnees_entetes" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="las la-user-circle tx-16 mr-1"></i></span> <span class="hidden-xs">{{__('Données d\'entetes')}}</span> </a>
					</li>
					<li class="">
						<a href="#donnees_imputations" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-images tx-15 mr-1"></i></span> <span class="hidden-xs">{{__('Données d\'imputations')}}</span> </a>
					</li>
					<li class="">
						<a href="#ligne_articles" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-cog tx-16 mr-1"></i></span> <span class="hidden-xs">{{__('Ligne d\'articles')}}</span> </a>
					</li>
					<li class="">
						<a href="#historiques" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-cog tx-16 mr-1"></i></span> <span class="hidden-xs">{{__('Historiques')}}</span> </a>
					</li>
				</ul>
			</div>
			<div class="tab-content border-left border-bottom border-right border-top-0 p-4">
				<div class="tab-pane active" id="donnees_entetes">
					<div class="row row-sm col-lg-12">
						<div class="col-lg-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="row">
										<h6 class="price">		
											@if(isset($invoice['doc_data_names']['doc_id']))
												{{$invoice['doc_data_names']['doc_id'][0]['data_name']}}:
											@else
												doc_id:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['doc_id']}}
											</span>
										</h6>
									</div>


									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['scan_date']))
												{{$invoice['doc_data_names']['scan_date'][0]['data_name']}}:
											@else
												scan_date:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['scan_date']}}
											</span>
										</h6>
									</div>


									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['comp_no']))
												{{$invoice['doc_data_names']['comp_no'][0]['data_name']}}:
											@else
												comp_no:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['comp_no']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['doc_name']))
												{{$invoice['doc_data_names']['doc_name'][0]['data_name']}}:
											@else
												doc_name:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['doc_name']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['doc_pages']))
												{{$invoice['doc_data_names']['doc_pages'][0]['data_name']}}:
											@else
												doc_pages:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['doc_pages']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['flow_fixed']))
												{{$invoice['doc_data_names']['flow_fixed'][0]['data_name']}}:
											@else
												flow_fixed:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['flow_fixed']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">	
											@if(isset($invoice['doc_data_names']['supplier_num']))
												{{$invoice['doc_data_names']['supplier_num'][0]['data_name']}}:
											@else
												supplier_num:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['supplier_num']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">	
											@if(isset($invoice['doc_data_names']['invoice_num']))
												{{$invoice['doc_data_names']['invoice_num'][0]['data_name']}}:
											@else
												invoice_num:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_num']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['voucher_num']))
												{{$invoice['doc_data_names']['voucher_num'][0]['data_name']}}:
											@else
												voucher_num:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['voucher_num']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['invoice_date']))
												{{$invoice['doc_data_names']['invoice_date'][0]['data_name']}}:
											@else
												invoice_date:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_date']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['invoice_last_date']))
												{{$invoice['doc_data_names']['invoice_last_date'][0]['data_name']}}:
											@else
												invoice_last_date:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_last_date']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['invoice_sum']))
												{{$invoice['doc_data_names']['invoice_sum'][0]['data_name']}}:
											@else
												invoice_sum:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{number_format($invoice['doc']['invoice_sum'],2)}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['stamp_date']))
												{{$invoice['doc_data_names']['stamp_date'][0]['data_name']}}:
											@else
												stamp_date:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['stamp_date']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">	
											@if(isset($invoice['doc_data_names']['stamp_uid']))
												{{$invoice['doc_data_names']['stamp_uid'][0]['data_name']}}:
											@else
												stamp_uid:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['stamp_uid']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['status_index']))
												{{$invoice['doc_data_names']['status_index'][0]['data_name']}}:
											@else
												status_index:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['status_index']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['order_num']))
												{{$invoice['doc_data_names']['order_num'][0]['data_name']}}:
											@else
												order_num:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['order_num']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">	
											@if(isset($invoice['doc_data_names']['last_acceptor']))
												{{$invoice['doc_data_names']['last_acceptor'][0]['data_name']}}:
											@else
												last_acceptor:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['last_acceptor']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['exchange_rate']))
												{{$invoice['doc_data_names']['exchange_rate'][0]['data_name']}}:
											@else
												exchange_rate:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{number_format($invoice['doc']['exchange_rate'],2)}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['invoice_currency']))
												{{$invoice['doc_data_names']['invoice_currency'][0]['data_name']}}:
											@else
												invoice_currency:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_currency']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['invoice_sum_calc']))
												{{$invoice['doc_data_names']['invoice_sum_calc'][0]['data_name']}}:
											@else
												invoice_sum_calc:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{number_format($invoice['doc']['invoice_sum_calc'],2)}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">	
											@if(isset($invoice['doc_data_names']['cash_date']))
												{{$invoice['doc_data_names']['cash_date'][0]['data_name']}}:
											@else
												cash_date:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['cash_date']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['accounting_period']))
												{{$invoice['doc_data_names']['accounting_period'][0]['data_name']}}:
											@else
												accounting_period:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['accounting_period']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['supplier_name']))
												{{$invoice['doc_data_names']['supplier_name'][0]['data_name']}}:
											@else
												supplier_name:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['supplier_name']}}
											</span>
										</h6>
									</div>
									<!-- ################ -->
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['attrib_t1']))
												{{$invoice['doc_data_names']['attrib_t1'][0]['data_name']}}:
											@else
												attrib_t1:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_t1']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['attrib_t2']))
												{{$invoice['doc_data_names']['attrib_t2'][0]['data_name']}}:
											@else
												attrib_t2:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_t2']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['attrib_t3']))
												{{$invoice['doc_data_names']['attrib_t3'][0]['data_name']}}:
											@else
												attrib_t3:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_t3']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['attrib_t4']))
												{{$invoice['doc_data_names']['attrib_t4'][0]['data_name']}}:
											@else
												attrib_t4:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_t4']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">	
											@if(isset($invoice['doc_data_names']['attrib_t5']))
												{{$invoice['doc_data_names']['attrib_t5'][0]['data_name']}}:
											@else
												attrib_t5:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_t5']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">	
											@if(isset($invoice['doc_data_names']['attrib_t6']))
												{{$invoice['doc_data_names']['attrib_t6'][0]['data_name']}}:
											@else
												attrib_t6:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_t6']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['attrib_t7']))
												{{$invoice['doc_data_names']['attrib_t7'][0]['data_name']}}:
											@else
												attrib_t7:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_t7']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">	
											@if(isset($invoice['doc_data_names']['attrib_n']))
												{{$invoice['doc_data_names']['attrib_n'][0]['data_name']}}:
											@else
												attrib_n:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_n']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['attrib_n2']))
												{{$invoice['doc_data_names']['attrib_n2'][0]['data_name']}}:
											@else
												attrib_n2:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_n2']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['attrib_n3']))
												{{$invoice['doc_data_names']['attrib_n3'][0]['data_name']}}:
											@else
												attrib_n3:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_n3']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['attrib_n4']))
												{{$invoice['doc_data_names']['attrib_n4'][0]['data_name']}}:
											@else
												attrib_n4:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_n4']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">	
											@if(isset($invoice['doc_data_names']['attrib_d']))
												{{$invoice['doc_data_names']['attrib_d'][0]['data_name']}}:
											@else
												attrib_d:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_d']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['attrib_d2']))
												{{$invoice['doc_data_names']['attrib_d2'][0]['data_name']}}:
											@else
												attrib_d2:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_d2']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['attrib_d3']))
												{{$invoice['doc_data_names']['attrib_d3'][0]['data_name']}}:
											@else
												attrib_d3:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_d3']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['attrib_d4']))
												{{$invoice['doc_data_names']['attrib_d4'][0]['data_name']}}:
											@else
												attrib_d4:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_d4']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['bff_resource']))
												{{$invoice['doc_data_names']['bff_resource'][0]['data_name']}}:
											@else
												bff_resource:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['bff_resource']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">	
											@if(isset($invoice['doc_data_names']['vat_sum']))
												{{$invoice['doc_data_names']['vat_sum'][0]['data_name']}}:
											@else
												vat_sum:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{number_format( $invoice['doc']['vat_sum'],2)}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['invoice_serial']))
												{{$invoice['doc_data_names']['invoice_serial'][0]['data_name']}}:
											@else
												invoice_serial:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_serial']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['invoice_type']))
												{{$invoice['doc_data_names']['invoice_type'][0]['data_name']}}:
											@else
												invoice_type:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_type']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['prebooked']))
												{{$invoice['doc_data_names']['prebooked'][0]['data_name']}}:
											@else
												prebooked:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['prebooked']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['secondary_status']))
												{{$invoice['doc_data_names']['secondary_status'][0]['data_name']}}:
											@else
												secondary_status:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['secondary_status']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['entry_date']))
												{{$invoice['doc_data_names']['entry_date'][0]['data_name']}}:
											@else
												entry_date:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['entry_date']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">	
											@if(isset($invoice['doc_data_names']['voucher_group']))
												{{$invoice['doc_data_names']['voucher_group'][0]['data_name']}}:
											@else
												voucher_group:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['voucher_group']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">	
											@if(isset($invoice['doc_data_names']['voucher_period']))
												{{$invoice['doc_data_names']['voucher_period'][0]['data_name']}}:
											@else
												voucher_period:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['voucher_period']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['user_serial']))
												{{$invoice['doc_data_names']['user_serial'][0]['data_name']}}:
											@else
												user_serial:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['user_serial']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['net_sum_calc']))
												{{$invoice['doc_data_names']['net_sum_calc'][0]['data_name']}}:
											@else
												net_sum_calc:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{number_format($invoice['doc']['net_sum_calc'],2)}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">	
											@if(isset($invoice['doc_data_names']['net_sum']))
												{{$invoice['doc_data_names']['net_sum'][0]['data_name']}}:
											@else
												net_sum:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{number_format( $invoice['doc']['net_sum'],2)}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['with_comments']))
												{{$invoice['doc_data_names']['with_comments'][0]['data_name']}}:
											@else
												with_comments:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['with_comments']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['external_status']))
												{{$invoice['doc_data_names']['external_status'][0]['data_name']}}:
											@else
												external_status:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['external_status']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['voucher_year']))
												{{$invoice['doc_data_names']['voucher_year'][0]['data_name']}}:
											@else
												voucher_year:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['voucher_year']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['serial_year']))
												{{$invoice['doc_data_names']['serial_year'][0]['data_name']}}:
											@else
												serial_year:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['serial_year']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['gl_date']))
												{{$invoice['doc_data_names']['gl_date'][0]['data_name']}}:
											@else
												gl_date:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['gl_date']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['credit_memo']))
												{{$invoice['doc_data_names']['credit_memo'][0]['data_name']}}:
											@else
												credit_memo:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['credit_memo']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['vat_sum_calc']))
												{{$invoice['doc_data_names']['vat_sum_calc'][0]['data_name']}}:
											@else
												vat_sum_calc:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{number_format($invoice['doc']['vat_sum_calc'],2)}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['hold_owner']))
												{{$invoice['doc_data_names']['hold_owner'][0]['data_name']}}:
											@else
												hold_owner:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['hold_owner']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['lock_owner']))
												{{$invoice['doc_data_names']['lock_owner'][0]['data_name']}}:
											@else
												lock_owner:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['lock_owner']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['lock_date']))
												{{$invoice['doc_data_names']['lock_date'][0]['data_name']}}:
											@else
												lock_date:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['lock_date']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['lock_index']))
												{{$invoice['doc_data_names']['lock_index'][0]['data_name']}}:
											@else
												lock_index:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['lock_index']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['contract_num']))
												{{$invoice['doc_data_names']['contract_num'][0]['data_name']}}:
											@else
												contract_num:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['contract_num']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['oneaction']))
												{{$invoice['doc_data_names']['oneaction'][0]['data_name']}}:
											@else
												oneaction:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['oneaction']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['transfer_check']))
												{{$invoice['doc_data_names']['transfer_check'][0]['data_name']}}:
											@else
												transfer_check:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['transfer_check']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['autoflow_status_index']))
												{{$invoice['doc_data_names']['autoflow_status_index'][0]['data_name']}}:
											@else
												autoflow_status_index:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['autoflow_status_index']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['match_status_index']))
												{{$invoice['doc_data_names']['match_status_index'][0]['data_name']}}:
											@else
												match_status_index:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['match_status_index']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['custom_action_status']))
												{{$invoice['doc_data_names']['custom_action_status'][0]['data_name']}}:
											@else
												custom_action_status:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['custom_action_status']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['preprocessing_timestamp']))
												{{$invoice['doc_data_names']['preprocessing_timestamp'][0]['data_name']}}:
											@else
												preprocessing_timestamp:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['preprocessing_timestamp']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['supplier_rep_code']))
												{{$invoice['doc_data_names']['supplier_rep_code'][0]['data_name']}}:
											@else
												supplier_rep_code:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['supplier_rep_code']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['supplier_rep_name']))
												{{$invoice['doc_data_names']['supplier_rep_name'][0]['data_name']}}:
											@else
												supplier_rep_name:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['supplier_rep_name']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">	
											@if(isset($invoice['doc_data_names']['payment_date']))
												{{$invoice['doc_data_names']['payment_date'][0]['data_name']}}:
											@else
												payment_date:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['payment_date']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['delivery_note_number']))
												{{$invoice['doc_data_names']['delivery_note_number'][0]['data_name']}}:
											@else
												delivery_note_number:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['delivery_note_number']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['reference_person']))
												{{$invoice['doc_data_names']['reference_person'][0]['data_name']}}:
											@else
												reference_person:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['reference_person']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['CM_REQUEST']))
												{{$invoice['doc_data_names']['CM_REQUEST'][0]['data_name']}}:
											@else
												CM_REQUEST:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['CM_REQUEST']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">	
											@if(isset($invoice['doc_data_names']['invoice_origin']))
												{{$invoice['doc_data_names']['invoice_origin'][0]['data_name']}}:
											@else
												invoice_origin:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_origin']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['match_wait_until']))
												{{$invoice['doc_data_names']['match_wait_until'][0]['data_name']}}:
											@else
												match_wait_until:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['match_wait_until']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['invoice_category']))
												{{$invoice['doc_data_names']['invoice_category'][0]['data_name']}}:
											@else
												invoice_category:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_category']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['parent_invoice_id']))
												{{$invoice['doc_data_names']['parent_invoice_id'][0]['data_name']}}:
											@else
												parent_invoice_id:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['parent_invoice_id']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">
											@if(isset($invoice['doc_data_names']['MC_MATCH_STATUS_INDEX']))
												{{$invoice['doc_data_names']['MC_MATCH_STATUS_INDEX'][0]['data_name']}}:
											@else
												MC_MATCH_STATUS_INDEX:
											@endif
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['MC_MATCH_STATUS_INDEX']}}
											</span>
										</h6>
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card mg-b-20">
								<div class="card-body">
									@foreach($invoice['data_docs'] as $data_doc)
										<div class="row">
											<h6 class="price">		
												{{$data_doc['doc_data_name']['data_name']}}:
												<span style="color: #adadad" class="h6 ml-2">
													{{$data_doc['data_value']}}
												</span>
											</h6>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="donnees_imputations">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th>
													@if(isset($invoice['acc_data_names']['t35']))
														{{$invoice['acc_data_names']['t35'][0]['data_name']}}
													@else
														t35
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t1']))
														{{$invoice['acc_data_names']['t1'][0]['data_name']}}
													@else
														t1
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t16']))
														{{$invoice['acc_data_names']['t16'][0]['data_name']}}
													@else
														t16
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t2']))
														{{$invoice['acc_data_names']['t2'][0]['data_name']}}
													@else
														t2
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t17']))
														{{$invoice['acc_data_names']['t17'][0]['data_name']}}
													@else
														t17
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t15']))
														{{$invoice['acc_data_names']['t15'][0]['data_name']}}
													@else
														t15
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t13']))
														{{$invoice['acc_data_names']['t13'][0]['data_name']}}
													@else
														t13
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t14']))
														{{$invoice['acc_data_names']['t14'][0]['data_name']}}
													@else
														t14
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t27']))
														{{$invoice['acc_data_names']['t27'][0]['data_name']}}
													@else
														t27
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t5']))
														{{$invoice['acc_data_names']['t5'][0]['data_name']}}
													@else
														t5
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t6']))
														{{$invoice['acc_data_names']['t6'][0]['data_name']}}
													@else
														t6
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t7']))
														{{$invoice['acc_data_names']['t7'][0]['data_name']}}
													@else
														t7
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t29']))
														{{$invoice['acc_data_names']['t29'][0]['data_name']}}
													@else
														t29
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['n2']))
														{{$invoice['acc_data_names']['n2'][0]['data_name']}}
													@else
														n2
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['n7']))
														{{$invoice['acc_data_names']['n7'][0]['data_name']}}
													@else
														n7
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['n1']))
														{{$invoice['acc_data_names']['n1'][0]['data_name']}}
													@else
														n1
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t11']))
														{{$invoice['acc_data_names']['t11'][0]['data_name']}}
													@else
														t11
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['net_sum']))
														{{$invoice['acc_data_names']['net_sum'][0]['data_name']}}
													@else
														net_sum
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['net_calc']))
														{{$invoice['acc_data_names']['net_calc'][0]['data_name']}}
													@else
														net_calc
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t3']))
														{{$invoice['acc_data_names']['t3'][0]['data_name']}}
													@else
														t3
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['vat_pros']))
														{{$invoice['acc_data_names']['vat_pros'][0]['data_name']}}
													@else
														vat_pros
													@endif	
												</th>	
												<th>
													@if(isset($invoice['acc_data_names']['vat']))
														{{$invoice['acc_data_names']['vat'][0]['data_name']}}
													@else
														vat
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['n3']))
														{{$invoice['acc_data_names']['n3'][0]['data_name']}}
													@else
														n3
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['brutto']))
														{{$invoice['acc_data_names']['brutto'][0]['data_name']}}
													@else
														brutto
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['brutto_calc']))
														{{$invoice['acc_data_names']['brutto_calc'][0]['data_name']}}
													@else
														brutto_calc
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t22']))
														{{$invoice['acc_data_names']['t22'][0]['data_name']}}
													@else
														t22
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t4']))
														{{$invoice['acc_data_names']['t4'][0]['data_name']}}
													@else
														t4
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t12']))
														{{$invoice['acc_data_names']['t12'][0]['data_name']}}
													@else
														t12
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t30']))
														{{$invoice['acc_data_names']['t30'][0]['data_name']}}
													@else
														t30
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t37']))
														{{$invoice['acc_data_names']['t37'][0]['data_name']}}
													@else
														t37
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t23']))
														{{$invoice['acc_data_names']['t23'][0]['data_name']}}
													@else
														t23
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t8']))
														{{$invoice['acc_data_names']['t8'][0]['data_name']}}
													@else
														t8
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t9']))
														{{$invoice['acc_data_names']['t9'][0]['data_name']}}
													@else
														t9
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t10']))
														{{$invoice['acc_data_names']['t10'][0]['data_name']}}
													@else
														t10
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t38']))
														{{$invoice['acc_data_names']['t38'][0]['data_name']}}
													@else
														t38
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['n8']))
														{{$invoice['acc_data_names']['n8'][0]['data_name']}}
													@else
														n8
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['n9']))
														{{$invoice['acc_data_names']['n9'][0]['data_name']}}
													@else
														n9
													@endif
												</th>
												<th>
													@if(isset($invoice['acc_data_names']['t39']))
														{{$invoice['acc_data_names']['t39'][0]['data_name']}}
													@else
														t39
													@endif
												</th>			
											</tr>
										</thead>
										<tbody>
											@foreach($invoice['acc_datas'] as $acc_data)
												<tr>
													<th scope="row">{{$acc_data['t35']}}</th>
													<td>{{$acc_data['t1']}}</td>
													<td>{{$acc_data['t16']}}</td>
													<td>{{$acc_data['t2']}}</td>
													<td>{{$acc_data['t17']}}</td>
													<td>{{$acc_data['t15']}}</td>
													<td>{{$acc_data['t13']}}</td>
													<td>{{$acc_data['t14']}}</td>
													<td>{{$acc_data['t27']}}</td>
													<td>{{$acc_data['t5']}}</td>
													<td>{{$acc_data['t6']}}</td>
													<td>{{$acc_data['t7']}}</td>
													<td>{{$acc_data['t29']}}</td>
													<td>{{$acc_data['n2']}}</td>
													<td>{{$acc_data['n7']}}</td>
													<td>{{$acc_data['n1']}}</td>
													<td>{{$acc_data['t11']}}</td>
													<td>{{number_format( $acc_data['net_sum'],2)}}</td>
													<td>{{number_format($acc_data['net_calc'],2)}}</td>
													<td>{{$acc_data['t3']}}</td>
													<td>{{number_format($acc_data['vat_pros'],2)}}</td>
													<td>{{number_format($acc_data['vat'],2)}}</td>
													<td>{{$acc_data['n3']}}</td>
													<td>{{number_format($acc_data['brutto'],2)}}</td>
													<td>{{number_format($acc_data['brutto_calc'],2)}}</td>
													<td>{{$acc_data['t22']}}</td>
													<td>{{$acc_data['t4']}}</td>
													<td>{{$acc_data['t12']}}</td>
													<td>{{$acc_data['t30']}}</td>
													<td>{{$acc_data['t37']}}</td>
													<td>{{$acc_data['t23']}}</td>
													<td>{{$acc_data['t8']}}</td>
													<td>{{$acc_data['t9']}}</td>
													<td>{{$acc_data['t10']}}</td>
													<td>{{$acc_data['t38']}}</td>
													<td>{{$acc_data['n8']}}</td>
													<td>{{$acc_data['n9']}}</td>
													<td>{{$acc_data['t39']}}</td>
													

												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>	

				<div class="tab-pane" id="ligne_articles">	
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_DOC_ID'])) 
													    {{$invoice['ip_line_item_params']['LIT_DOC_ID'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_DOC_ID
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_ADD_KEY_CODE'])) 
													    {{$invoice['ip_line_item_params']['LIT_ADD_KEY_CODE'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_ADD_KEY_CODE
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_APRICE_GROSS'])) 
													    {{$invoice['ip_line_item_params']['LIT_APRICE_GROSS'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_APRICE_GROSS
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_APRICE_NET'])) 
													    {{$invoice['ip_line_item_params']['LIT_APRICE_NET'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_APRICE_NET
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_CALC_ITEM_TOTAL'])) 
													    {{$invoice['ip_line_item_params']['LIT_CALC_ITEM_TOTAL'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_CALC_ITEM_TOTAL
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_D1'])) 
													    {{$invoice['ip_line_item_params']['LIT_D1'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_D1
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_D10'])) 
													    {{$invoice['ip_line_item_params']['LIT_D10'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_D10
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_D2'])) 
													    {{$invoice['ip_line_item_params']['LIT_D2'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_D2
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_D3'])) 
													    {{$invoice['ip_line_item_params']['LIT_D3'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_D3
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_D4'])) 
													    {{$invoice['ip_line_item_params']['LIT_D4'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_D4
					  								@endif
												</th>

												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_D5'])) 
													    {{$invoice['ip_line_item_params']['LIT_D5'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_D5
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_D6'])) 
													    {{$invoice['ip_line_item_params']['LIT_D6'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_D6
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_D7'])) 
													    {{$invoice['ip_line_item_params']['LIT_D7'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_D7
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_D8'])) 
													    {{$invoice['ip_line_item_params']['LIT_D8'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_D8
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_D9'])) 
													    {{$invoice['ip_line_item_params']['LIT_D9'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_D9
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_DISCOUNT_AMOUNT'])) 
													    {{$invoice['ip_line_item_params']['LIT_DISCOUNT_AMOUNT'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_DISCOUNT_AMOUNT
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_DISCOUNT_PER'])) 
													    {{$invoice['ip_line_item_params']['LIT_DISCOUNT_PER'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_DISCOUNT_PER
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_GROSS_SUM'])) 
													    {{$invoice['ip_line_item_params']['LIT_GROSS_SUM'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_GROSS_SUM
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_INFO_ITEM'])) 
													    {{$invoice['ip_line_item_params']['LIT_INFO_ITEM'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_INFO_ITEM
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_ITEM_DESCRIPTION'])) 
													    {{$invoice['ip_line_item_params']['LIT_ITEM_DESCRIPTION'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_ITEM_DESCRIPTION
					  								@endif
												</th>

												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_MATCH_STATUS_INDEX'])) 
													    {{$invoice['ip_line_item_params']['LIT_MATCH_STATUS_INDEX'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_MATCH_STATUS_INDEX
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_N1'])) 
													    {{$invoice['ip_line_item_params']['LIT_N1'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_N1
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_N10'])) 
													    {{$invoice['ip_line_item_params']['LIT_N10'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_N10
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_N2'])) 
													    {{$invoice['ip_line_item_params']['LIT_N2'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_N2
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_N3'])) 
													    {{$invoice['ip_line_item_params']['LIT_N3'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_N3
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_N4'])) 
													    {{$invoice['ip_line_item_params']['LIT_N4'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_N4
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_N5'])) 
													    {{$invoice['ip_line_item_params']['LIT_N5'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_N5
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_N6'])) 
													    {{$invoice['ip_line_item_params']['LIT_N6'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_N6
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_N7'])) 
													    {{$invoice['ip_line_item_params']['LIT_N7'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_N7
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_N8'])) 
													    {{$invoice['ip_line_item_params']['LIT_N8'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_N8
					  								@endif
												</th>

												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_N9'])) 
													    {{$invoice['ip_line_item_params']['LIT_N9'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_N9
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_NET_SUM'])) 
													    {{$invoice['ip_line_item_params']['LIT_NET_SUM'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_NET_SUM
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_ORDER_NUMBER'])) 
													    {{$invoice['ip_line_item_params']['LIT_ORDER_NUMBER'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_ORDER_NUMBER
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_ORDER_ROW_NUMBER'])) 
													    {{$invoice['ip_line_item_params']['LIT_ORDER_ROW_NUMBER'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_ORDER_ROW_NUMBER
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_PRODUCT_CODE'])) 
													    {{$invoice['ip_line_item_params']['LIT_PRODUCT_CODE'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_PRODUCT_CODE
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_QUANTITY'])) 
													    {{$invoice['ip_line_item_params']['LIT_QUANTITY'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_QUANTITY
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_QUANTITY_UNIT'])) 
													    {{$invoice['ip_line_item_params']['LIT_QUANTITY_UNIT'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_QUANTITY_UNIT
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_ROWID'])) 
													    {{$invoice['ip_line_item_params']['LIT_ROWID'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_ROWID
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_STAMP_TIME'])) 
													    {{$invoice['ip_line_item_params']['LIT_STAMP_TIME'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_STAMP_TIME
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T1'])) 
													    {{$invoice['ip_line_item_params']['LIT_T1'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T1
					  								@endif
												</th>

												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T10'])) 
													    {{$invoice['ip_line_item_params']['LIT_T10'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T10
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T11'])) 
													    {{$invoice['ip_line_item_params']['LIT_T11'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T11
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T12'])) 
													    {{$invoice['ip_line_item_params']['LIT_T12'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T12
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T13'])) 
													    {{$invoice['ip_line_item_params']['LIT_T13'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T13
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T14'])) 
													    {{$invoice['ip_line_item_params']['LIT_T14'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T14
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T15'])) 
													    {{$invoice['ip_line_item_params']['LIT_T15'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T15
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T16'])) 
													    {{$invoice['ip_line_item_params']['LIT_T16'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T16
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T17'])) 
													    {{$invoice['ip_line_item_params']['LIT_T17'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T17
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T18'])) 
													    {{$invoice['ip_line_item_params']['LIT_T18'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T18
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T19'])) 
													    {{$invoice['ip_line_item_params']['LIT_T19'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T19
					  								@endif
												</th>

												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T2'])) 
													    {{$invoice['ip_line_item_params']['LIT_T2'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T2
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T20'])) 
													    {{$invoice['ip_line_item_params']['LIT_T20'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T20
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T21'])) 
													    {{$invoice['ip_line_item_params']['LIT_T21'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T21
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T22'])) 
													    {{$invoice['ip_line_item_params']['LIT_T22'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T22
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T23'])) 
													    {{$invoice['ip_line_item_params']['LIT_T23'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T23
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T24'])) 
													    {{$invoice['ip_line_item_params']['LIT_T24'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T24
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T25'])) 
													    {{$invoice['ip_line_item_params']['LIT_T25'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T25
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T26'])) 
													    {{$invoice['ip_line_item_params']['LIT_T26'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T26
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T27'])) 
													    {{$invoice['ip_line_item_params']['LIT_T27'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T27
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T28'])) 
													    {{$invoice['ip_line_item_params']['LIT_T28'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T28
					  								@endif
												</th>

												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T29'])) 
													    {{$invoice['ip_line_item_params']['LIT_T29'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T29
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T3'])) 
													    {{$invoice['ip_line_item_params']['LIT_T3'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T3
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T30'])) 
													    {{$invoice['ip_line_item_params']['LIT_T30'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T30
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T31'])) 
													    {{$invoice['ip_line_item_params']['LIT_T31'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T31
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T32'])) 
													    {{$invoice['ip_line_item_params']['LIT_T32'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T32
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T33'])) 
													    {{$invoice['ip_line_item_params']['LIT_T33'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T33
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T34'])) 
													    {{$invoice['ip_line_item_params']['LIT_T34'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T34
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T35'])) 
													    {{$invoice['ip_line_item_params']['LIT_T35'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T35
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T36'])) 
													    {{$invoice['ip_line_item_params']['LIT_T36'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T36
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T37'])) 
													    {{$invoice['ip_line_item_params']['LIT_T37'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T37
					  								@endif
												</th>

												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T38'])) 
													    {{$invoice['ip_line_item_params']['LIT_T38'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T38
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T39'])) 
													    {{$invoice['ip_line_item_params']['LIT_T39'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T39
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T4'])) 
													    {{$invoice['ip_line_item_params']['LIT_T4'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T4
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T40'])) 
													    {{$invoice['ip_line_item_params']['LIT_T40'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T40
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T41'])) 
													    {{$invoice['ip_line_item_params']['LIT_T41'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T41
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T42'])) 
													    {{$invoice['ip_line_item_params']['LIT_T42'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T42
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T43'])) 
													    {{$invoice['ip_line_item_params']['LIT_T43'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T43
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T44'])) 
													    {{$invoice['ip_line_item_params']['LIT_T44'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T44
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T45'])) 
													    {{$invoice['ip_line_item_params']['LIT_T45'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T45
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T46'])) 
													    {{$invoice['ip_line_item_params']['LIT_T46'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T46
					  								@endif
												</th>


												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T47'])) 
													    {{$invoice['ip_line_item_params']['LIT_T47'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T47
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T48'])) 
													    {{$invoice['ip_line_item_params']['LIT_T48'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T48
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T49'])) 
													    {{$invoice['ip_line_item_params']['LIT_T49'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T49
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T5'])) 
													    {{$invoice['ip_line_item_params']['LIT_T5'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T5
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T50'])) 
													    {{$invoice['ip_line_item_params']['LIT_T50'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T50
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T6'])) 
													    {{$invoice['ip_line_item_params']['LIT_T6'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T6
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T7'])) 
													    {{$invoice['ip_line_item_params']['LIT_T7'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T7
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T8'])) 
													    {{$invoice['ip_line_item_params']['LIT_T8'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T8
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_T9'])) 
													    {{$invoice['ip_line_item_params']['LIT_T9'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_T9
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_VAT_AMOUNT'])) 
													    {{$invoice['ip_line_item_params']['LIT_VAT_AMOUNT'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_VAT_AMOUNT
					  								@endif
												</th>
												<th>
													@if(isset($invoice['ip_line_item_params']['LIT_VAT_PER'])) 
													    {{$invoice['ip_line_item_params']['LIT_VAT_PER'][0]['LIP_FIELD_LABEL']}}
													@else
														LIT_VAT_PER
					  								@endif
												</th>


												
											</tr>
										</thead>
										<tbody>
											@foreach($invoice['ip_line_items'] as $IP_LITEM)
												<tr>
													<th scope="row">{{$IP_LITEM['LIT_DOC_ID']}}</th>					
													<td>{{$IP_LITEM['LIT_ADD_KEY_CODE']}}</td>
													<td>{{$IP_LITEM['LIT_APRICE_GROSS']}}</td>
													<td>{{$IP_LITEM['LIT_APRICE_NET']}}</td>
													<td>{{$IP_LITEM['LIT_CALC_ITEM_TOTAL']}}</td>
													<td>{{$IP_LITEM['LIT_D1']}}</td>
													<td>{{$IP_LITEM['LIT_D10']}}</td>
													<td>{{$IP_LITEM['LIT_D2']}}</td>
													<td>{{$IP_LITEM['LIT_D3']}}</td>
													<td>{{$IP_LITEM['LIT_D4']}}</td>
													<td>{{$IP_LITEM['LIT_D5']}}</td>
													<td>{{$IP_LITEM['LIT_D6']}}</td>
													<td>{{$IP_LITEM['LIT_D7']}}</td>
													<td>{{$IP_LITEM['LIT_D8']}}</td>
													<td>{{$IP_LITEM['LIT_D9']}}</td>
													<td>{{$IP_LITEM['LIT_DISCOUNT_AMOUNT']}}</td>
													<td>{{$IP_LITEM['LIT_DISCOUNT_PER']}}</td>
													<td>{{$IP_LITEM['LIT_GROSS_SUM']}}</td>
													<td>{{$IP_LITEM['LIT_INFO_ITEM']}}</td>
													<td>{{$IP_LITEM['LIT_ITEM_DESCRIPTION']}}</td>
													<td>{{$IP_LITEM['LIT_MATCH_STATUS_INDEX']}}</td>
													<td>{{$IP_LITEM['LIT_N1']}}</td>
													<td>{{$IP_LITEM['LIT_N10']}}</td>
													<td>{{$IP_LITEM['LIT_N2']}}</td>
													<td>{{$IP_LITEM['LIT_N3']}}</td>
													<td>{{$IP_LITEM['LIT_N4']}}</td>
													<td>{{$IP_LITEM['LIT_N5']}}</td>
													<td>{{$IP_LITEM['LIT_N6']}}</td>
													<td>{{$IP_LITEM['LIT_N7']}}</td>
													<td>{{$IP_LITEM['LIT_N8']}}</td>
													<td>{{$IP_LITEM['LIT_N9']}}</td>
													<td>{{$IP_LITEM['LIT_NET_SUM']}}</td>
													<td>{{$IP_LITEM['LIT_ORDER_NUMBER']}}</td>
													<td>{{$IP_LITEM['LIT_ORDER_ROW_NUMBER']}}</td>
													<td>{{$IP_LITEM['LIT_PRODUCT_CODE']}}</td>
													<td>{{$IP_LITEM['LIT_QUANTITY']}}</td>
													<td>{{$IP_LITEM['LIT_QUANTITY_UNIT']}}</td>
													<td>{{$IP_LITEM['LIT_ROWID']}}</td>
													<td>{{$IP_LITEM['LIT_STAMP_TIME']}}</td>
													<td>{{$IP_LITEM['LIT_T1']}}</td>
													<td>{{$IP_LITEM['LIT_T10']}}</td>
													<td>{{$IP_LITEM['LIT_T11']}}</td>
													<td>{{$IP_LITEM['LIT_T12']}}</td>
													<td>{{$IP_LITEM['LIT_T13']}}</td>
													<td>{{$IP_LITEM['LIT_T14']}}</td>
													<td>{{$IP_LITEM['LIT_T15']}}</td>
													<td>{{$IP_LITEM['LIT_T16']}}</td>
													<td>{{$IP_LITEM['LIT_T17']}}</td>
													<td>{{$IP_LITEM['LIT_T18']}}</td>
													<td>{{$IP_LITEM['LIT_T19']}}</td>
													<td>{{$IP_LITEM['LIT_T2']}}</td>
													<td>{{$IP_LITEM['LIT_T20']}}</td>
													<td>{{$IP_LITEM['LIT_T21']}}</td>
													<td>{{$IP_LITEM['LIT_T22']}}</td>
													<td>{{$IP_LITEM['LIT_T23']}}</td>
													<td>{{$IP_LITEM['LIT_T24']}}</td>
													<td>{{$IP_LITEM['LIT_T25']}}</td>
													<td>{{$IP_LITEM['LIT_T26']}}</td>
													<td>{{$IP_LITEM['LIT_T27']}}</td>
													<td>{{$IP_LITEM['LIT_T28']}}</td>
													<td>{{$IP_LITEM['LIT_T29']}}</td>
													<td>{{$IP_LITEM['LIT_T3']}}</td>
													<td>{{$IP_LITEM['LIT_T30']}}</td>
													<td>{{$IP_LITEM['LIT_T31']}}</td>
													<td>{{$IP_LITEM['LIT_T32']}}</td>
													<td>{{$IP_LITEM['LIT_T33']}}</td>
													<td>{{$IP_LITEM['LIT_T34']}}</td>
													<td>{{$IP_LITEM['LIT_T35']}}</td>
													<td>{{$IP_LITEM['LIT_T36']}}</td>
													<td>{{$IP_LITEM['LIT_T37']}}</td>
													<td>{{$IP_LITEM['LIT_T38']}}</td>
													<td>{{$IP_LITEM['LIT_T39']}}</td>
													<td>{{$IP_LITEM['LIT_T4']}}</td>
													<td>{{$IP_LITEM['LIT_T40']}}</td>
													<td>{{$IP_LITEM['LIT_T41']}}</td>
													<td>{{$IP_LITEM['LIT_T42']}}</td>
													<td>{{$IP_LITEM['LIT_T43']}}</td>
													<td>{{$IP_LITEM['LIT_T44']}}</td>
													<td>{{$IP_LITEM['LIT_T45']}}</td>
													<td>{{$IP_LITEM['LIT_T46']}}</td>
													<td>{{$IP_LITEM['LIT_T47']}}</td>
													<td>{{$IP_LITEM['LIT_T48']}}</td>
													<td>{{$IP_LITEM['LIT_T49']}}</td>
													<td>{{$IP_LITEM['LIT_T5']}}</td>
													<td>{{$IP_LITEM['LIT_T50']}}</td>
													<td>{{$IP_LITEM['LIT_T6']}}</td>
													<td>{{$IP_LITEM['LIT_T7']}}</td>
													<td>{{$IP_LITEM['LIT_T8']}}</td>
													<td>{{$IP_LITEM['LIT_T9']}}</td>
													<td>{{$IP_LITEM['LIT_VAT_AMOUNT']}}</td>
													<td>{{$IP_LITEM['LIT_VAT_PER']}}</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div><!-- bd -->
							</div><!-- bd -->
						</div><!-- bd -->
					</div>
				</div>
				<div class="tab-pane" id="historiques">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th>{{__('Description')}}</th>
												<th>{{__('Commentaire')}}</th>
												<th>{{__('Date')}}</th>
												<th>{{__('Utilisateur')}}</th>
											</tr>
										</thead>
										<tbody>
											@foreach($invoice['action_logs'] as $action_log)
												<tr>
													<th scope="row">
														{{$action_log['action_log_name']['log_description']}}
													</th>
													<td>
														{{$action_log['log_comment']}}
													</td>
													<td>
														{{$action_log['stamp_date']}}
													</td>
													<td>
														{{$action_log['stamp_uid']}}
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</div>
</div>