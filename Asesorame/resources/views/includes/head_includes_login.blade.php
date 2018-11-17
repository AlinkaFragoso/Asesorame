<!-- Vendor CSS -->
<link href="{{ URL::asset('assets/material_admin/template/vendors/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/material_admin/template/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

<!-- CSS -->
<link href="{{ URL::asset('assets/material_admin/template/css/app_1.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/material_admin/template/css/app_2.min.css') }}" rel="stylesheet">

<!-- Styles -->
<link href="{{ URL::asset('/assets/css/siunam.css') }}" rel="stylesheet">
<link href="{{ URL::asset('/assets/css/areas_verdes.css') }}" rel="stylesheet">

<!-- Scripts -->
<script>
	window.MUNAM = {!! json_encode([
		'csrfToken' => csrf_token(),
	]) !!};
</script>
