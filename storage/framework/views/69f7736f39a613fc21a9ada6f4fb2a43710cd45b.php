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
				<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"><label><select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table text-md-nowrap dataTable no-footer" id="example1" role="grid" aria-describedby="example1_info">
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
								<a title="<?php echo e(__('Détails du compte')); ?>" href="<?php echo e(route('account.details',['account_id'=>1,'locale'=>app()->getLocale()])); ?>" class="btn btn-sm btn-primary">
									<i class="las la-search"></i>
								</a>
								<a title="<?php echo e(__('Modifier le compte')); ?>" href="<?php echo e(route('account.edit',['account_id'=>1,'locale'=>app()->getLocale()])); ?>" class="btn btn-sm btn-info">
									<i class="las la-pen"></i>
								</a>
								<a title="<?php echo e(__('Configurer le compte')); ?>" href="<?php echo e(route('account.config1',['account_id'=>1,'locale'=>app()->getLocale()])); ?>" class="btn btn-sm btn-success">
									<i class="las la-tools"></i>
								</a>
								<a title="<?php echo e(__('Ajouter un utilisateur')); ?>" href="<?php echo e(route('account.adduser',['account_id'=>1,'locale'=>app()->getLocale()])); ?>" class="btn btn-sm btn-secondary">
									<i class="las la-user-plus"></i>
								</a>
								<a title="<?php echo e(__('Liste utilisateur')); ?>" href="<?php echo e(route('account.listuser',['account_id'=>1,'locale'=>app()->getLocale()])); ?>" class="btn btn-sm btn-warning">
									<i class="las la-users"></i>
								</a>
								<a title="<?php echo e(__('Supprimer le compte')); ?>" href="#" class="btn btn-sm btn-danger">
									<i class="las la-trash"></i>
								</a>

							</td>
						</tr>

						<tr role="row" class="odd">
							<td class="sorting_1">0001</td>
							<td>Antoine Dione</td>
							<td>Prenium</td>
							<td>07 Janv 2021</td>
							<td>actif</td>
							<td>
								<a title="<?php echo e(__('Détails du compte')); ?>" href="<?php echo e(route('account.details',['account_id'=>1,'locale'=>app()->getLocale()])); ?>" class="btn btn-sm btn-primary">
									<i class="las la-search"></i>
								</a>
								<a title="<?php echo e(__('Modifier le compte')); ?>" href="<?php echo e(route('account.edit',['account_id'=>1,'locale'=>app()->getLocale()])); ?>" class="btn btn-sm btn-info">
									<i class="las la-pen"></i>
								</a>
								<a title="<?php echo e(__('Configurer le compte')); ?>" href="<?php echo e(route('account.config1',['account_id'=>1,'locale'=>app()->getLocale()])); ?>" class="btn btn-sm btn-success">
									<i class="las la-tools"></i>
								</a>
								<a title="<?php echo e(__('Ajouter un utilisateur')); ?>" href="<?php echo e(route('account.config1',['account_id'=>1,'locale'=>app()->getLocale()])); ?>" class="btn btn-sm btn-secondary">
									<i class="las la-user-plus"></i>
								</a>
								<a title="<?php echo e(__('Liste utilisateur')); ?>" href="<?php echo e(route('account.config1',['account_id'=>1,'locale'=>app()->getLocale()])); ?>" class="btn btn-sm btn-warning">
									<i class="las la-users"></i>
								</a>
								<a title="<?php echo e(__('Supprimer le compte')); ?>" href="#" class="btn btn-sm btn-danger">
									<i class="las la-trash"></i>
								</a>
							</td>
						</tr>


					</tbody>
				</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 21 to 30 of 50 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
			</div>
		</div>
	</div>
</div>
<?php /**PATH /var/www/html/uncode1/resources/views/admin/uncod/comptes_clients/liste_users/table.blade.php ENDPATH**/ ?>