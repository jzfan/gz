<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.partial.meta')
<link rel="stylesheet" href="/css/style.css">
<!-- Responsive css -->
<link rel="stylesheet" href="/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/responsive.css">
<link rel="stylesheet" href="/css/app.css">
<!--[if IE]>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body class="dark_version">
<div id="preloader"></div>

<!-- ***************** Header Start ***************** -->
@include('frontend.partial.header2')
<!-- ***************** Header End ***************** -->
@yield('content')



<!-- ******底部浮层模块end****** -->


<!-- ************** All jQuery Plugins ************** -->

@include('frontend.partial.js')

</body>

</html>
