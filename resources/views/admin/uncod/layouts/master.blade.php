<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

        <meta name="api_token" content="{{csrf_token()}}">
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<meta name="Description" content="Uncode-Archive">
		<meta name="Author" content="Uncode-Archive">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard,admin panel,admin archive,admin archivage facture, admin invoice,"/>
		@include('admin/uncod/layouts.head')
	</head>

	<body class="main-body app sidebar-mini">
		<!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		@include('admin/uncod/layouts.main-sidebar')
		<!-- main-content -->
		<div class="main-content app-content">
			@include('admin/uncod/layouts.main-header')
			<!-- container -->
			<div class="container-fluid">
				@yield('page-header')
				@yield('content')
				@include('admin/uncod/layouts.sidebar-right')
				@include('admin/uncod/layouts.models')
            	@include('admin/uncod/layouts.footer')
				@include('admin/uncod/layouts.footer-scripts')
	</body>
</html>
