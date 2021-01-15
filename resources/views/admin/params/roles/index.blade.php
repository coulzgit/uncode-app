@extends('admin/uncod/layouts.master')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Role Management</h2>
</div>
<div class="pull-right">
@can('role-create')
<a class="btn btn-success" href="{{ route('roles.create',app()->getLocale()) }}"> Create New Role</a>
@endcan
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>No</th>
<th>Name</th>
<th width="280px">Action</th>
</tr>
@foreach ($roles as $key => $role)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $role->name }}</td>
<td>
<a class="btn btn-info" href="{{ route('roles.show',['locale'=>app()->getLocale(),$role->id]) }}">Show</a>

<a class="btn btn-primary" href="{{ route('roles.edit',['locale'=>app()->getLocale(),$role->id]) }}">Edit</a>
<a class="btn btn-danger" href="{{ route('roles.delete',['locale'=>app()->getLocale(),$role->id]) }}">Delete</a>



</td>
</tr>
@endforeach
</table>
{!! $roles->render() !!}
<p class="text-center text-primary"><small>Tutorial by Tutsmake.com</small></p>
@endsection

@section('js')
<!-- TEST -->
<script src="{{asset('app-assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript">

	var roles = @json($roles);
	$(document).ready(function(){
		console.log('roles',roles);

	});
</script>
@endsection