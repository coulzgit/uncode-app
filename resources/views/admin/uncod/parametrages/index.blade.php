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
			  	{{__('Customiser')}}
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
    <div style="background: #bff1cd; border: 1px solid #bff1cd;border-radius: 5px;height: 50px;padding-top: 5px" class="col-lg-12 col-md-12">
      <span>{{__('Réussie')}}</span>
    </div>
  </div>
@endif
@if(session()->has('domaine_name_error'))
    <div style="padding: 12px" class="row">
    <div style="background: red; border: 1px solid #bff1cd;border-radius: 5px;height: 50px;padding-top: 5px" class="col-lg-12 col-md-12">
      <span>{{__('Nom de domaine déjà utilisé')}}</span>
    </div>
  </div>
@endif

@if(session()->has('errors'))
  <div style="padding: 12px" class="row">
    <div style="background: #ff7c92; border: 1px solid #ff7c92;border-radius: 5px;min-height: 50px;padding-top: 5px" class="col-lg-12 col-md-12">
      <span>{{__('Echec')}}</span>
      
      <div class="col-lg-12">
        @error('accountID')
            <strong>{{ $message }}</strong>
        @enderror

        @error('app_name')
            <strong>{{ $message }}</strong>
        @enderror
        @error('domaine_name')
            <strong>{{ $message }}</strong>
        @enderror
        @error('app_logo')
            <strong>{{ $message }}</strong>
        @enderror
      </div>
    </div>
  </div>
  
@endif
@include('admin.uncod.parametrages.form')


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

	var uncode = @json($uncode);
	$(document).ready(function(){
		console.log('uncode',uncode);

	});
</script>

@endsection
