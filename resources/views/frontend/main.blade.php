<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/gaia/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/gaia/assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>My Web</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="/gaia/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="/gaia/assets/css/gaia.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
{{--     <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="#" rel="stylesheet">
    <link href="/gaia/assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet"> --}}
</head>

<body>

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="#" class="navbar-brand">
                    My Web
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li>
                        <a href="/articles">新闻</a>
                    </li>
                    <li class="dropdown">
                        <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-share-alt"></i> 寻找
                        </a>
                        <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square"></i> 工头</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i> 工人</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/login" class="btn btn-primary btn-fill">登录</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>


@yield('content')


    <footer class="footer footer-big footer-color-black" data-color="black">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="info">
                        <h5 class="title">站内导航</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">首页</a></li>
                                <li>
                                    <a href="#">业主主页</a>
                                </li>
                                <li>
                                    <a href="#">工头主页</a>
                                </li>
                                <li>
                                    <a href="#">工人主页</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title"> 帮助 &amp; 支持</h5>
                         <nav>
                            <ul>
                                <li>
                                    <a href="#">联系我们</a>
                                </li>
                                <li>
                                    <a href="#">了解流程</a>
                                </li>
                                <li>
                                    <a href="#">队伍 &amp; 进度</a>
                                </li>
                                <li>
                                    <a href="#">平台政策</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="info">
                        <h5 class="title">新闻 &amp; 图集</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> on minima. Deserunt quisuscipit aspernatur excepturi maiores ipsam.s...
                                        <hr class="hr-small">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter">non miqui facere molestiae facilis vitae quibusdam explicabo qui...
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title">关注我们</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-social btn-facebook btn-simple">
                                        <i class="fa fa-facebook-square"></i> QQ
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-dribbble btn-simple">
                                        <i class="fa fa-dribbble"></i> 微信
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-twitter btn-simple">
                                        <i class="fa fa-twitter"></i> 微博
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                 © <script> document.write(new Date().getFullYear()) </script> My Web, Coding Happy
            </div>
        </div>
    </footer>

</body>

<!--   core js files    -->
<script src="/gaia/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="/gaia/assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="/gaia/assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="#"></script>

<!--   file where we handle all the script from the My Web - Bootstrap Template   -->
<script type="text/javascript" src="/gaia/assets/js/gaia.js"></script>

</html>
