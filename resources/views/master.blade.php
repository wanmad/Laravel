<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
    <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.min.css') !!}">
    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="/css/roboto.min.css" rel="stylesheet">
    <link href="/css/material.min.css" rel="stylesheet">
    <link href="/css/ripples.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>

</head>
<body>

@include('shared.navbar')

@yield('content')

<script src="{!! asset('js/jquery-2.1.4.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>

<script src="/js/ripples.min.js"></script>
<script src="/js/material.min.js"></script>
<script>
    $(document).ready(function() {
        // This command is used to initialize some elements and make them work properly
        $.material.init();
    });
</script>
</body>

</html>