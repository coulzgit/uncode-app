
<div class="col-xl-12">
    <div class="table-responsive">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

            <div class="row">
                <div class="col-sm-12">
                    <table class="table text-md-nowrap dataTable no-footer" id="example1" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First name: activate to sort column descending" style="width: 105px;"><?php echo e(__('ID')); ?></th>
                                <th class="wd-20p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 153px;"><?php echo e(__('Nom du role')); ?></th>
                                <th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 104px;"><?php echo e(__('Action')); ?></th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                            <tr role="row" class="odd">
                                <td class="sorting_1"><?php echo e(++$i); ?></td>
                                <td ><?php echo e($role->name); ?></td>

                                <td class="center">
                                    <a title="<?php echo e(__('Détails du compte')); ?>" href="<?php echo e(route('roles.show',['locale'=>app()->getLocale(),$role->id])); ?>" class="btn btn-sm btn-primary">

                                        <i class="las la-search"></i>
                                    </a>
                                    <a title="<?php echo e(__('Modifier le compte')); ?>" href="<?php echo e(route('roles.edit',['locale'=>app()->getLocale(),$role->id])); ?>" class="btn btn-sm btn-info">
                                        <i class="las la-pen"></i>
                                    </a>

                                    <a title="<?php echo e(__('Supprimer le compte')); ?>" href="<?php echo e(route('roles.delete',['locale'=>app()->getLocale(),$role->id])); ?>" class="btn btn-sm btn-danger">
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
<?php /**PATH /var/www/html/uncode2/resources/views/admin/params/roles/table.blade.php ENDPATH**/ ?>