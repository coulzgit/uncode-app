@extends('admin/uncod/layouts.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/admin/css/editor/select2.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/admin/css/select2/select2.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/admin/css/style.css')}}" rel="stylesheet">



			  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">
			  	Paramétrage d'un compte client
			  </h2>
			  
			</div>
		</div>
		
	</div>
	<!-- /breadcrumb -->
@endsection
@section('content')

@include('admin.uncod.comptes_clients.configuration.content')
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
<!-- Select2 -->

<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- form-element -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
<script src="{{URL::asset('assets/admin/js/data-table/bootstrap-editable.js')}}"></script>

<script src="{{URL::asset('assets/admin/js/duallistbox/jquery.bootstrap-duallistbox.js')}}"></script>

<script src="{{URL::asset('assets/admin/js/editable/bootstrap-editable.js')}}"></script>

<script src="{{URL::asset('assets/admin/js/editable/select2.js')}}"></script>

<script src="{{URL::asset('assets/admin/js/editable/xediable-active.js')}}"></script>

<script src="{{URL::asset('assets/admin/js/select2/select2-active.js')}}"></script>

<script src="{{URL::asset('assets/admin/js/select2/select2.full.min.js')}}"></script>
@endsection