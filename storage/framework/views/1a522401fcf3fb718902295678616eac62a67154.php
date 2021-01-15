<div class="col-xl-12">
	<div class="card">
		<div class="card-header pb-0">
			<div class="d-flex justify-content-between">
				<h4 class="card-title mg-b-0"><?php echo e(__('Comptes')); ?></h4>
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
										<?php echo e(__('N° compte')); ?>

									</th>
									<th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending" style="width: 105px;">
										<?php echo e(__('Clients')); ?>

									</th>
									<th class="wd-20p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 153px;">
										<?php echo e(__('Licence')); ?>

									</th>
									<th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 104px;">
										<?php echo e(__('Date création')); ?>

									</th>
									<th class="wd-10p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 56px;">
										<?php echo e(__('Statut')); ?>

									</th>
									<th class="wd-25p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending" style="width: 201px;">
										<?php echo e(__('Actions')); ?>

									</th>
								</tr>
							</thead>
							<tbody>

                                <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr role="row" class="odd">


	                                        <td class="sorting_1">
	                                         <?php echo e($item['account']->code); ?>

	                                        </td>
	                                        <td>
	                                            <?php if($item['proprietaire']==null): ?>
	                                            <span>......</span>
	                                            <?php else: ?>
	                                            <?php echo e($item['proprietaire']->prenom); ?>

	                                            <?php endif; ?>
	                                        </td>

	                                            
	                                        <td><?php echo e($item['licence']->nom); ?></td>
	                                        <td><?php echo e($item['account']->created_at); ?></td>
	                                        <td class="sorting_1">
	                                        <?php if($item['account']->statut==0): ?>
	                                         <span class="label label-warning"><?php echo e(__('désactivé')); ?>

	                                        </span>
	                                            <?php else: ?>
	                                                <span class="label label-default"><?php echo e(__('actif')); ?></span>
	                                        <?php endif; ?>
	                                        </td>
										<td class="center">
											<a title="<?php echo e(__('Détails du compte')); ?>" href="<?php echo e(route('accounts.show',['account_id'=>$item['account']->id ,'locale'=>app()->getLocale()])); ?>" class="btn btn-sm btn-primary">

												<i class="las la-search"></i>
											</a>
											<a title="<?php echo e(__('Modifier le compte')); ?>" href="<?php echo e(route('accounts.edit',['account_id'=>$item['account']->id,'locale'=>app()->getLocale()])); ?>" class="btn btn-sm btn-info">
												<i class="las la-pen"></i>
											</a>
											<a title="<?php echo e(__('Configurer le compte')); ?>" href="<?php echo e(route('accounts.config',['account_id'=>$item['account']->id,'locale'=>app()->getLocale()])); ?>" class="btn btn-sm btn-success">
												<i class="las la-tools"></i>
											</a>
											<a title="<?php echo e(__('Ajouter un utilisateur')); ?>" href="#" class="btn btn-sm btn-secondary">
												<i class="las la-user-plus"></i>
											</a>
											<a title="<?php echo e(__('Liste utilisateur')); ?>" href="#" class="btn btn-sm btn-warning">
												<i class="las la-users"></i>
											</a>	
											<a title="<?php echo e(__('Supprimer le compte')); ?>" href="#" class="btn btn-sm btn-danger">
												<i class="las la-trash"></i>
											</a>
											
										</td>
									</tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
                        </table>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
<?php /**PATH /Users/mac/Sites/projets/web/uncode-app/resources/views/admin/uncod/comptes_clients/liste_comptes/table.blade.php ENDPATH**/ ?>