<div class="col-xl-12">
	<div class="card">
		<div class="card-header pb-0">
			<div class="d-flex justify-content-between">
				<h4 class="card-title mg-b-0">{{__('Projets')}}</h4>
				<i class="mdi mdi-dots-horizontal text-gray"></i>
			</div>

		</div>
		<div class="card-body">
			<div class="table-responsive">
				<div class="row">
					<div class="col-sm-12">
						<table class="table text-md-nowrap dataTable no-footer" id="example1" role="grid" aria-describedby="example1_info">
							<thead>
								<tr role="row">
									<th class="wd-15p border-bottom-0 sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First name: activate to sort column descending" style="width: 105px;">
										{{__('Désignation')}}
									</th>
									<th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending" style="width: 105px;">

										{{__('N° compte')}}
									</th>
									<th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 104px;">
										{{__('Date création')}}
									</th>
									<th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 104px;">
										{{__('Crée par')}}
									</th>

									<th class="wd-25p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending" style="width: 201px;">
										{{__('Actions')}}
									</th>
								</tr>
							</thead>
							<tbody>
								@foreach($projetFormated as $item)
									<tr role="row" class="odd">
	                                    <td class="sorting_1">
	                                     {{$item['nom']}}
	                                    </td>
	                                    <td>
	                                        {{$item['account']['code']}}
	                                    </td>
		                                <td>
		                                	{{$item['created_at']}}
		                                </td>
	                                    <td>
	                                    	{{$item['created_by']['prenom']}} {{$item['created_by']['nom']}}
	                                    </td>
										<td class="center">
											<a title="{{__('Détails du projet')}}" href="{{route('projets.show',['projet_id'=>$item['id'] ,'locale'=>app()->getLocale()])}}" class="btn btn-sm btn-primary">

												<i class="las la-search"></i>
											</a>
											<a title="{{__('Modifier le projet')}}" href="{{route('projets.edit',['projet_id'=>$item['id'],'locale'=>app()->getLocale()])}}" class="btn btn-sm btn-info">
												<i class="las la-pen"></i>
											</a>

											<a id="{{$item['id']}}" title="{{__('Supprimer le projet')}}" href="#" class="btn btn-sm btn-danger projet-delete">
												<i class="las la-trash"></i>
											</a>

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
