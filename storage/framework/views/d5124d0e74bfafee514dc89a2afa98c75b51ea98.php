<div class="col-xl-12">
	<div class="table-responsive">
		<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

			<div class="row">
				<div class="col-sm-12">
					<table class="table text-md-nowrap dataTable no-footer" id="example1" role="grid" aria-describedby="example1_info">
						<thead>
                            <tr role="row">
                                <th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First name: activate to sort column descending" style="width: 105px;"><?php echo e(__('Prénom & nom')); ?></th>
                                <th class="wd-20p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 153px;"><?php echo e(__('Email')); ?></th>
                                <th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 104px;"><?php echo e(__('Role(s)')); ?></th>
                                <th class="wd-10p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 56px;"><?php echo e(__('Propriétaire')); ?></th>

							</tr>
						</thead>
						<tbody>

                            <?php $__currentLoopData = $account['users']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


							<tr role="row" class="odd">
                                <td class="sorting_1">
                                    <?php if($user['nom']==null): ?>
                                    <span><?php echo e(__('...')); ?></span>
                                    <?php else: ?>
                                    <span><?php echo e($user['nom']); ?></span>
                                    <?php endif; ?>
                                </td>
								<td><?php echo e($user['email']); ?></td>

                                <td>....</td>
								<td>

                                    <?php if($user['account_owner']==0): ?>
                                    <span><?php echo e(__('Non')); ?></span>
                                    <?php else: ?>
                                    <span><?php echo e(__('Oui')); ?></span>
                                    <?php endif; ?>

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
<?php /**PATH /var/www/html/uncode2/resources/views/admin/uncod/comptes_clients/liste_comptes/details/users_list.blade.php ENDPATH**/ ?>