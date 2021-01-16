<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Create New Role</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="<?php echo e(route('roles',['locale'=>app()->getLocale()])); ?>"> Back</a>
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
<?php echo Form::open(); ?>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
<?php echo Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')); ?>

</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Permission:</strong>
<br/>
<?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<label><?php echo e(Form::checkbox('permission[]', $value->id, false, array('class' => 'name'))); ?>

<?php echo e($value->name); ?></label>
<br/>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
<?php echo Form::close(); ?>

<p class="text-center text-primary"><small>Tutorial by Tutsmake.com</small></p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<!-- TEST -->
<script src="<?php echo e(asset('app-assets/js/vendors/jquery-3.2.1.min.js')); ?>"></script>
<script type="text/javascript">

	var permissions = <?php echo json_encode($permissions, 15, 512) ?>;
	$(document).ready(function(){
		console.log('permissions',permissions);

	});
	function createRole(){
        //Exemple de format data
        var data ={
               'name':"role_name",
               'permissions':[1,3,4]//list id permission
         };
        console.log('data',data);
        //sendNewRoleData(data);
  }
  function sendNewRoleData(data){
      $.ajaxSetup({
        headers:{
          'X-CSRF-TOKEN':$('meta[name="api_token"]').attr('content')
        }
      });
      $.ajax({
        url:"<?php echo e(route('roles.create', ['locale'=>app()-> getLocale()])); ?>",
        method:'POST',
        data:data,
        dataType: 'json',
        encode  : true,
        success:function(result){

          if(result["responseCode"] === 200){
            alert('success');
          }else if(result["responseCode"] === 404){
              alert('failed');
          }
        },
        error:function(result){
          alert('failed');
        }
      });
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/uncod/layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Sites/projets/web/uncode-app/resources/views/admin/params/roles/create.blade.php ENDPATH**/ ?>