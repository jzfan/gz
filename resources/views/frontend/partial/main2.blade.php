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
<style>
	html,body{
		font-family: '微软雅黑'
	}
</style>
</head>
<body class="dark_version">
<div id="preloader"></div>

@include('frontend.partial.header2')

@yield('content')

    <!-- Content -->

<!-- ******右侧边悬浮模块start****** -->
    @include('frontend.partial.aside')
<!-- ******右侧边悬浮模块end****** -->

<!-- ************** Footer Area Start ************** -->
<footer class="footer_area">
    <!-- Bottom Footer Area Start -->
    <div class="footer_bottom_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer_bottom wow fadeInDown" data-wow-delay=".2s">
                       <p>备案号：<a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">鄂ICP备17006010号-1</a></p>
                        <p>58工长通有限公司&nbsp;<i class="fa fa-phone" aria-hidden="true"></i>&nbsp;联系电话：<a href="tel:4001667566">4001667566</a></p>
                        <p>© 2017 58gzt.com 版权：武汉58工长通有限公司</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ************** Footer Area End ************** -->
<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;"><i class="fa fa-angle-up"></i></a>
<!-- scroll top button -->

<!-- JavaScript  files -->

@include('frontend.partial.js')

@yield('js')
</body>
</html>
