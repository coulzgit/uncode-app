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
			  	{{__('Modification de l\'utilisateur N° ')}} {{ $user->id }}1
			  </h2>
			  <!-- <p class="mg-b-0">Sales monitoring dashboard template.</p> -->
			</div>
		</div>

	</div>
	<!-- /breadcrumb -->
@endsection
@section('content')

@include('admin.uncod.users.edit.form')


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

	var roles = @json($roles);
	var account = @json($account);
	var user = @json($user);
	var userRole = @json($userRole);
	var account_has_owner = @json($account_has_owner);
	

	$(document).ready(function(){
		console.log('roles',roles);
		console.log('account',account);
		console.log('user',user);
		console.log('userRole',userRole);
		console.log('account_has_owner',account_has_owner);
	});

	function editUser(){
        var account_id =account['id'];
        var user_name = $('#user_name').val();
        var roles = $('#roles').val();
        var prenom = $('#prenom').val();
        var nom = $('#nom').val();
        var account_owner ="NON";//$('#account_owner').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var confirm_password = $('#confirm_password').val();

        var data ={
            'account_id' : account_id,
              'user_name' : user_name,
              'prenom' : prenom,
              'nom' : nom,
              'account_owner' : account_owner,
              'email' : email,
              'password' : password,
              'confirm_password' : confirm_password,
              'roles':roles,
        };
        console.log('data',data);
        //sendUserEditedData(data);
  	}
  	function sendNewUserData(data){
	    $.ajaxSetup({
	        headers:{
	          'X-CSRF-TOKEN':$('meta[name="api_token"]').attr('content')
	        }
	    });
        $.ajax({
	        url:"{{route('users.create', ['locale'=>app()-> getLocale()])}}",
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
