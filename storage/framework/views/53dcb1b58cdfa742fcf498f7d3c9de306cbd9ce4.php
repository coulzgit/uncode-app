<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    <?php echo e(__('Veuiller saisir les données du compte client')); ?>

                </div>
                <p style="color:red" class="mg-b-20">
                    <?php echo e(__('Note: Tous les champs sont obligatoires')); ?>

                </p>
                <div class="pd-30 pd-sm-40 bg-gray-200">
                    <form>
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">
                                <?php echo e(__('Type de licence')); ?>

                            </label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                        <select class="form-control">
                                <?php $__currentLoopData = $licences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $licence): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option><?php echo e($licence->nom); ?></option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                        </div>
                    </div>

                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">
                                <?php echo e(__('Activer ce compte automatiquement ?')); ?>

                            </label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                            <div class="main-toggle main-toggle-success off">
                                <span></span>
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">Submit</button>
                    <a href="<?php echo e(route('account.list',app()->getLocale())); ?>" class="btn btn-dark pd-x-30 mg-t-5"><?php echo e(__('Annuler')); ?></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/uncode1/resources/views/admin/uncod/comptes_clients/edit_account/form_edit.blade.php ENDPATH**/ ?>