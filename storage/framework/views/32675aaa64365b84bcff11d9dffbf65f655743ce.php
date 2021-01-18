<div class="col-xl-12">
	<div class="table-responsive">
		<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

			<div class="row">
				<div class="col-sm-12">
					<table class="table text-md-nowrap dataTable no-footer" id="example1" role="grid" aria-describedby="example1_info">
						<thead>
							<tr role="row">
                                <th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First name: activate to sort column descending" style="width: 105px;"><?php echo e(__('Nom')); ?></th>

                                <th class="wd-20p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 153px;"><?php echo e(__('Date de création')); ?></th>
                                <th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 104px;"><?php echo e(__('Crée par')); ?></th>
							</tr>
						</thead>
						<tbody>
                            <?php $__currentLoopData = $account['projets']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                            <tr role="row" class="odd">
                                <td class="sorting_1"><?php echo e($projet['nom']); ?></td>
                                <td ><?php echo e($projet['created_at']); ?></td>

                                <td>
                                    <?php if($projet['created_by']==null): ?>
                                    <span><?php echo e(__('...')); ?></span>
                                    <?php else: ?>
                                    <span><?php echo e($projet['created_by']['user_name']); ?></span>
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
<?php /**PATH /var/www/html/uncode2/resources/views/admin/uncod/comptes_clients/liste_comptes/details/projets_list.blade.php ENDPATH**/ ?>