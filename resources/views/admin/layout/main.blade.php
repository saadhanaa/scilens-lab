<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ config('app.name', 'Scilen() :: 4x4') }}</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts & Styles -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="/admin_compiled/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin_compiled/css/ready.css">
	<link rel="stylesheet" href="/admin_compiled/css/demo.css">
</head>


<body>
    <div class="wrapper">
        @include("admin.partials.header")
        @include("admin.partials.sidebar")
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid" style="min-height:600px;">
                  @yield('content')
                </div>
            </div>
            @include("admin.partials.footer")
        </div>
    </div>
    @include("admin.partials.modal")
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="/admin_compiled/js/core/jquery.3.2.1.min.js"></script>
<script src="/admin_compiled/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="/admin_compiled/js/core/popper.min.js"></script>
<script src="/admin_compiled/js/core/bootstrap.min.js"></script>
<script src="/admin_compiled/js/plugin/chartist/chartist.min.js"></script>
<script src="/admin_compiled/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="/admin_compiled/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="/admin_compiled/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="/admin_compiled/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/admin_compiled/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="/admin_compiled/js/plugin/chart-circle/circles.min.js"></script>
<script src="/admin_compiled/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="/admin_compiled/js/ready.min.js"></script>
<script src="/admin_compiled/js/demo.js"></script>
</html>