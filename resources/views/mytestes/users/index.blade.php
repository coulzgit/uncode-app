@extends('admin/uncod/layouts.master')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Users List</h2>
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
<th>Email</th>
<th>Roles</th>
<th width="280px">Action</th>
</tr>
@foreach ($users as $key => $user)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $user->user_name }}</td>
<td>{{ $user->email }}</td>
<td>
@if(!empty($user->getRoleNames()))
@foreach($user->getRoleNames() as $v)
<label class="badge badge-success">{{ $v }}</label>
@endforeach
@endif
</td>
<td>
<a class="btn btn-info" href="{{ route('users.show',['user_id'=>$user->id]) }}">Show</a>
<a class="btn btn-primary" href="{{ route('users.edit',['user_id'=>$user->id])}}">Edit</a>
<a class="btn btn-danger" href="#">Delete</a>

</td>
</tr>
@endforeach
</table>
@endsection

@section('js')
<!-- TEST -->
<script src="{{asset('app-assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript">

	
	var users = @json($users);
	$(document).ready(function(){
		
		console.log('users',users);

	});
</script>
@endsection