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
			  	{{__('Affichage de factures')}}
			  </h2>

			</div>
		</div>

	</div>
	<!-- /breadcrumb -->
@endsection
@section('content')

@include('admin.uncod.factures.content')
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
	var langue = $('html').attr('lang');
	var projets = @json($projets);
	var invoices = @json($invoices);
	var donne_entete_names = @json($donne_entete_names);
	var current_projet_id=@json($projet_id);
	
	$(document).ready(function(){
		console.log('projets',projets);
		console.log('invoices',invoices);
		console.log('donne_entete_names',donne_entete_names);


		$('.uncode-invoice> td:not(:first-child)').on('click',function() {
		   		var parent = $(this).parent();
		   		var invoice_id = $(this).parent()[0].id;
				//console.log('parent',parent);
				//console.log('invoice_id',invoice_id);
				goToInvoiceDetails(invoice_id);
		});

	});

	function goToInvoiceDetails(invoice_id){
        var my_url = langue+"/invoices/"+invoice_id+"/show";
        window.location.href=window.location.protocol+"//"+window.location.hostname+":"+window.location.port+"/"+my_url;
        return false;
    }   

</script>
<!-- SEARCH -->
<script type="text/javascript">
	var searchArray=[];
	// LINE 0
	var data_type0="";
	var data_value0="";
	var key_work0="";
	var date_start0="";
	var date_end0="";
	var montant_min0="";
	var montant_max0="";

	// LINE 1
	var data_type1="";
	var data_value1="";
	var key_work1="";
	var date_start1="";
	var date_end1="";
	var montant_min1="";
	var montant_max1="";

	// LINE 2
	var data_type2="";
	var data_value2="";
	var key_work2="";
	var date_start2="";
	var date_end2="";
	var montant_min2="";
	var montant_max2="";


	$('#search_select0').on('change',function(){
		var select_value = $(this)[0].value;
		var datas = select_value.split('_');
		data_type0 = datas.pop();
		data_value0 = datas.join('_');
		$('#input_texte0').val("");
		displayOtherFields(data_type0,0);

	});
	$('#search_select1').on('change',function(){
		var select_value = $(this)[0].value;
		var datas = select_value.split('_');
		data_type1 = datas.pop();
		data_value1 = datas.join('_');
		$('#input_texte1').val("");
		displayOtherFields(data_type1,1);

	});
	$('#search_select2').on('change',function(){
		var select_value = $(this)[0].value;
		var datas = select_value.split('_');
		data_type2 = datas.pop();
		data_value2 = datas.join('_');
		$('#input_texte2').val("");
		displayOtherFields(data_type2,2);

	});
	function displayOtherFields(data_type,line_num){
		hideOtherFields(line_num);
		if (data_type=="TEXT") {
			$('#texte_input'+line_num).removeClass('hide');
			$('#texte_input'+line_num).addClass('show');
		}else if (data_type=="DATE") {
			$('#date_input'+line_num).removeClass('hide');
			$('#date_input'+line_num).addClass('show');
		}
		else if (data_type=="MONTANT") {
			$('#montant_input'+line_num).removeClass('hide');
			$('#montant_input'+line_num).addClass('show');
		}
	}
	function hideOtherFields(line_num){
		$('#texte_input'+line_num).removeClass('show');
		$('#date_input'+line_num).removeClass('show');
		$('#montant_input'+line_num).removeClass('show');
		$('#texte_input'+line_num).addClass('hide');
		$('#date_input'+line_num).addClass('hide');
		$('#montant_input'+line_num).addClass('hide');
	}

</script>
<!-- AJAX -->
<script type="text/javascript">
	// SEARCH WITH LINE 0
	$('#input_texte0').on('input',function(){
		key_work0=$(this).val();
		var seachElement={
			"line_num":0,
			"projet_id":current_projet_id,
			"data_type":data_type0,
			"data_value":data_value0,
			"key_work":key_work0,
			"date_start":date_start0,
			"date_end":date_end0,
			"montant_max":montant_max0,
			"montant_min":montant_min0
		};
		addSearchArray(seachElement);
		searchData={
			"projet_id":current_projet_id,
			"searchArray":searchArray
		};
		//console.log("searchData",searchData);
		refreshDatatable(searchData);
	});
	$('#input_start_date0').on('change',function(){
		date_start0=$(this).val();
		var seachElement={
			"line_num":0,
			"projet_id":current_projet_id,
			"data_type":data_type0,
			"data_value":data_value0,
			"key_work":key_work0,
			"date_start":date_start0,
			"date_end":date_end0,
			"montant_max":montant_max0,
			"montant_min":montant_min0
		};
		addSearchArray(seachElement);
		searchData={
			"projet_id":current_projet_id,
			"searchArray":searchArray
		};
		//console.log("searchData",searchData);
		refreshDatatable(searchData);
	});
	$('#input_end_date0').on('change',function(){
		date_end0=$(this).val();
		var seachElement={
			"line_num":0,
			"projet_id":current_projet_id,
			"data_type":data_type0,
			"data_value":data_value0,
			"key_work":key_work0,
			"date_start":date_start0,
			"date_end":date_end0,
			"montant_max":montant_max0,
			"montant_min":montant_min0
		};
		addSearchArray(seachElement);
		searchData={
			"projet_id":current_projet_id,
			"searchArray":searchArray
		};
		//console.log("searchData",searchData);
		refreshDatatable(searchData);
	});
	$('#input_mtn_min0').on('input',function(){
		montant_min0=$(this).val();
		var seachElement={
			"line_num":0,
			"projet_id":current_projet_id,
			"data_type":data_type0,
			"data_value":data_value0,
			"key_work":key_work0,
			"date_start":date_start0,
			"date_end":date_end0,
			"montant_max":montant_max0,
			"montant_min":montant_min0
		};
		addSearchArray(seachElement);
		searchData={
			"projet_id":current_projet_id,
			"searchArray":searchArray
		};
		//console.log("searchData",searchData);
		refreshDatatable(searchData);
	});
	$('#input_mtn_max0').on('input',function(){
		montant_max0=$(this).val();
		var seachElement={
			"line_num":0,
			"projet_id":current_projet_id,
			"data_type":data_type0,
			"data_value":data_value0,
			"key_work":key_work0,
			"date_start":date_start0,
			"date_end":date_end0,
			"montant_max":montant_max0,
			"montant_min":montant_min0
		};
		addSearchArray(seachElement);
		searchData={
			"projet_id":current_projet_id,
			"searchArray":searchArray
		};
		//console.log("searchData",searchData);
		refreshDatatable(searchData);
	});
	// SEARCH WITH LINE 1
	$('#input_texte1').on('input',function(){
		key_work1=$(this).val();
		var seachElement={
			"line_num":1,
			"projet_id":current_projet_id,
			"data_type":data_type1,
			"data_value":data_value1,
			"key_work":key_work1,
			"date_start":date_start1,
			"date_end":date_end1,
			"montant_max":montant_max1,
			"montant_min":montant_min1
		};
		addSearchArray(seachElement);
		searchData={
			"projet_id":current_projet_id,
			"searchArray":searchArray
		};
		//console.log("searchData",searchData);
		refreshDatatable(searchData);
	});
	$('#input_start_date1').on('input',function(){
		date_start1=$(this).val();
		var seachElement={
			"line_num":1,
			"projet_id":current_projet_id,
			"data_type":data_type1,
			"data_value":data_value1,
			"key_work":key_work1,
			"date_start":date_start1,
			"date_end":date_end1,
			"montant_max":montant_max1,
			"montant_min":montant_min1
		};
		addSearchArray(seachElement);
		searchData={
			"projet_id":current_projet_id,
			"searchArray":searchArray
		};
		//console.log("searchData",searchData);
		refreshDatatable(searchData);
	});
	$('#input_end_date1').on('input',function(){
		date_end1=$(this).val();
		var seachElement={
			"line_num":1,
			"projet_id":current_projet_id,
			"data_type":data_type1,
			"data_value":data_value1,
			"key_work":key_work1,
			"date_start":date_start1,
			"date_end":date_end1,
			"montant_max":montant_max1,
			"montant_min":montant_min1
		};
		addSearchArray(seachElement);
		searchData={
			"projet_id":current_projet_id,
			"searchArray":searchArray
		};
		//console.log("searchData",searchData);
		refreshDatatable(searchData);
	});
	$('#input_mtn_min1').on('input',function(){
		montant_min1=$(this).val();
		var seachElement={
			"line_num":1,
			"projet_id":current_projet_id,
			"data_type":data_type1,
			"data_value":data_value1,
			"key_work":key_work1,
			"date_start":date_start1,
			"date_end":date_end1,
			"montant_max":montant_max1,
			"montant_min":montant_min1
		};
		addSearchArray(seachElement);
		searchData={
			"projet_id":current_projet_id,
			"searchArray":searchArray
		};
		//console.log("searchData",searchData);
		refreshDatatable(searchData);
	});
	$('#input_mtn_max1').on('input',function(){
		montant_max1=$(this).val();
		var seachElement={
			"line_num":1,
			"projet_id":current_projet_id,
			"data_type":data_type1,
			"data_value":data_value1,
			"key_work":key_work1,
			"date_start":date_start1,
			"date_end":date_end1,
			"montant_max":montant_max1,
			"montant_min":montant_min1
		};
		addSearchArray(seachElement);
		searchData={
			"projet_id":current_projet_id,
			"searchArray":searchArray
		};
		//console.log("searchData",searchData);
		refreshDatatable(searchData);
	});

	// SEARCH WITH LINE 2
	$('#input_texte2').on('input',function(){
		key_work2=$(this).val();
		var seachElement={
			"line_num":2,
			"projet_id":current_projet_id,
			"data_type":data_type2,
			"data_value":data_value2,
			"key_work":key_work2,
			"date_start":date_start2,
			"date_end":date_end2,
			"montant_max":montant_max2,
			"montant_min":montant_min2
		};
		addSearchArray(seachElement);
		searchData={
			"projet_id":current_projet_id,
			"searchArray":searchArray
		};
		//console.log("searchData",searchData);
		refreshDatatable(searchData);
	});
	$('#input_start_date2').on('input',function(){
		date_start2=$(this).val();
		var seachElement={
			"line_num":2,
			"projet_id":current_projet_id,
			"data_type":data_type2,
			"data_value":data_value2,
			"key_work":key_work2,
			"date_start":date_start2,
			"date_end":date_end2,
			"montant_max":montant_max2,
			"montant_min":montant_min2
		};
		addSearchArray(seachElement);
		searchData={
			"projet_id":current_projet_id,
			"searchArray":searchArray
		};
		//console.log("searchData",searchData);
		refreshDatatable(searchData);
	});
	$('#input_end_date2').on('input',function(){
		date_end2=$(this).val();
		var seachElement={
			"line_num":2,
			"projet_id":current_projet_id,
			"data_type":data_type2,
			"data_value":data_value2,
			"key_work":key_work2,
			"date_start":date_start2,
			"date_end":date_end2,
			"montant_max":montant_max2,
			"montant_min":montant_min2
		};
		addSearchArray(seachElement);
		searchData={
			"projet_id":current_projet_id,
			"searchArray":searchArray
		};
		//console.log("searchData",searchData);
		refreshDatatable(searchData);
	});
	$('#input_mtn_min2').on('input',function(){
		montant_min2=$(this).val();
		var seachElement={
			"line_num":2,
			"projet_id":current_projet_id,
			"data_type":data_type2,
			"data_value":data_value2,
			"key_work":key_work2,
			"date_start":date_start2,
			"date_end":date_end2,
			"montant_max":montant_max2,
			"montant_min":montant_min2
		};
		addSearchArray(seachElement);
		searchData={
			"projet_id":current_projet_id,
			"searchArray":searchArray
		};
		//console.log("searchData",searchData);
		refreshDatatable(searchData);
	});
	$('#input_mtn_max2').on('input',function(){
		montant_max2=$(this).val();
		var seachElement={
			"line_num":2,
			"projet_id":current_projet_id,
			"data_type":data_type2,
			"data_value":data_value2,
			"key_work":key_work2,
			"date_start":date_start2,
			"date_end":date_end2,
			"montant_max":montant_max2,
			"montant_min":montant_min2
		};
		addSearchArray(seachElement);
		searchData={
			"projet_id":current_projet_id,
			"searchArray":searchArray
		};
		refreshDatatable(searchData);
	});

	function addSearchArray(seachElement){
		//console.log("searchItem",seachElement);
		var index = searchArray.findIndex(s=>s["line_num"]==seachElement["line_num"]);
		if (index!=-1) {
			searchArray[index]=seachElement;
		}else{
			searchArray.push(seachElement);
		}
	}

	function refreshDatatable(searchData){
		console.log("searchData",searchData);
		$.ajaxSetup({
	        headers:{
	          'X-CSRF-TOKEN':$('meta[name="api_token"]').attr('content')
	        }
	    });
        $.ajax({
	        url:"{{route('data-search', ['locale'=>app()-> getLocale()])}}",
	        method:'POST',
	        data:searchData,
	        dataType: 'json',
	        encode  : true,
	        success:function(result){
	        	console.log("result:",result);
	        	if (result['responseCode']==200) {
	        		$('#mytab').empty().append(
	        			result["return_html"]
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
	function validNumber(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
	
</script>



@endsection
