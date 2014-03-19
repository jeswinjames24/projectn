<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		@include('includes.head')
		<link rel="shortcut icon" href="favicon.ico" />
    <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/js/login.js"></script>
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login example2">
		<div class="main-login col-sm-4 col-sm-offset-4">
			<div class="logo">PROJECTN-DEVELOPMENT
			</div>

    <div class="content">
									@yield('content')
								</div>
    <script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
    	</body>
	<!-- end: BODY -->
</html>