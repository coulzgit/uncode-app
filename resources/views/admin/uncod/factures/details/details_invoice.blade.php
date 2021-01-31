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
							<h5 class="tx-13">invoice_sum</h5>
							<h2 class="mb-0 tx-22 mb-1 mt-1">
								{{$invoice['doc']['invoice_sum']}}
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
						<div class="counter-icon bg-primary-transparent">
							<i class="icon-layers text-primary"></i>
						</div>
						<div class="mr-auto">
							<h5 class="tx-13">net_sum</h5>
							<h2 class="mb-0 tx-22 mb-1 mt-1">
								{{$invoice['doc']['net_sum']}}
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
						<div class="counter-icon bg-primary-transparent">
							<i class="icon-layers text-primary"></i>
						</div>
						<div class="mr-auto">
							<h5 class="tx-13">vat_sum</h5>
							<h2 class="mb-0 tx-22 mb-1 mt-1">
								{{$invoice['doc']['vat_sum']}}
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
					<li style="display: none" class="">
						<a href="#pieces_jointes" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-cog tx-16 mr-1"></i></span> <span class="hidden-xs">{{__('Pièces jointes')}}</span> </a>
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
											doc_id:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['doc_id']}}
											</span>
										</h6>
									</div>


									<div class="row">
										<h6 class="price">		
											scan_date:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['scan_date']}}
											</span>
										</h6>
									</div>


									<div class="row">
										<h6 class="price">		
											comp_no:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['comp_no']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											doc_name:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['doc_name']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											doc_pages:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['doc_pages']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											flow_fixed:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['flow_fixed']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											supplier_num:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['supplier_num']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											invoice_num:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_num']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											voucher_num:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['voucher_num']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											invoice_date:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_date']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											invoice_last_date:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_last_date']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">		
											invoice_sum:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_sum']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											stamp_date:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['stamp_date']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">		
											stamp_uid:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['stamp_uid']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											status_index:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['status_index']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											order_num:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['order_num']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											last_acceptor:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['last_acceptor']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">		
											exchange_rate:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['exchange_rate']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											invoice_currency:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_currency']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											invoice_sum_calc:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_sum_calc']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											cash_date:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['cash_date']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">		
											accounting_period:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['accounting_period']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											supplier_name:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['supplier_name']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											attrib_t1:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_t1']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											attrib_t2:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_t2']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">		
											attrib_t3:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_t3']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											attrib_t4:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_t4']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											attrib_t5:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_t5']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											attrib_t6:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_t6']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											attrib_t7:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_t7']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">		
											attrib_n:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_n']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											attrib_n2:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_n2']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											attrib_n3:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_n3']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											attrib_n4:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_n4']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											attrib_d:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_d']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">		
											attrib_d2:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_d2']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											attrib_d3:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_d3']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											attrib_d4:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['attrib_d4']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											bff_resource:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['bff_resource']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											vat_sum:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['vat_sum']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">		
											invoice_serial:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_serial']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											invoice_type:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_type']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											prebooked:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['prebooked']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											secondary_status:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['secondary_status']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											entry_date:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['entry_date']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">		
											voucher_group:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['voucher_group']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											voucher_period:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['voucher_period']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											user_serial:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['user_serial']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											net_sum_calc:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['net_sum_calc']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											net_sum:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['net_sum']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">		
											with_comments:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['with_comments']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											external_status:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['external_status']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											voucher_year:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['voucher_year']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											serial_year:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['serial_year']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											gl_date:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['gl_date']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">		
											credit_memo:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['credit_memo']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											vat_sum_calc:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['vat_sum_calc']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											hold_owner:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['hold_owner']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											lock_owner:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['lock_owner']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											lock_date:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['lock_date']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">		
											lock_index:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['lock_index']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											contract_num:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['contract_num']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											oneaction:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['oneaction']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											transfer_check:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['transfer_check']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											autoflow_status_index:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['autoflow_status_index']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">		
											match_status_index:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['match_status_index']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											custom_action_status:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['custom_action_status']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											preprocessing_timestamp:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['preprocessing_timestamp']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											supplier_rep_code:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['supplier_rep_code']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											supplier_rep_name:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['supplier_rep_name']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">		
											payment_date:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['payment_date']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											delivery_note_number:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['delivery_note_number']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											reference_person:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['reference_person']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											CM_REQUEST:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['CM_REQUEST']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											invoice_origin:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_origin']}}
											</span>
										</h6>
									</div>

									<div class="row">
										<h6 class="price">		
											match_wait_until:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['match_wait_until']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											invoice_category:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['invoice_category']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											parent_invoice_id:
											<span style="color: #adadad" class="h6 ml-2">
												{{$invoice['doc']['parent_invoice_id']}}
											</span>
										</h6>
									</div>
									<div class="row">
										<h6 class="price">		
											MC_MATCH_STATUS_INDEX:
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
					@foreach($invoice['acc_datas'] as $acc_data)
					
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['accepted'])) 
								    {{$invoice['acc_data_names']['accepted'][0]['data_name']}}:
								@else
									accepted:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['accepted']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['accepted_date'])) 
								    {{$invoice['acc_data_names']['accepted_date'][0]['data_name']}}:
								@else
									accepted_date:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['accepted_date']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['acceptor_id'])) 
								    {{$invoice['acc_data_names']['acceptor_id'][0]['data_name']}}:
								@else
									acceptor_id:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['acceptor_id']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['brutto'])) 
								    {{$invoice['acc_data_names']['brutto'][0]['data_name']}}:
								@else
									brutto:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['brutto']}}
								</span>
							</h6>
						</div>
						<!-- brutto -->

						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['brutto_calc'])) 
								    {{$invoice['acc_data_names']['brutto_calc'][0]['data_name']}}:
								@else
									brutto_calc:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['brutto_calc']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['doc_id'])) 
								    {{$invoice['acc_data_names']['doc_id'][0]['data_name']}}:
								@else
									doc_id:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['doc_id']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['layer'])) 
								    {{$invoice['acc_data_names']['layer'][0]['data_name']}}:
								@else
									layer:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['layer']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n1'])) 
								    {{$invoice['acc_data_names']['n1'][0]['data_name']}}:
								@else
									n1:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n1']}}
								</span>
							</h6>
						</div>

						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n10'])) 
								    {{$invoice['acc_data_names']['n10'][0]['data_name']}}:
								@else
									n10:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n10']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n11'])) 
								    {{$invoice['acc_data_names']['n11'][0]['data_name']}}:
								@else
									n11:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n11']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n12'])) 
								    {{$invoice['acc_data_names']['n12'][0]['data_name']}}:
								@else
									n12:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n12']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n13'])) 
								    {{$invoice['acc_data_names']['n13'][0]['data_name']}}:
								@else
									n13:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n13']}}
								</span>
							</h6>
						</div>


						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n14'])) 
								    {{$invoice['acc_data_names']['n14'][0]['data_name']}}:
								@else
									n14:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n14']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n15'])) 
								    {{$invoice['acc_data_names']['n15'][0]['data_name']}}:
								@else
									n15:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n15']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n16'])) 
								    {{$invoice['acc_data_names']['n16'][0]['data_name']}}:
								@else
									n16:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n16']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n17'])) 
								    {{$invoice['acc_data_names']['n17'][0]['data_name']}}:
								@else
									n17:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n17']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n18'])) 
								    {{$invoice['acc_data_names']['n18'][0]['data_name']}}:
								@else
									n18:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n18']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n19'])) 
								    {{$invoice['acc_data_names']['n19'][0]['data_name']}}:
								@else
									n19:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n19']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n2'])) 
								    {{$invoice['acc_data_names']['n2'][0]['data_name']}}:
								@else
									n2:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n2']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n20'])) 
								    {{$invoice['acc_data_names']['n20'][0]['data_name']}}:
								@else
									n20:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n20']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n3'])) 
								    {{$invoice['acc_data_names']['n3'][0]['data_name']}}:
								@else
									n3:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n3']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n4'])) 
								    {{$invoice['acc_data_names']['n4'][0]['data_name']}}:
								@else
									n4:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n4']}}
								</span>
							</h6>
						</div>


						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n5'])) 
								    {{$invoice['acc_data_names']['n5'][0]['data_name']}}:
								@else
									n5:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n5']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n6'])) 
								    {{$invoice['acc_data_names']['n6'][0]['data_name']}}:
								@else
									n6:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n6']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n7'])) 
								    {{$invoice['acc_data_names']['n7'][0]['data_name']}}:
								@else
									n7:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n7']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n8'])) 
								    {{$invoice['acc_data_names']['n8'][0]['data_name']}}:
								@else
									n8:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n8']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['n9'])) 
								    {{$invoice['acc_data_names']['n9'][0]['data_name']}}:
								@else
									n9:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['n9']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['net_calc'])) 
								    {{$invoice['acc_data_names']['net_calc'][0]['data_name']}}:
								@else
									net_calc:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['net_calc']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['net_sum'])) 
								    {{$invoice['acc_data_names']['net_sum'][0]['data_name']}}:
								@else
									net_sum:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['net_sum']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['reviewed'])) 
								    {{$invoice['acc_data_names']['reviewed'][0]['data_name']}}:
								@else
									reviewed:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['reviewed']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['reviewed_date'])) 
								    {{$invoice['acc_data_names']['reviewed_date'][0]['data_name']}}:
								@else
									reviewed_date:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['reviewed_date']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['reviewer_id'])) 
								    {{$invoice['acc_data_names']['reviewer_id'][0]['data_name']}}:
								@else
									reviewer_id:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['reviewer_id']}}
								</span>
							</h6>
						</div>


						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['sort_order'])) 
								    {{$invoice['acc_data_names']['sort_order'][0]['data_name']}}:
								@else
									sort_order:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['sort_order']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['stamp_date'])) 
								    {{$invoice['acc_data_names']['stamp_date'][0]['data_name']}}:
								@else
									stamp_date:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['stamp_date']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['stamp_uid'])) 
								    {{$invoice['acc_data_names']['stamp_uid'][0]['data_name']}}:
								@else
									stamp_uid:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['stamp_uid']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t1'])) 
								    {{$invoice['acc_data_names']['t1'][0]['data_name']}}:
								@else
									t1:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t1']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t10'])) 
								    {{$invoice['acc_data_names']['t10'][0]['data_name']}}:
								@else
									t10:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t10']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t11'])) 
								    {{$invoice['acc_data_names']['t11'][0]['data_name']}}:
								@else
									t11:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t11']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t12'])) 
								    {{$invoice['acc_data_names']['t12'][0]['data_name']}}:
								@else
									t12:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t12']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t13'])) 
								    {{$invoice['acc_data_names']['t13'][0]['data_name']}}:
								@else
									t13:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t13']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t14'])) 
								    {{$invoice['acc_data_names']['t14'][0]['data_name']}}:
								@else
									t14:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t14']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t15'])) 
								    {{$invoice['acc_data_names']['t15'][0]['data_name']}}:
								@else
									t15:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t15']}}
								</span>
							</h6>
						</div>

						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t16'])) 
								    {{$invoice['acc_data_names']['t16'][0]['data_name']}}:
								@else
									t16:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t16']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t17'])) 
								    {{$invoice['acc_data_names']['t17'][0]['data_name']}}:
								@else
									t17:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t17']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t18'])) 
								    {{$invoice['acc_data_names']['t18'][0]['data_name']}}:
								@else
									t18:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t18']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t19'])) 
								    {{$invoice['acc_data_names']['t19'][0]['data_name']}}:
								@else
									t19:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t19']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t2'])) 
								    {{$invoice['acc_data_names']['t2'][0]['data_name']}}:
								@else
									t2:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t2']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t20'])) 
								    {{$invoice['acc_data_names']['t20'][0]['data_name']}}:
								@else
									t20:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t20']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t21'])) 
								    {{$invoice['acc_data_names']['t21'][0]['data_name']}}:
								@else
									t21:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t21']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t22'])) 
								    {{$invoice['acc_data_names']['t22'][0]['data_name']}}:
								@else
									t22:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t22']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t23'])) 
								    {{$invoice['acc_data_names']['t23'][0]['data_name']}}:
								@else
									t23:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t23']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t24'])) 
								    {{$invoice['acc_data_names']['t24'][0]['data_name']}}:
								@else
									t24:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t24']}}
								</span>
							</h6>
						</div>

						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t25'])) 
								    {{$invoice['acc_data_names']['t25'][0]['data_name']}}:
								@else
									t25:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t25']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t26'])) 
								    {{$invoice['acc_data_names']['t26'][0]['data_name']}}:
								@else
									t26:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t26']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t27'])) 
								    {{$invoice['acc_data_names']['t27'][0]['data_name']}}:
								@else
									t27:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t27']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t28'])) 
								    {{$invoice['acc_data_names']['t28'][0]['data_name']}}:
								@else
									t28:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t28']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t29'])) 
								    {{$invoice['acc_data_names']['t29'][0]['data_name']}}:
								@else
									t29:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t29']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t3'])) 
								    {{$invoice['acc_data_names']['t3'][0]['data_name']}}:
								@else
									t3:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t3']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t30'])) 
								    {{$invoice['acc_data_names']['t30'][0]['data_name']}}:
								@else
									t30:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t30']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t31'])) 
								    {{$invoice['acc_data_names']['t31'][0]['data_name']}}:
								@else
									t31:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t31']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t32'])) 
								    {{$invoice['acc_data_names']['t32'][0]['data_name']}}:
								@else
									t32:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t32']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t33'])) 
								    {{$invoice['acc_data_names']['t33'][0]['data_name']}}:
								@else
									t33:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t33']}}
								</span>
							</h6>
						</div>

						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t34'])) 
								    {{$invoice['acc_data_names']['t34'][0]['data_name']}}:
								@else
									t34:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t34']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t35'])) 
								    {{$invoice['acc_data_names']['t35'][0]['data_name']}}:
								@else
									t35:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t35']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t36'])) 
								    {{$invoice['acc_data_names']['t36'][0]['data_name']}}:
								@else
									t36:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t36']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t37'])) 
								    {{$invoice['acc_data_names']['t37'][0]['data_name']}}:
								@else
									t37:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t37']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t38'])) 
								    {{$invoice['acc_data_names']['t38'][0]['data_name']}}:
								@else
									t38:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t38']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t39'])) 
								    {{$invoice['acc_data_names']['t39'][0]['data_name']}}:
								@else
									t39:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t39']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t4'])) 
								    {{$invoice['acc_data_names']['t4'][0]['data_name']}}:
								@else
									t4:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t4']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t40'])) 
								    {{$invoice['acc_data_names']['t40'][0]['data_name']}}:
								@else
									t40:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t40']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t41'])) 
								    {{$invoice['acc_data_names']['t41'][0]['data_name']}}:
								@else
									t41:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t41']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t42'])) 
								    {{$invoice['acc_data_names']['t42'][0]['data_name']}}:
								@else
									t42:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t42']}}
								</span>
							</h6>
						</div>

						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t43'])) 
								    {{$invoice['acc_data_names']['t43'][0]['data_name']}}:
								@else
									t43:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t43']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t44'])) 
								    {{$invoice['acc_data_names']['t44'][0]['data_name']}}:
								@else
									t44:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t44']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t45'])) 
								    {{$invoice['acc_data_names']['t45'][0]['data_name']}}:
								@else
									t45:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t45']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t46'])) 
								    {{$invoice['acc_data_names']['t46'][0]['data_name']}}:
								@else
									t46:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t46']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t47'])) 
								    {{$invoice['acc_data_names']['t47'][0]['data_name']}}:
								@else
									t47:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t47']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t48'])) 
								    {{$invoice['acc_data_names']['t48'][0]['data_name']}}:
								@else
									t48:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t48']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t49'])) 
								    {{$invoice['acc_data_names']['t49'][0]['data_name']}}:
								@else
									t49:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t49']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t5'])) 
								    {{$invoice['acc_data_names']['t5'][0]['data_name']}}:
								@else
									t5:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t5']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t50'])) 
								    {{$invoice['acc_data_names']['t50'][0]['data_name']}}:
								@else
									t50:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t50']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t51'])) 
								    {{$invoice['acc_data_names']['t51'][0]['data_name']}}:
								@else
									t51:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t51']}}
								</span>
							</h6>
						</div>

						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t52'])) 
								    {{$invoice['acc_data_names']['t52'][0]['data_name']}}:
								@else
									t52:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t52']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t53'])) 
								    {{$invoice['acc_data_names']['t53'][0]['data_name']}}:
								@else
									t53:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t53']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t54'])) 
								    {{$invoice['acc_data_names']['t54'][0]['data_name']}}:
								@else
									t54:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t54']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t55'])) 
								    {{$invoice['acc_data_names']['t55'][0]['data_name']}}:
								@else
									t55:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t55']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t56'])) 
								    {{$invoice['acc_data_names']['t56'][0]['data_name']}}:
								@else
									t56:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t56']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t57'])) 
								    {{$invoice['acc_data_names']['t57'][0]['data_name']}}:
								@else
									t57:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t57']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t58'])) 
								    {{$invoice['acc_data_names']['t58'][0]['data_name']}}:
								@else
									t58:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t58']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t59'])) 
								    {{$invoice['acc_data_names']['t59'][0]['data_name']}}:
								@else
									t59:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t59']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t6'])) 
								    {{$invoice['acc_data_names']['t6'][0]['data_name']}}:
								@else
									t6:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t6']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t60'])) 
								    {{$invoice['acc_data_names']['t60'][0]['data_name']}}:
								@else
									t60:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t60']}}
								</span>
							</h6>
						</div>

						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t61'])) 
								    {{$invoice['acc_data_names']['t61'][0]['data_name']}}:
								@else
									t61:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t61']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t62'])) 
								    {{$invoice['acc_data_names']['t62'][0]['data_name']}}:
								@else
									t62:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t62']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t63'])) 
								    {{$invoice['acc_data_names']['t63'][0]['data_name']}}:
								@else
									t63:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t63']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t64'])) 
								    {{$invoice['acc_data_names']['t64'][0]['data_name']}}:
								@else
									t64:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t64']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t65'])) 
								    {{$invoice['acc_data_names']['t65'][0]['data_name']}}:
								@else
									t65:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t65']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t66'])) 
								    {{$invoice['acc_data_names']['t66'][0]['data_name']}}:
								@else
									t66:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t66']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t67'])) 
								    {{$invoice['acc_data_names']['t67'][0]['data_name']}}:
								@else
									t67:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t67']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t68'])) 
								    {{$invoice['acc_data_names']['t68'][0]['data_name']}}:
								@else
									t68:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t68']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t69'])) 
								    {{$invoice['acc_data_names']['t69'][0]['data_name']}}:
								@else
									t69:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t69']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t7'])) 
								    {{$invoice['acc_data_names']['t7'][0]['data_name']}}:
								@else
									t7:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t7']}}
								</span>
							</h6>
						</div>

						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t70'])) 
								    {{$invoice['acc_data_names']['t70'][0]['data_name']}}:
								@else
									t70:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t70']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t71'])) 
								    {{$invoice['acc_data_names']['t71'][0]['data_name']}}:
								@else
									t71:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t71']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t72'])) 
								    {{$invoice['acc_data_names']['t72'][0]['data_name']}}:
								@else
									t72:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t72']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t73'])) 
								    {{$invoice['acc_data_names']['t73'][0]['data_name']}}:
								@else
									t73:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t73']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t74'])) 
								    {{$invoice['acc_data_names']['t74'][0]['data_name']}}:
								@else
									t74:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t74']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t75'])) 
								    {{$invoice['acc_data_names']['t75'][0]['data_name']}}:
								@else
									t75:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t75']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t76'])) 
								    {{$invoice['acc_data_names']['t76'][0]['data_name']}}:
								@else
									t76:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t76']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t77'])) 
								    {{$invoice['acc_data_names']['t77'][0]['data_name']}}:
								@else
									t77:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t77']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t78'])) 
								    {{$invoice['acc_data_names']['t78'][0]['data_name']}}:
								@else
									t78:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t78']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t79'])) 
								    {{$invoice['acc_data_names']['t79'][0]['data_name']}}:
								@else
									t79:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t79']}}
								</span>
							</h6>
						</div>

						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t8'])) 
								    {{$invoice['acc_data_names']['t8'][0]['data_name']}}:
								@else
									t8:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t8']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t80'])) 
								    {{$invoice['acc_data_names']['t80'][0]['data_name']}}:
								@else
									t80:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t80']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t81'])) 
								    {{$invoice['acc_data_names']['t81'][0]['data_name']}}:
								@else
									t81:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t81']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t82'])) 
								    {{$invoice['acc_data_names']['t82'][0]['data_name']}}:
								@else
									t82:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t82']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t83'])) 
								    {{$invoice['acc_data_names']['t83'][0]['data_name']}}:
								@else
									t83:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t83']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t84'])) 
								    {{$invoice['acc_data_names']['t84'][0]['data_name']}}:
								@else
									t84:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t84']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t85'])) 
								    {{$invoice['acc_data_names']['t85'][0]['data_name']}}:
								@else
									t85:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t85']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['t9'])) 
								    {{$invoice['acc_data_names']['t9'][0]['data_name']}}:
								@else
									t9:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['t9']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['vat'])) 
								    {{$invoice['acc_data_names']['vat'][0]['data_name']}}:
								@else
									vat:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['vat']}}
								</span>
							</h6>
						</div>
						<div class="row">
							<h6 class="price">	
								@if(isset($invoice['acc_data_names']['vat_pros'])) 
								    {{$invoice['acc_data_names']['vat_pros'][0]['data_name']}}:
								@else
									vat_pros:
  								@endif

								<span style="color: #adadad" class="h6 ml-2">
									{{$acc_data['vat_pros']}}
								</span>
							</h6>
						</div>
						
					@endforeach
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
						<!-- <tr>
							<th scope="row">1</th>
							<td>Joan Powell</td>
							<td>Associate Developer</td>
							<td>$450,870</td>
						</tr> -->
						
					</tbody>
				</table>
			</div><!-- bd -->
		</div><!-- bd -->
	</div><!-- bd -->
</div>

				</div>
				<div class="tab-pane" id="historiques">
					historiques
				</div>
				<div style="display: none;" class="tab-pane" id="pieces_jointes">
					pieces_jointes
				</div>
			</div>
		</div>
	</div>
</div>