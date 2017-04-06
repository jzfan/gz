@extends('backend.main')

@section('content')

<div class="row">
@foreach ($customers as $customer)
      <div class="col-lg-4">
        <!--widget start-->
        <aside class="profile-nav alt red-border">
          <section class="panel">
            <div class="user-heading alt red-bg">
              <a href="#">
                <img alt="" src="{{ $customer->avatar }}">
          </a>
          <h1>{{ $customer->name }}</h1>
          <p>电话： {{ $customer->phone }}</p>
    </div>
@foreach ($customer->customerApplies as $apply)
    <ul class="nav nav-pills nav-stacked">
        <li><a href="javascript:;"> <i class="icon-time"></i> 小区 <span class="label label-primary pull-right r-activity">{{ $apply->block }}</span></a></li>
        <li><a href="javascript:;"> <i class="icon-star"></i> 面积 <span class="label label-info pull-right r-activity">{{ $apply->square }} 平方米</span></a></li>
        <li><a href="javascript:;"> <i class="icon-bell-alt"></i> 装修计划 <span class="label label-warning pull-right r-activity">{{ $apply->plan }}</span></a></li>
        <li><a href="javascript:;"> <i class="icon-yen"></i> 预算 <span class="label label-success pull-right r-activity">{{ $apply->budget }} 万<i class="icon-cny"></i></span></a></li>
        <li><a href="javascript:;"> <i class="icon-long-arrow-right"></i> 进度 <span class="label label-danger pull-right r-activity">{{ $apply->status }} </span></a></li>
  </ul>
@endforeach
</section>
</aside>
<!--widget end-->
</div>
@endforeach
s
</div>
{!! $customers->links() !!}
@stop