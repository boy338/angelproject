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

	<!-- Theme style -->
	<link href="{{ asset('/backend/admin-lte/css/AdminLTE.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/backend/admin-lte/css/skins/_all-skins.min.css') }}" rel="stylesheet">

  	<!-- iCheck -->
  	<link rel="stylesheet" href="{{ asset('/backend/plugins/iCheck/flat/blue.css') }}">
	
  	<!-- Morris chart -->
  	<link rel="stylesheet" href="{{ asset('/backend/plugins/morris/morris.css') }}">
	
  	<!-- jvectormap -->
  	<link rel="stylesheet" href="{{ asset('/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">

  	<!-- Date Picker -->
  	<link rel="stylesheet" href="{{ asset('/backend/plugins/datepicker/datepicker3.css') }}">

  	<!-- Daterange picker -->
  	<link rel="stylesheet" href="{{ asset('/backend/plugins/daterangepicker/daterangepicker.css') }}">

	<!-- bootstrap wysihtml5 - text editor -->
  	<link rel="stylesheet" href="{{ asset('/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

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
		<!-- Sparkline -->
		<script src="{{ asset('/backend/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
		<!-- jvectormap -->
		<script src="{{ asset('/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
		<script src="{{ asset('/backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
		<!-- jQuery Knob Chart -->
		<script src="{{ asset('/backend/plugins/knob/jquery.knob.js') }}"></script>
		<!-- daterangepicker -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
		<script src="{{ asset('/backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
		<!-- datepicker -->
		<script src="{{ asset('/backend/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
		<!-- Bootstrap WYSIHTML5 -->
		<script src="{{ asset('/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
		<!-- Slimscroll -->
		<script src="{{ asset('/backend/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
		<!-- FastClick -->
		<script src="{{ asset('/backend/plugins/fastclick/fastclick.js') }}"></script>
		<!-- AdminLTE App -->
		<script src="{{ asset('/backend/admin-lte/js/app.min.js') }}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{ asset('/backend/admin-lte/js/demo.js') }}"></script>
		

  </body>
</html>
