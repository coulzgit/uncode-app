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
			  	{{__('Mise à jour du compte client n°') }} {{ $account->code }}
			  </h2>

			</div>
		</div>

	</div>
	<!-- /breadcrumb -->
@endsection
@section('content')

@include('admin.uncod.comptes_clients.edit_account.form_edit')
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
	var account = @json($account);
	$(document).ready(function(){
		console.log('licences',licences);
		console.log('account',account);

	});
</script>


<script type="text/javascript">
    function editAccount(){
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
                // sendNewAccountData(data);
    }

function sendEditAccount(data){
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
@endsection
