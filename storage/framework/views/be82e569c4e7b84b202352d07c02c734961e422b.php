<div style="display: flex;justify-content: left; margin-left: 1px; margin-bottom:10px " class="row row-sm">
    <a class="btn btn-main-primary"  href="<?php echo e(route('roles',app()->getLocale())); ?>">
        
        <?php echo e(__('Retour')); ?>

    </a>
</div>
<!-- GENERAL INFO -->

<!-- USERS -->
<div class="row row-sm">
    <div class="col-md-12 mg-md-t-0">
        <div class="card">
            <div class="card-header tx-medium bd-0 tx-white bg-primary">
                <?php echo e(__('Role Management')); ?>

            </div>
            <div class="card-body ">
                <div class="row row-sm">
                    <!-- LEFT -->
                    <div style="border: 1px solid #eee;border-radius: 5px;margin-right: 20px;padding: 20px" class="col-md-5">
                        <h6 class="price">
                            <?php echo e(__('Nom du role')); ?>

                            <span style="color: #adadad" class="h6 ml-2"><?php echo e($role->name); ?></span>
                        </h6>



                    </div>
                    <!-- RIGHT -->
                    <div style="border: 1px solid #eee;border-radius: 5px;padding: 20px"  class="col-md-6">


                        <h6 class="price">
                            <?php echo e(__('Autorisations')); ?>

                            <span style="color: #adadad" class="h6 ml-2">
                                <?php if(!empty($rolePermissions)): ?>
                                <?php $__currentLoopData = $rolePermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <label class="label label-success"><?php echo e($v->name); ?>,</label>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </span>
                        </h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/uncode2/resources/views/admin/params/roles/content_show.blade.php ENDPATH**/ ?>