<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'My Web Site')</title>

    <meta charset='utf-8'>
    <script src='{{ asset('js/jquery.min.js') }}'></script>
    <script src='{{ asset('js/skel.min.js') }}'></script>
    <script src='{{ asset('js/init.js') }}'></script>
    <noscript>
    	<link rel='stylesheet' href='{{ asset('css/skell.css') }}'>
    	<link rel='stylesheet' href='{{ asset('css/style.css') }}'>
    </noscript>

    @yield('head')

</head>
<body class="index">

    @yield('content')

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>

</body>
</html>