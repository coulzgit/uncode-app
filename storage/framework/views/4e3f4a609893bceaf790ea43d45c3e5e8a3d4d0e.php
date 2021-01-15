<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Role Management</h2>
</div>
<div class="pull-right">
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
<a class="btn btn-success" href="<?php echo e(route('roles.create',app()->getLocale())); ?>"> Create New Role</a>
<?php endif; ?>
</div>
</div>
</div>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
<p><?php echo e($message); ?></p>
</div>
<?php endif; ?>
<table class="table table-bordered">
<tr>
<th>No</th>
<th>Name</th>
<th width="280px">Action</th>
</tr>
<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e(++$i); ?></td>
<td><?php echo e($role->name); ?></td>
<td>
<a class="btn btn-info" href="<?php echo e(route('roles.show',['locale'=>app()->getLocale(),$role->id])); ?>">Show</a>

<a class="btn btn-primary" href="<?php echo e(route('roles.edit',['locale'=>app()->getLocale(),$role->id])); ?>">Edit</a>
<a class="btn btn-danger" href="<?php echo e(route('roles.delete',['locale'=>app()->getLocale(),$role->id])); ?>">Delete</a>



</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo $roles->render(); ?>

<p class="text-center text-primary"><small>Tutorial by Tutsmake.com</small></p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<!-- TEST -->
<script src="<?php echo e(asset('app-assets/js/vendors/jquery-3.2.1.min.js')); ?>"></script>
<script type="text/javascript">

	var roles = <?php echo json_encode($roles, 15, 512) ?>;
	$(document).ready(function(){
		console.log('roles',roles);

	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/uncod/layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Sites/projets/web/uncode-app/resources/views/admin/params/roles/index.blade.php ENDPATH**/ ?>