
<div class="row">
    <div class="col-lg-12 col-md-12">

        <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
        <strong><?php echo e(__('Oups!')); ?></strong> <?php echo e(__('Il y a eu des problèmes avec votre entrée')); ?>.<br><br>
        <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        </div>
        <?php endif; ?>

        <?php echo Form::model($role, ['method' => 'PATCH']); ?>


        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    <?php echo e(__('Veuiller saisir le role avec les permissions')); ?>

                </div>
                <p style="color:red" class="mg-b-20">
                    <?php echo e(__('Note: Tous les champs sont obligatoires')); ?>

                </p>
                <div class="pd-30 pd-sm-40 bg-gray-200">
                    
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">
                                <?php echo e(__('Nom du role')); ?>

                            </label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                        <?php echo Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')); ?>                        </div>
                    </div>

                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">
                                <?php echo e(__('Quels sont les permission souhaiteriez vous donner avec ce rôle')); ?>

                            </label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                            <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label><?php echo e(Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name'))); ?>

                            <?php echo e($value->name); ?></label>
                            <br/>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5"><?php echo e(__('Sauvegarder')); ?></button>

                    <a href="<?php echo e(route('roles',['locale'=>app()->getLocale()])); ?>" class="btn btn-dark pd-x-30 mg-t-5"><?php echo e(__('Annuler')); ?></a>

                </div>
            </div>
        </div>
    </div>
</div>
<?php echo Form::close(); ?>

<?php /**PATH /var/www/html/uncode2/resources/views/admin/params/roles/form_edit.blade.php ENDPATH**/ ?>