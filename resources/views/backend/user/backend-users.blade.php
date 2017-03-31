@extends('backend.main')

@section('content')

<div class="row">
<div class="col-md-12">
  <div class="panel-group m-bot20" id="accordion">
      <div class="panel panel-default">
          <div class="panel-heading">
              <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      提升一般用户为 管理员/编辑
                  </a>
              </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse" style="height: auto;">
              <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action='/roles' id='role-form'>
                  {!! csrf_field() !!}
                      <div class="form-group">
                          <label class="col-sm-2 control-label">手机号</label>
                          <div class="col-sm-10">
                              <input type="text" name='phone' class="form-control" placeholder="请输入手机号." required autofocus>
                              <span class="help-block">提升已注册用户为管理员或者编辑</span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 control-label">角色</label>
                          <div class="col-sm-10">
                            <div class="radios">
                                <label class="label_radio r_on" for="radio-01">
                                    <input name="role" id="radio-01" value="editor" type="radio" checked="">编辑
                                </label>
                                <label class="label_radio r_off" for="radio-02">
                                    <input name="role" id="radio-02" value="admin" type="radio">管理员
                                </label>
                            </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 control-label"></label>
                          <div class="col-sm-10">
                              <button class="btn btn-danger" type="submit">提交</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@foreach ($backendUsers as $backendUser)
      <div class="col-lg-4">
        <!--widget start-->
        <aside class="profile-nav alt white-border">
          <section class="panel">
            <div class="user-heading alt white-bg">
              <a href="#">
                <img alt="" src="{{ $backendUser->avatar }}">
          </a>
          <h1>{{ $backendUser->name }}</h1>
          <p>电话： {{ $backendUser->phone }}</p>
          <p>角色： {{ $backendUser->role }}</p>
    </div>

    <ul class="nav nav-pills nav-stacked">
        <li><a href="javascript:;"> <i class="icon-time"></i> Mail Inbox <span class="label label-primary pull-right r-activity">19</span></a></li>
        <li><a href="javascript:;"> <i class="icon-calendar"></i> Recent Activity <span class="label label-info pull-right r-activity">11</span></a></li>
        <li><a href="javascript:;"> <i class="icon-bell-alt"></i> Notification <span class="label label-warning pull-right r-activity">03</span></a></li>
        <li><a href="javascript:;"> <i class="icon-envelope-alt"></i> Message <span class="label label-success pull-right r-activity">10</span></a></li>
  </ul>

</section>
</aside>
<!--widget end-->
</div>
@endforeach

</div>

@stop