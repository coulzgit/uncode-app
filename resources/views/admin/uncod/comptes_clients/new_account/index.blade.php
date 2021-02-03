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
			  	{{__('Créer un nouveau compte client')}}
			  </h2>

			</div>
		</div>

	</div>
	<!-- /breadcrumb -->
@endsection
@section('content')
<div id="msg_succes" class="row col-lg-12" style="background: #bff1cd; border: 1px solid #bff1cd;border-radius: 5px;height: 50px;padding-top: 5px;display: none;">
    {{__('Réussie')}}
</div>
<div id="msg_error" class="row col-lg-12" style="background:red; border: 1px solid #bff1cd;border-radius: 5px;height: 50px;padding-top: 5px;display: none;">
    {{__('Echec')}}
</div>
@include('admin.uncod.comptes_clients.new_account.form_add')
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

<!-- TEST -->
<script src="{{asset('app-assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript">

	var licences = @json($licences);
	$(document).ready(function(){
		console.log('licences',licences);

	});
</script>

<script type="text/javascript">
    function createAccount(){
        var licence_id = $('#licence_id').val();
        var statut = $('#statut').val();
        if($('#statut').hasClass('on')){
          statut='ON';
        }else{
          statut='OFF';
        }
        var data ={
               'statut':statut,
               'licence_id':licence_id
         };
        console.log('data',data);
        sendNewAccountData(data);
    }
    function sendNewAccountData(data){
      $('#msg_succes').css({'display':'none'});
      $('#msg_error').css({'display':'none'});
      $.ajaxSetup({
        headers:{
          'X-CSRF-TOKEN':$('meta[name="api_token"]').attr('content')
        }
      });
      $.ajax({
        url:"{{route('accounts.create', ['locale'=>app()-> getLocale()])}}",
        method:'POST',
        data:data,
        dataType: 'json',
        encode  : true,
        success:function(result){

          if(result["responseCode"] === 200){
            $('#msg_succes').css({'display':'flex'});
            $('#msg_error').css({'display':'none'});
          }else if(result["responseCode"] === 404){
            $('#msg_succes').css({'display':'none'});
            $('#msg_error').css({'display':'flex'});
          }
        },
        error:function(result){
          alert('failed');
        }
      });
    }
</script>
@endsection