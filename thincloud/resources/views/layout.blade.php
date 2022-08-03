<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    @yield('css')
</head>

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="">
    @include('sabit.menu')
    @include('sabit.nav')
    @yield('content')

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @include('sabit.footer')
    @yield('js')
</body>

</html>
