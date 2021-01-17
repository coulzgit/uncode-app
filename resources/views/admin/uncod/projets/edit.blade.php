@extends('admin/uncod/layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
	<!-- breadcrumb -->
	<div class="breadcrumb-header justify-content-between">
		<div class="left-content">
			<div>
			  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">
			  	{{__('Modification du projet')}}
			  </h2>

			</div>
		</div>

	</div>
	<!-- /breadcrumb -->
@endsection
@section('content')

<div style="display: none;" class="col-lg-12" id="message_succes">
	@include('admin.uncod.message_succes')
</div>
<div style="display: none;" class="col-lg-12" id="message_error">
	@include('admin.uncod.message_error')
</div>
@include('admin.uncod.projets.form_edit')
			</div>
			<!-- /Container -->
		</div>
		<!-- /main-content -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>

<!-- TEST -->
<script src="{{asset('app-assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript">
	var accounts = @json($accounts);
	var projet = @json($projet);
	$(document).ready(function(){
		console.log('accounts',accounts);
		console.log('projet',projet);
	});
	function updateProjet(){
        var account_id=$('#account_id').val();
		var projet_name=$('#projet_name').val();
		$('#account_id').css({'border':''});
		$('#projet_name').css({'border':''});
		if(account_id=="none"){
			$('#account_id').css({'border':'1px solid red'});
			return;
		}if(projet_name.length==0){
			$('#projet_name').css({'border':'1px solid red'});
			return;
		}
        var data ={
     		'projet_id':projet['id'],
        	'account_id':parseInt(account_id),
        	'projet_name':projet_name
        };
        console.log('data',data);
        sendProjectEditedData(data);
  	}
  	function sendProjectEditedData(data){
	    $.ajaxSetup({
	        headers:{
	          'X-CSRF-TOKEN':$('meta[name="api_token"]').attr('content')
	        }
	    });
        $.ajax({
	        url:"{{route('projets.edit', ['projet_id'=>$projet['id'],'locale'=>app()-> getLocale()])}}",
	        method:'POST',
	        data:data,
	        dataType: 'json',
	        encode  : true,
	        success:function(result){
	        	
	          if(result["responseCode"] === 200){
	            $('#message_error').css({'display':'none'});
	            $('#message_succes').css({'display':'block'});
	          }else if(result["responseCode"] === 404){
	              $('#message_error').css({'display':'block'});
	            $('#message_succes').css({'display':'none'});
	          }
	        },
	        error:function(result){
	        	$('#message_error').css({'display':'block'});
	            $('#message_succes').css({'display':'none'});
	        }
	    });
  	}
</script>

@endsection
