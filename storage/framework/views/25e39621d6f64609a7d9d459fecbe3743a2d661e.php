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
			  	<?php echo e(__('Configuration du compte client n°')); ?><?php echo e($account['account']->code); ?>

			  </h2>

			</div>
		</div>

	</div>
	<!-- /breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.uncod.comptes_clients.config_account.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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



<!--NEW: Select2 -->
<script src="<?php echo e(URL::asset('assets/plugins/select2/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/form-elements.js')); ?>"></script>

<!-- TEST -->
<script src="<?php echo e(asset('app-assets/js/vendors/jquery-3.2.1.min.js')); ?>"></script>
<script type="text/javascript">

	var account = <?php echo json_encode($account, 15, 512) ?>;
	var doc_columns = <?php echo json_encode($doc_columns, 15, 512) ?>;
	var acc_data_columns = <?php echo json_encode($acc_data_columns, 15, 512) ?>;
	$(document).ready(function(){
		console.log('account',account);
		console.log('doc_columns',doc_columns);
		console.log('acc_data_columns',acc_data_columns);

	});
</script>

<script type="text/javascript">
    function editConfig(){
                var account_id = $('#account_id').val();
                var app_name = $('#app_name').val();
                var app_logo = $('#app_logo').val();
                var column_name = $('#column_name').val();
                var doc_columns = $('#doc_columns').val();



                var data ={

                       'account_id':account_id,
                    'app_name':app_name,
                    'app_logo':app_logo,
                    'column_name':column_name
                    'doc_columns':doc_columns

                 };
                console.log('data',data);
                // sendNewAccountData(data);
    }

function sendAccountConfig(data){
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

<?php echo $__env->make('admin/uncod/layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/uncode2/resources/views/admin/uncod/comptes_clients/config_account/index.blade.php ENDPATH**/ ?>