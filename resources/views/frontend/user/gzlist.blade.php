@extends('frontend.partial.main2')

@section('content') 
<nav class="navbar navbar-win">
  <div class="container">
    <p class="com-nav-child">
        <a href="/">首页</a>/ <a href="">找工长</a>
    </p>
    @include('frontend.partial.form-leader-search')
  </div>
</nav>



<section class="our_advisor_area section_padding_100 tabbable">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav nav-pills check-type">
                  <li role="presentation"><a>明星工长</a></li>
                  <li role="presentation"><a>最佳口碑</a></li>
                  <li role="presentation"><a>签单王</a></li>
                </ul>
            </div>
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
            @foreach ($rank_list as $leader)
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

        <div class="row win_feature">
            <!-- 备注  工长循环12个出来 -->
            @foreach ($points_list as $leader)
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

        <div class="row win_feature">
            <!-- 备注  工长循环12个出来 -->
            @foreach ($WO_list as $leader)
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
