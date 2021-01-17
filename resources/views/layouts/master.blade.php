<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
<<<<<<< HEAD
		@include('admin.uncod.layouts.head')
=======
		@include('layouts.head')
>>>>>>> 1d83c3b8485b7236ee59d31fd0bf3e54457ae6e5
	</head>

	<body class="main-body app sidebar-mini">
		<!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
<<<<<<< HEAD
		@include('admin.uncod.layouts.main-sidebar')		
		<!-- main-content -->
		<div class="main-content app-content">
			@include('admin.uncod.layouts.main-header')			
=======
		@include('layouts.main-sidebar')		
		<!-- main-content -->
		<div class="main-content app-content">
			@include('layouts.main-header')			
>>>>>>> 1d83c3b8485b7236ee59d31fd0bf3e54457ae6e5
			<!-- container -->
			<div class="container-fluid">
				@yield('page-header')
				@yield('content')
<<<<<<< HEAD
				@include('admin.uncod.layouts.sidebar-right')
				@include('admin.uncod.layouts.models')
            	@include('admin.uncod.layouts.footer')
				@include('admin.uncod.layouts.footer-scripts')	
=======
				@include('layouts.sidebar-right')
				@include('layouts.models')
            	@include('layouts.footer')
				@include('layouts.footer-scripts')	
>>>>>>> 1d83c3b8485b7236ee59d31fd0bf3e54457ae6e5
	</body>
</html>