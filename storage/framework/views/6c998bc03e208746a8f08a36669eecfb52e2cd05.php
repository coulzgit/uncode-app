<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit New User</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="<?php echo e(route('users')); ?>"> Back</a>
</div>
</div>
</div>
<?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($error); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
<?php endif; ?>
<?php echo Form::model($user); ?>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
<?php echo Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')); ?>

</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Email:</strong>
<?php echo Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')); ?>

</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Password:</strong>
<?php echo Form::password('password', array('placeholder' => 'Password','class' => 'form-control')); ?>

</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Confirm Password:</strong>
<?php echo Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')); ?>

</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Role:</strong>
<?php echo Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')); ?>

</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<!-- TEST -->
<script src="<?php echo e(asset('app-assets/js/vendors/jquery-3.2.1.min.js')); ?>"></script>
<script type="text/javascript">

	
	var user = <?php echo json_encode($user, 15, 512) ?>;
	var userRole = <?php echo json_encode($userRole, 15, 512) ?>;
	var roles = <?php echo json_encode($roles, 15, 512) ?>;
	$(document).ready(function(){
		
		console.log('user',user);
		console.log('userRole',userRole);
		console.log('roles',roles);

	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/uncod/layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Sites/projets/web/uncode-app/resources/views/mytestes/users/edit.blade.php ENDPATH**/ ?>