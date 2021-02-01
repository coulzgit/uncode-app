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
                {{__('Configuration du compte client n°') }}{{  $account['account']->code}}
              </h2>

            </div>
        </div>

    </div>
    <!-- /breadcrumb -->
@endsection
@section('content')
<div id="success_msg" style="padding: 12px; display:none" class="row">
    <div  style="background: #bff1cd; border: 1px solid #bff1cd;border-radius: 5px;height: 50px;padding-top: 5px" class="col-lg-12 col-md-12">
            <span id="success_msgcontent" >{{__('Chargement réussie')}}</span>
    </div>
</div>

<div id="failed_msg" style="padding: 12px; display:none" class="row">
    <div  style="background: red; border: 1px solid #bff1cd;border-radius: 5px;height: 50px;padding-top: 5px" class="col-lg-12 col-md-12">
            <span id="failed_msgcontent" >{{__('Chargement réussie')}}</span>
    </div>
</div>


@include('admin.uncod.comptes_clients.config_account.content')
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
    var account = @json($account);
    var doc_columns = @json($doc_columns);
    var acc_data_columns = @json($acc_data_columns);
    $(document).ready(function(){
        console.log('account',account);
        console.log('doc_columns',doc_columns);
        console.log('acc_data_columns',acc_data_columns);


       // var doc_columns = $('#doc_columns').val();
        var test = $('#doc_columns').children().find('input[name="doc_column"]').contents();
        //console.log(test);
        console.log(test['prevObject']);
        for(let i=0; i<test['prevObject'].length; i++)
        {
           //console.log(test['prevObject'][i].getAttribute("doc_column")+" : "+test['prevObject'][i].checked);
           if(test['prevObject'][i].checked)
            console.log(test['prevObject'][i].getAttribute("doc_column")+" : "+test['prevObject'][i].checked);
        }
        });



    </script>
    <script>
        function showalert(){
             var account_id = account['account']['id']
            var app_name = $('#app_name').val();
            var app_logo = $('#app_logo').val();
            var doc_column_array=[]
             var test = $('#doc_columns').children().find('input[name="doc_column"]').contents();
            console.log(test['prevObject']);
            for(let i=0; i<test['prevObject'].length; i++)
            {
               if(test['prevObject'][i].checked){
                console.log(test['prevObject'][i].getAttribute("doc_column")+" : "+test['prevObject'][i].checked);
               var value= test['prevObject'][i].getAttribute("doc_column");
               doc_column_array.push(value)
               }
            }

            var acc_data_column_array=[];
             var test2 = $('#acc_data_columns').children().find('input[name="acc_data_column"]').contents();
            for(let i=0; i<test2['prevObject'].length; i++)
            {
               if(test2['prevObject'][i].checked){
               var value= test2['prevObject'][i].getAttribute("acc_data_column");
               acc_data_column_array.push(value)
               }
            }
            var data ={
                'account_id':account_id,
                'app_name':app_name,
                'app_logo':app_logo,
                'doc_columns':doc_column_array,
                'acc_data_columns':acc_data_column_array
             };
            console.log('data',data);
           sendNewAccountData(data);
        }
        function sendNewAccountData(data){
            $.ajaxSetup({
              headers:{
                'X-CSRF-TOKEN':$('meta[name="api_token"]').attr('content')
              }
            });
            $.ajax({
              url:"{{route('accounts.config.save', ['locale'=>app()-> getLocale()])}}",
              method:'POST',
              data:data,
              dataType: 'json',
              encode  : true,
              success:function(result){

                if(result["responseCode"] === 200){
                //   alert('success');
                    $('#success_msg').css({'display':'block'});
                    $('#failed_msg').css({'display':'none'});

                }else if(result["responseCode"] === 404){
                    // alert('failed');
                     $('#success_msg').css({'display':'none'});
                    $('#failed_msg').css({'display':'block'});
                    if(result['errors'].hasOwnProperty('doc_columns')){
                        $('#failed_msgcontent').empty().append("{{__('Les Données d\'entete ne peuvent pas contenir plus de 6 éléments.') }}");


                    }
                     if(result['errors'].hasOwnProperty('acc_data_columns')){
                        $('#failed_msgcontent').empty().append("{{__('Les Données d\'imputation ne peuvent pas contenir plus de 6 éléments.') }}");


                    }






                    console.log(result);
                }
              },
              error:function(result){
                alert('failed');
              }
            });
        }
    </script>








@endsection
