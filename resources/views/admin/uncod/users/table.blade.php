<div class="col-xl-12">
	<div class="card">
		<div class="card-header pb-0">
			<div class="d-flex justify-content-between">
				<h4 class="card-title mg-b-0">Comptes</h4>
				<i class="mdi mdi-dots-horizontal text-gray"></i>
			</div>

		</div>
		<div class="card-body">
			<div class="table-responsive">

                <div class="row">
                <div class="col-sm-12">
                 <table class="table text-md-nowrap dataTable no-footer" id="example1" role="grid" aria-describedby="example1_info">
					<thead>
						<tr role="row"><th class="wd-15p border-bottom-0 sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First name: activate to sort column descending" style="width: 105px;">N° compte</th><th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending" style="width: 105px;">Clients</th><th class="wd-20p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 153px;">Licence</th><th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 104px;">Date création</th><th class="wd-10p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 56px;">Statut</th><th class="wd-25p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending" style="width: 201px;">Actions</th></tr>
					</thead>
					<tbody>


						<tr role="row" class="odd">
							<td class="sorting_1">0001</td>
							<td>Antoine Dione</td>
							<td>Prenium</td>
							<td>07 Janv 2021</td>
							<td>actif</td>
							<td>
								<a title="{{__('Détails de l\'utilisateur')}}" href="{{route('users.show',['user_id'=>1,'locale'=>app()->getLocale()])}}" class="btn btn-sm btn-primary">
									<i class="las la-search"></i>
								</a>
								<a title="{{__('Modifier l\'utilisateur')}}" href="{{route('users.edit',['user_id'=>1,'locale'=>app()->getLocale()])}}" class="btn btn-sm btn-info">
									<i class="las la-pen"></i>
								</a>
								<a title="{{__('Supprimer l\'utilisateur')}}" href="{{route('users.delete',['user_id'=>1,'locale'=>app()->getLocale()])}}" class="btn btn-sm btn-danger">
									<i class="las la-trash"></i>
								</a>
							</td>
						</tr>


					</tbody>
                </table></div></div>
			</div>
		</div>
	</div>
</div>
