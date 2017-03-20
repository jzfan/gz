@extends('backend.main')

@section('content')

<div class="row">
@foreach ($users as $user)
      <div class="col-lg-4">
        <!--widget start-->
        <aside class="profile-nav alt green-border">
          <section class="panel">
            <div class="user-heading alt green-bg">
              <a href="#">
                <img alt="" src="/flatlab/img/profile-avatar.jpg">
          </a>
          <h1>{{ $user->name }}</h1>
          <p>电话： {{ $user->phone }}</p>
    </div>

    <ul class="nav nav-pills nav-stacked">
        <li><a href="javascript:;"> <i class="icon-time"></i> 签单 <span class="label label-primary pull-right r-activity">{{ $user->manager->WO }}</span></a></li>
        <li><a href="javascript:;"> <i class="icon-star"></i> 星级 <span class="label label-info pull-right r-activity">{{ $user->manager->rank }}</span></a></li>
        <li><a href="javascript:;"> <i class="icon-bell-alt"></i> 积分 <span class="label label-warning pull-right r-activity">{{ $user->manager->points }}</span></a></li>
        <li><a href="javascript:;"> <i class="icon-legal"></i> 施工质量 <span class="label label-success pull-right r-activity">{{ $user->manager->quality }}</span></a></li>
        <li><a href="javascript:;"> <i class="icon-thumbs-up-alt"></i> 从业 <span class="label label-success pull-right r-activity">{{ $user->manager->working_age }}年</span></a></li>
        <li><a href="javascript:;"> <i class="icon-briefcase"></i> 曾任职 <span class="label label-success pull-right r-activity">{{ $user->manager->ex_company }}</span></a></li>
        <li><a href="javascript:;"> <i class="icon-phone"></i> 电话 <span class="label label-success pull-right r-activity">{{ $user->manager->tel or '' }}</span></a></li>
        <li><a href="javascript:;"> <i class="icon-leaf"></i> 籍贯 <span class="label label-success pull-right r-activity">{{ $user->manager->from }}</span></a></li>
        <li><a href="javascript:;"> <i class="icon-eye-open"></i> 关注人数 <span class="label label-success pull-right r-activity">{{ $user->manager->fans }}</span></a></li>
        <li><a href="javascript:;"> <i class="icon-yen"></i> 保证金 <span class="label label-success pull-right r-activity">{{ $user->manager->deposit }}</span></a></li>
  </ul>

</section>
</aside>
<!--widget end-->
</div>
@endforeach
</div>
{!! $users->links() !!}
@stop