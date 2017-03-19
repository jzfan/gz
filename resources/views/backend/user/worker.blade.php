@extends('backend.main')

@section('content')

<div class="row">
@foreach ($users as $user)
      <div class="col-lg-4">
        <!--widget start-->
        <aside class="profile-nav alt red-border">
          <section class="panel">
            <div class="user-heading alt red-bg">
              <a href="#">
                <img alt="" src="/flatlab/img/profile-avatar.jpg">
          </a>
          <h1>{{ $user->name }}</h1>
          <p>电话： {{ $user->phone }}</p>
    </div>

    <ul class="nav nav-pills nav-stacked">
        <li><a href="javascript:;"> <i class="icon-time"></i> 工种 <span class="label label-primary pull-right r-activity">{{ $user->worker->craft }}</span></a></li>
        <li><a href="javascript:;"> <i class="icon-star"></i> 工作区域 <span class="label label-info pull-right r-activity">{{ $user->worker->area }}</span></a></li>
        <li><a href="javascript:;"> <i class="icon-bell-alt"></i> 年龄 <span class="label label-warning pull-right r-activity">{{ $user->worker->birthday }}</span></a></li>
        <li><a href="javascript:;"> <i class="icon-yen"></i> 日薪 <span class="label label-success pull-right r-activity">{{ $user->worker->daily_wage }} <i class="icon-cny"></i></span></a></li>
  </ul>

</section>
</aside>
<!--widget end-->
</div>
@endforeach
{!! $users->links() !!}
</div>
@stop