@extends('admin/uncod/layouts.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">




@endsection
@section('page-header')
	<!-- breadcrumb -->
	<div class="breadcrumb-header justify-content-between">
		<div class="left-content">
			<div>
			  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">
			  	{{__('Configuration des vues')}}
			  </h2>
			  <!-- <p class="mg-b-0">Sales monitoring dashboard template.</p> -->
			</div>
		</div>

	</div>
	<!-- /breadcrumb -->
@endsection
@section('content')

@if(session()->has('succes'))
  <div style="padding: 12px" class="row">
    <div style="background: #bff1cd; border: 1px solid #bff1cd;border-radius: 5px;min-height: 50px;padding-top: 5px" class="col-lg-12 col-md-12">
      <span>{{__('Réussie')}}</span>
    </div>
  </div>
@endif
@if(session()->has('error'))
  <div style="padding: 12px" class="row">
    <div style="background: red; border: 1px solid #bff1cd;border-radius: 5px;min-height: 50px;padding-top: 5px" class="col-lg-12 col-md-12">
      <p>1. {{__('Compte obligatoire')}}!</p>
      <p>2. {{__('Données d\'entete min:7, max:7')}}!</p>
      <p>3. {{__('Données d\'imputation min:7, max:7')}}!</p>
    </div>
  </div>
@endif

@include('admin.uncod.comptes_clients.display_data.form')


			</div>
			<!-- /Container -->
		</div>
		<!-- /main-content -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>


<!--NEW: Select2 -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>

<!-- TEST -->
<script src="{{asset('app-assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript">

	var accounts = @json($accounts);
  	var acc_data_columns = @json($acc_data_columns);
  	var doc_columns = @json($doc_columns);

  	var acc_data_names = @json($acc_data_names);
  	var doc_data_names = @json($doc_data_names);

  	

  
	$(document).ready(function(){
		console.log('accounts',accounts);
	    console.log('acc_data_columns',acc_data_columns);
	    console.log('doc_columns',doc_columns);
    	console.log('acc_data_names',acc_data_names);
    	console.log('doc_data_names',doc_data_names);
    	$('#projet_id').on('change',function(){
    		var projet_id = $(this)[0].value;
    		refreshSelectData(projet_id);
    	})
	});
	function refreshSelectData(projet_id){
		$.ajaxSetup({
	        headers:{
	          'X-CSRF-TOKEN':$('meta[name="api_token"]').attr('content')
	        }
	    });
        $.ajax({
	        url:"{{route('data-names', ['locale'=>app()-> getLocale()])}}",
	        method:'POST',
	        data:{'projet_id':projet_id},
	        dataType: 'json',
	        encode  : true,
	        success:function(result){
	        	console.log("result:",result);
	        	$('#donne_entetes').empty();
				$('#donne_imputations').empty();
	        	if (result['responseCode']==200) {
	        		$('#donne_entetes').append(
	        			result['htmlDE']
	        		);
					$('#donne_imputations').append(
						result['htmlDI']
					);
	        	}else{
	        		alert('error');
	        	}
	        },
	        error:function(result){
	          alert('error');
	        }
	    });
	}
</script>

@endsection
