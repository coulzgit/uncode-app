<?php $__env->startSection('css'); ?>
<!--  Owl-carousel css-->
<link href="<?php echo e(URL::asset('assets/plugins/owl-carousel/owl.carousel.css')); ?>" rel="stylesheet" />
<!-- Maps css -->
<link href="<?php echo e(URL::asset('assets/plugins/jqvmap/jqvmap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
	<!-- breadcrumb -->
	<div class="breadcrumb-header justify-content-between">
		<div class="left-content">
			<div>
			  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">
			  	Mise à jour du compte client n° <?php echo e($account->code); ?>

			  </h2>

			</div>
		</div>

	</div>
	<!-- /breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.uncod.comptes_clients.edit_account.form_edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
			<!-- /Container -->
		</div>
		<!-- /main-content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<!--Internal  Chart.bundle js -->
<script src="<?php echo e(URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')); ?>"></script>
<!-- Moment js -->
<script src="<?php echo e(URL::asset('assets/plugins/raphael/raphael.min.js')); ?>"></script>
<!--Internal  Flot js-->
<script src="<?php echo e(URL::asset('assets/plugins/jquery.flot/jquery.flot.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/dashboard.sampledata.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/chart.flot.sampledata.js')); ?>"></script>
<!--Internal Apexchart js-->
<script src="<?php echo e(URL::asset('assets/js/apexcharts.js')); ?>"></script>
<!-- Internal Map -->
<script src="<?php echo e(URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/modal-popup.js')); ?>"></script>
<!--Internal  index js -->
<script src="<?php echo e(URL::asset('assets/js/index.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/jquery.vmap.sampledata.js')); ?>"></script>
<!-- Select2 -->
<script src="<?php echo e(URL::asset('assets/plugins/select2/js/select2.min.js')); ?>"></script>
<!-- form-element -->
<script src="<?php echo e(URL::asset('assets/js/form-elements.js')); ?>"></script>
<!-- TEST -->
<script src="<?php echo e(asset('app-assets/js/vendors/jquery-3.2.1.min.js')); ?>"></script>
<script type="text/javascript">

	var licences = <?php echo json_encode($licences, 15, 512) ?>;
	var account = <?php echo json_encode($account, 15, 512) ?>;
	$(document).ready(function(){
		console.log('licences',licences);
		console.log('account',account);

	});
</script>


<script type="text/javascript">
    function editAccount(){
        var licence_id = $('#licence_id').val();
                var statut = $('#statut').val();
                if($('#statut').hasClass('off')){
                statut='OFF';
                }else{
                statut='ON';
                }
                var data ={
                       'statut':statut,
                       'licence_id':licence_id
                 };
                console.log('data',data);
                // sendNewAccountData(data);
    }

function sendEditAccount(data){
        $.ajaxSetup({
          headers:{
            'X-CSRF-TOKEN':$('meta[name="api_token"]').attr('content')
          }
        });
        $.ajax({
          url:"<?php echo e(route('account.create', ['locale'=>app()-> getLocale()])); ?>",
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

<?php echo $__env->make('admin/uncod/layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/uncode1/resources/views/admin/uncod/comptes_clients/edit_account/index.blade.php ENDPATH**/ ?>