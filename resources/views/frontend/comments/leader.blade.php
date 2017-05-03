@extends('frontend.partial.main2') 

@section('content')
<!-- ************** About Us Area Start ************** -->
<section class="about_area" id="about">
  <div class="container">
    <div class="about_us_area">
      <div class="row">
        <div class="col-xs-12 col-md-12 section_padding_100 wow fadeInUp">
          <!-- Section Heading Start -->
          <div class="section_heading">
            <h4>服务至上 客户至上</4>
            <h3>{{ $leader->name }} 工长的评价</h3>
          </div>
          <!-- Section Heading End -->

          <!-- About Us Text Start -->
          <div class="col-md-12 gz-pj-img">
            <img src="{{ $leader->avatar }}" class="img-responsive img-circle">
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- end./ container -->
</section>

<section class="container"> 

<div class="panel panel-default">
  <div class="panel-heading">业主最新评价</div>
  <div class="panel-body">
    <ul class="list-group">
    @foreach ($comments as $comment)
      <li class="list-group-item">
        <p>{{ $comment->created_at->format('Y-m-d') }}</p>
        <div class="row">
        <div class="col-md-10">
        <blockquote>
          <p>{{ $comment->content }}</p>
          <footer><cite title="Source Title">{{ $comment->user->name }}</cite></footer>
        </blockquote>
        </div>

        <div class="col-md-2"><img src="{{ $comment->user->avatar }}" alt="..." class="img-rounded"></div>
      </div>
    </li>
    @endforeach
  </ul>
  </div>
{!! $comments->links() !!}

</div>
</section>



<!-- ************** Our Advisor Area Start ************** -->
<section class="our_advisor_area section_padding_100" id="advisor">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <!-- Section Heading Start -->
        <div class="section_heading">
          <p>我们的工长团队</p>
          <h3>明星工长</h3>
        </div>
        <!-- Section Heading End -->
      </div>
    </div>


  <div class="container">
    <div class="row win_feature">
@foreach (\Gz\User\Leader::with('user')->orderBy('WO', 'desc')->take(4)->get() as $leader)
      <a href="/leaders/{{ $leader->user->id }}"><div class="col-sm-4 col-md-3">
        <!-- Single Feature Area Start -->
        <div class="single_feature wow fadeInUp" data-wow-delay=".2s">  
          <div class="bg-icon">
            <img src="{{ $leader->user->avatar }}" alt="">
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
      <div class="row w-more">
        <div class="col-xs-12 text-center"><a href="/leaders" role="button" class="btn btn-danger btn-lg">查看更多&nbsp;<span class="glyphicon glyphicon-forward"></span></a></div>
      </div>
      
    </div>
  </div>

  </div>
</section>
<!-- ************** Our advisor Area End ************** -->
<!-- ************** Our advisor Area End ************** -->
@stop