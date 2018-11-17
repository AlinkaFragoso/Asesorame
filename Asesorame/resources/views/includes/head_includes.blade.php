<!-- Vendor CSS -->
<link href="{{ URL::asset('assets/material_admin/template/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/material_admin/template/vendors/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/material_admin/template/vendors/bower_components/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/material_admin/template/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/material_admin/template/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/material_admin/template/vendors/bower_components/lightgallery/dist/css/lightgallery.min.css') }}" rel="stylesheet">


<!-- Font Awesome -->
<link href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

<!-- CKeditor -->
<script type="text/javascript" src="{{ URL::asset('assets/ckeditor/ckeditor.js') }}"></script>

<!-- Dropzone -->
<link rel="stylesheet" href="{{ URL::asset('/assets/dropzone/dropzone.css') }}">

<!-- Datetime -->
<link rel="stylesheet" href="{{ URL::asset('/assets/material_admin/template/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">

<!-- DataTables -->
<link href="{{ URL::asset('assets/material_admin/template/vendors/bower_components/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet">

<!-- Select -->
<link href="{{ URL::asset('assets/material_admin/template/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet">



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
<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.js') }}"></script>

<script type="text/javascript">
    $('.delete_stupidity').on('click', function(e){
        if(!confirm('Seguro?')){
            e.preventDefault();
        }
    });
</script>
