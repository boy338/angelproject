<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Angelproject</title>

    <!-- Bootstrap -->
    <link href="{{ asset('/backend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- font-awesome -->
    <link href="{{ asset('/backend/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

	@yield('style')

	<!-- Theme style -->
	<link href="{{ asset('/backend/admin-lte/css/AdminLTE.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/backend/admin-lte/css/skins/_all-skins.min.css') }}" rel="stylesheet">


  </head>

  <body class="skin-blue">
	<div class="wrapper">

		<!-- Header -->
		@include('backend.layouts.header')

		<!-- Sidebar -->
		@include('backend.layouts.sidebar')

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					{{ $page_title or "Page Title" }}
					<small>{{ $page_description or null }}</small>
				</h1>
				<!-- You can dynamically generate breadcrumbs here -->
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
					<li class="active">Here</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- Your Page Content Here -->
				@yield('content')
			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->

		<!-- Footer -->
		@include('backend.layouts.footer')

	</div><!-- ./wrapper -->



		<!-- jQuery 2.2.3 -->
		<script src="{{ asset('/backend/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
  			$.widget.bridge('uibutton', $.ui.button);
		</script>
		<!-- Bootstrap 3.3.6 -->
		<script src="{{ asset('/backend/bootstrap/js/bootstrap.min.js') }}"></script>

		@yield('script')
		
		<!-- AdminLTE App -->
		<script src="{{ asset('/backend/admin-lte/js/app.min.js') }}"></script>

  </body>
</html>
