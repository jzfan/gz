@extends('frontend.partial.main2')

@section('content') 
<nav class="navbar navbar-win">
  <div class="container">
    <p class="com-nav-child">
        <a href="/">首页</a>/ <a href="">找工长</a>
    </p>
    <form class="navbar-form navbar-right" action="/leaders/search" method="POST">
        {!! csrf_field() !!}
        <div class="form-group">
          <input type="text" class="form-control" name='name' placeholder="输入工长">
        </div>
        <button type="submit" class="btn btn-default">搜索</button>
    </form>
  </div>
</nav>



<section class="our_advisor_area section_padding_100 tabbable">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading">
                    <h3>工长团队</h3>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>
    </div>



    <div class="container tab-contain">
        <div class="row win_feature">
            <!-- 备注  工长循环12个出来 -->
            @foreach ($result as $leader)
            <a href="/leaders/{{ $leader->user->id }}"><div class="col-sm-4 col-md-3">
                <!-- Single Feature Area Start -->
                <div class="single_feature wow fadeInDown"  data-delay='0.3' style="margin-bottom: 1.5rem;">    
                    <div class="bg-icon">
                        <img src="{{ $leader->user->avatar }}"  alt="">
                    </div>
                    <!-- Single Feature Image Area End -->
                    <div class="feature_text">
                        <h4><span class="w_name">{{ $leader->user->name }}</span></h4>
                        <p>工长签单：{{ $leader->WO }}</p>
                        <p>网站保证金：{{ $leader->deposit }}元</p>
                        <p>接单区域：{{ $leader->area }}</p>
                    </div>
                    <!-- Single Feature Text Area End -->
                </div>
            </div></a>
            @endforeach
        </div>

    </div>

</section>
@stop
