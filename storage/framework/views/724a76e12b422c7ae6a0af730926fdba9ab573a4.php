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
                <?php echo e(__('Gestion des rôles')); ?>

            </div>
            <div class="card-body ">
                <?php echo $__env->make('admin.params.roles.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>



<?php /**PATH /var/www/html/uncode2/resources/views/admin/params/roles/content_role.blade.php ENDPATH**/ ?>