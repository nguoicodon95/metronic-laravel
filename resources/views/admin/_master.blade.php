<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8"/>
	<title>Metronic | Admin Dashboard Template</title>
	<base href="{{ asset('/') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<meta name="csrf-token" content="{{ csrf_token() }}"/>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<link href="/_admin_assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="/_admin_assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
	<link href="/_admin_assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/_admin_assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link href="/_admin_assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
	@stack('css_import')
	<!-- BEGIN THEME STYLES -->
	<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
	<link href="/_admin_assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
	<link href="/_admin_assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="/_admin_assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
	<link href="/_admin_assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="/_admin_assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico"/>
	@stack('style')
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="@yield('class_body')page-header-fixed page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
@include('admin._include.header')
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
  @include('admin._include.sidebar')
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Name <small>note</small></h1>
				</div>
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				@include('admin._include.toolbar')
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			@include('admin._include.breadcrumb')
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			@yield('content')
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@include('admin._include.footer')
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/_admin_assets/global/plugins/respond.min.js"></script>
<script src="/_admin_assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="/_admin_assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/_admin_assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/_admin_assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/_admin_assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/_admin_assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/_admin_assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/_admin_assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/_admin_assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/_admin_assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/_admin_assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
@stack('js_import')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/_admin_assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/_admin_assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="/_admin_assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
	jQuery(document).ready(function() {
		 Metronic.init(); // init metronic core componets
		 Layout.init(); // init layout
		 Demo.init(); // init demo features
	});
	$.ajaxSetup({
		headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
</script>
@stack('script')
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
