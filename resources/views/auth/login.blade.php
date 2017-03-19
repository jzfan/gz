<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="/flatlab/img/favicon.html">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="/flatlab/css/bootstrap.min.css" rel="stylesheet">
    <link href="/flatlab/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/flatlab/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/flatlab/css/style.css" rel="stylesheet">
    <link href="/flatlab/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

    <form class="form-signin" role="form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
        <h2 class="form-signin-heading">立即登陆</h2>
        <br>
            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="电话号码" required autofocus>
                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" placeholder="6位以上密码" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>


            <label class="checkbox">
                <input type="checkbox" value="remember-me" name="remember" {{ old('remember') ? 'checked' : '' }}> 记住我！
                <span class="pull-right"> <a href="#"> 忘记密码?</a></span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
            <p>or 通过社会化登陆</p>
            <div class="login-social-link">
                <a href="/flatlab/index.html" class="facebook">
                    <i class="icon-qq"></i>
                    QQ
                </a>
                <a href="/flatlab/index.html" class="twitter">
                    <i class="icon-wechat"></i>
                    Wechat
                </a>
            </div>


      </form>

    </div>


  </body>
</html>
