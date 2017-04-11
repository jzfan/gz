<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="/flatlab/img/favicon.html">

    <title>Blank</title>

    <!-- Bootstrap core CSS -->
    <link href="/flatlab/css/bootstrap.min.css" rel="stylesheet">
    <link href="/flatlab/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/flatlab/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/flatlab/assets/summernote/summernote.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/flatlab/css/style.css" rel="stylesheet">
    <link href="/flatlab/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="/flatlab//html5shiv.js"></script>
      <script src="/flatlab//respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
@include('backend.header');
      <!--header end-->
      <!--sidebar start-->
@include('backend.sidebar')
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
@includeWhen(session()->has('success'), 'backend.notice.success')
@includeWhen(session()->has('errors'), 'backend.notice.errors')
              <!-- page start-->
@yield('content')
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/flatlab/js/jquery.js"></script>
    <script src="/flatlab/js/bootstrap.min.js"></script>
    <script src="/flatlab/js/jquery.scrollTo.min.js"></script>
    <script src="/flatlab/js/jquery.tagsinput.js"></script>
    <script src="/flatlab/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/flatlab/assets/summernote/summernote.js"></script>
    <script src="/flatlab/assets/summernote/summernote.js"></script>
    <script src="/flatlab/assets/summernote/lang/summernote-zh-CN.min.js"></script>


    <!--common script for all pages-->
    <script src="/flatlab/js/common-scripts.js"></script>
    <script type="text/javascript" src="/flatlab/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
  var uri = window.location.pathname;
  var li = $('[href="'+uri+'"]').closest('li').addClass('active');
  var ul = li.closest('ul');
  if (ul.attr('class') == 'sub') {
      ul.closest('li').addClass('active');
  }
</script>
@yield('js')
  </body>
</html>
