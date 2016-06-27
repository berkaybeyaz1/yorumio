<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Yorum.io Yonetim Paneli</title>
@include('admin.vendor.css')
</head>
<body class="with-side-menu">

@include('admin.vendor.header')

@include('admin.vendor.menu')
<div class="page-content">
    <div class="container-fluid">
        @yield('content')
    </div><!--.container-fluid-->
</div><!--.page-content-->

@include('admin.vendor.js')
</body>
</html>