<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Users List</h2>
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
<th>Email</th>
<th>Roles</th>
<th width="280px">Action</th>
</tr>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e(++$i); ?></td>
<td><?php echo e($user->user_name); ?></td>
<td><?php echo e($user->email); ?></td>
<td>
<?php if(!empty($user->getRoleNames())): ?>
<?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<label class="badge badge-success"><?php echo e($v); ?></label>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</td>
<td>
<a class="btn btn-info" href="<?php echo e(route('users.show',['user_id'=>$user->id])); ?>">Show</a>
<a class="btn btn-primary" href="<?php echo e(route('users.edit',['user_id'=>$user->id])); ?>">Edit</a>
<a class="btn btn-danger" href="#">Delete</a>

</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<!-- TEST -->
<script src="<?php echo e(asset('app-assets/js/vendors/jquery-3.2.1.min.js')); ?>"></script>
<script type="text/javascript">

	
	var users = <?php echo json_encode($users, 15, 512) ?>;
	$(document).ready(function(){
		
		console.log('users',users);

	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/uncod/layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Sites/projets/web/uncode-app/resources/views/mytestes/users/index.blade.php ENDPATH**/ ?>