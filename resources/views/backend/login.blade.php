<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>FlatLab - Flat &amp; Responsive Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="/flatlab/css/bootstrap.min.css" rel="stylesheet">
    <link href="/flatlab/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/flatlab/css/style.css" rel="stylesheet">
    <link href="/flatlab/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="/login" method="POST">
      {!! csrf_field() !!}
        <h2 class="form-signin-heading">立 即 登 录</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" name='phone' placeholder="电话" autofocus="">
            <input type="password" class="form-control" placeholder="Password" name='password'>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">提交</button>

        </div>

      </form>

    </div>


  

</body></html>