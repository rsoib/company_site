<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ (isset($title)) ? $title: 'Theme'  }}</title>

    <!-- core CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('assets/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head>
<!--/head-->

<body>

    <!-- header -->
		@yield('navigation')
    <!-- /header -->
	
    <!-- content -->
        @yield('content')

    <!-- /content -->


    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
