@extends('admin/uncod/layouts.master')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Create New Role</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('roles',['locale'=>app()->getLocale()]) }}"> Back</a>
</div>
</div>
</div>
@if (count($errors) > 0)
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
{!! Form::open() !!}
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Permission:</strong>
<br/>
@foreach($permissions as $value)
<label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
{{ $value->name }}</label>
<br/>
@endforeach
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
{!! Form::close() !!}
<p class="text-center text-primary"><small>Tutorial by Tutsmake.com</small></p>
@endsection

@section('js')
<!-- TEST -->
<script src="{{asset('app-assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript">

	var permissions = @json($permissions);
	$(document).ready(function(){
		console.log('permissions',permissions);

	});
	function createRole(){
        //Exemple de format data
        var data ={
               'name':"role_name",
               'permissions':[1,3,4]//list id permission
         };
        console.log('data',data);
        //sendNewRoleData(data);
    }
    function sendNewRoleData(data){
        $.ajaxSetup({
          headers:{
            'X-CSRF-TOKEN':$('meta[name="api_token"]').attr('content')
          }
        });
        $.ajax({
          url:"{{route('roles.create', ['locale'=>app()-> getLocale()])}}",
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