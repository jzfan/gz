@extends('backend.main')

@section('content')

<div class="row">
@foreach ($admins as $admin)
      <div class="col-lg-4">
        <!--widget start-->
        <aside class="profile-nav alt white-border">
          <section class="panel">
            <div class="user-heading alt white-bg">
              <a href="#">
                <img alt="" src="/flatlab/img/profile-avatar.jpg">
          </a>
          <h1>{{ $admin->user->name }}</h1>
          <p>电话： {{ $admin->user->phone }}</p>
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